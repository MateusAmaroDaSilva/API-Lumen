# 🎟️ Sistema de Compra de Ingressos

Projeto da disciplina **Arquitetura de Software e Desenvolvimento Full-Stack** (UNIMAR — Prof.
William Castro). API REST em **Lumen 10 / PHP 8.1+** com frontend em **Vue 3 + Vite**, construída
sobre **DDD (Domain-Driven Design)** e **Clean Architecture**.

> **Escopo escolhido:** Escopo 2 — Sistema de Compra de Ingressos.
> **Bounded Contexts:** `Eventos` (cadastro) e `Vendas` (compra de ingressos).

---

## 1. O que o sistema faz

- **Cadastrar eventos** (nome, descrição, preço, data, capacidade).
- **Listar e visualizar** eventos.
- **Comprar ingressos** de forma assíncrona (fila), com confirmação por **e-mail**.
- **Listar ingressos** vendidos.

### Regras de negócio obrigatórias

| # | Regra | Status | Onde está implementada |
|---|-------|--------|------------------------|
| 1 | **Não vender acima da capacidade** | ✅ | `Event::decrementCapacity()` lança exceção quando esgota + `lockForUpdate` em `ProcessTicketPurchaseUseCase` impede *overselling* em compras simultâneas |
| 2 | **Impedir compra de eventos passados** | ✅ | `Event::isPastEvent()`, checado em `RequestTicketUseCase` e `ProcessTicketPurchaseUseCase` |
| 3 | **Validar status do pagamento** | ✅ | `ProcessTicketPurchaseJob` simula um **gateway de pagamento**: só executa o `ProcessTicketPurchaseUseCase` (que cria o ingresso e envia o e-mail de confirmação) se o pagamento for **aprovado**; se **recusado**, envia e-mail de falha (`TicketFailedMail`) e **não** cria o ingresso. A forma de pagamento (`payment_method`) é enviada na compra |

---

## 2. Arquitetura (DDD + Clean Architecture)

A regra de ouro é a **direção das dependências**: as camadas de fora dependem das de dentro,
**nunca o contrário**. O `Domain` é **PHP puro**, sem nenhuma dependência de framework.

```
┌─────────────────────────────────────────────────────────────┐
│  HTTP (Controllers)  →  Application (Use Cases)  →  Domain    │
│                                                       ▲       │
│            Infrastructure (Eloquent, Job, E-mail) ────┘       │
│            implementa as INTERFACES definidas no Domain       │
└─────────────────────────────────────────────────────────────┘
```

### 2.1 Domain — `app/Domain/` (regras de negócio, PHP puro)
Entidades ricas que protegem suas próprias invariantes + interfaces de repositório.

- `Event/Entities/Event` — garante preço/capacidade ≥ 0; `decrementCapacity()` lança exceção se
  esgotado; `isPastEvent()` indica evento passado.
- `Sale/Entities/Ticket` — **máquina de estados** (`pending → confirmed | expired`); transições
  inválidas lançam exceção.
- `Event/Repositories/EventRepositoryInterface` e `Sale/Repositories/TicketRepositoryInterface` —
  **contratos** que a Infrastructure precisa cumprir.

### 2.2 Application — `app/Application/` (orquestração)
Casos de uso e DTOs. Dependem só das **interfaces** do Domain (nunca do Eloquent).

- `UseCases/CreateEventUseCase`, `GetEventUseCase`, `ListEventsUseCase`, `ListTicketsUseCase`.
- `UseCases/RequestTicketUseCase` — pré-validação rápida (evento existe? não é passado? tem vaga?)
  e despacha o job → responde **HTTP 202**.
- `UseCases/ProcessTicketPurchaseUseCase` — roda dentro de `DB::transaction()` com
  `lockForUpdate` na linha do evento (impede *overselling*) e, ao final, dispara o e-mail.
- `DTOs/CreateEventDTO`, `DTOs/BuyTicketDTO` — fronteira de entrada (dados validados).
- `Notifications/TicketNotifierInterface` — **porta** para notificar o comprador (a implementação
  concreta fica na Infrastructure).

### 2.3 Infrastructure — `app/Infrastructure/` (detalhes técnicos)
Implementações concretas das interfaces do Domain/Application.

- `Models/EventModel`, `Models/TicketModel` — modelos Eloquent.
- `Repositories/EloquentEventRepository`, `EloquentTicketRepository` — traduzem entre Eloquent e as
  entidades do Domain.
- `Jobs/ProcessTicketPurchaseJob` — job de fila (3 tentativas, timeout 60s). Simula o **gateway de
  pagamento**: se aprovado, chama o `ProcessTicketPurchaseUseCase`; se recusado, envia
  `TicketFailedMail` e encerra sem criar o ingresso (Regra 3).
- `app/Mail/TicketFailedMail` + `resources/views/emails/ticket_failed.blade.php` — e-mail de
  **pagamento recusado** (Mailable do Laravel + view Blade).
- `Notifications/MailTicketNotifier` — envia o e-mail de comprovante via SMTP. O HTML reproduz o
  **design system do frontend** ("Box Office / Letterpress": papel creme, tinta, vermelho
  vermilion, motivos de ingresso). Falha de e-mail **só é logada** — não desfaz a compra já
  confirmada.

### 2.4 HTTP — `app/Http/`
Controllers finos: só validam a entrada e chamam **um** caso de uso.

- `Controllers/Api/V1/EventController` (contexto Eventos) e `TicketController` (contexto Vendas) —
  **controllers separados por bounded context**.
- `Middleware/CorsMiddleware` e `Middleware/JsonBodyMiddleware` — middlewares globais.

### 2.5 Injeção de Dependência
`app/Providers/RepositoryServiceProvider` é o **único** ponto que liga o Application à
Infrastructure: faz o *bind* das interfaces do Domain às implementações Eloquent (e do
`TicketNotifierInterface` ao `MailTicketNotifier`).

---

## 3. Fluxo de compra de ingresso (passo a passo)

```
POST /v1/tickets/buy
  → RequestTicketUseCase        (checagem rápida: evento existe? não é passado? tem vaga?)
  → dispatch(ProcessTicketPurchaseJob)        → responde 202 Accepted
        ↓ (worker da fila processa de forma assíncrona)
  → ProcessTicketPurchaseJob
      → simula o gateway de pagamento (aprovado / recusado)
          • RECUSADO → envia TicketFailedMail e encerra (NÃO cria ingresso)
          • APROVADO ↓
  → ProcessTicketPurchaseUseCase  dentro de  DB::transaction()
      → findByIdWithLock()        (SELECT ... FOR UPDATE — trava a linha do evento)
      → User::firstOrCreate()
      → ticket->confirm()  +  event->decrementCapacity()
      → eventRepository->save()  +  ticketRepository->create()
      → TicketNotifierInterface->notifyConfirmed()   (e-mail de comprovante)
```

### Por que a trava (`lockForUpdate`) importa — *overselling*
Imagine um evento com **1 vaga** e **2 compras simultâneas**. Sem a trava, as duas leem
"capacidade = 1" ao mesmo tempo e ambas vendem → vendeu 2 para 1 vaga. Com `lockForUpdate`, a 2ª
transação **espera** a 1ª terminar, depois lê "capacidade = 0" e é recusada. É a defesa de
concorrência do sistema.

> ⚠️ A compra é **assíncrona**: sem o worker da fila rodando, o `POST /v1/tickets/buy` retorna 202,
> mas o ingresso fica parado na fila e nunca é confirmado.

---

## 4. Endpoints da API

Base: `http://localhost:8000` — todas as rotas de negócio sob o prefixo `/v1`.

| Método | Rota | Contexto | Descrição |
|--------|------|----------|-----------|
| GET  | `/` | — | Healthcheck (nome + versão) |
| GET  | `/v1/events` | Eventos | Lista todos os eventos |
| POST | `/v1/events` | Eventos | Cadastra um evento |
| GET  | `/v1/events/{id}` | Eventos | Detalha um evento |
| POST | `/v1/tickets/buy` | Vendas | Solicita compra de ingresso (assíncrona → 202) |
| GET  | `/v1/tickets` | Vendas | Lista os ingressos |

> Documentação interativa: `public/swagger.html` (consome `public/openapi.json`).

### Exemplos

```bash
# Criar evento
curl -X POST http://localhost:8000/v1/events \
  -H "Content-Type: application/json" \
  -d '{"name":"Show de Jazz","description":"Noite de jazz","price":120.00,"event_date":"2026-12-20 21:00","capacity":100}'

# Comprar ingresso (retorna 202; o worker valida o pagamento, confirma e envia o e-mail)
curl -X POST http://localhost:8000/v1/tickets/buy \
  -H "Content-Type: application/json" \
  -d '{"event_id":1,"user_name":"Maria","user_email":"maria@exemplo.com","payment_method":"credit_card"}'
```

---

## 5. Frontend (Vue 3 + Vite) — `frontend/`

SPA que consome a API. Design system próprio em `src/assets/main.css` ("Box Office / Letterpress":
papel creme, tinta, vermilion; fontes Fraunces, Archivo e Space Mono).

- `src/views/` — telas: `DashboardView`, `EventsListView`, `EventDetailView`, `EventCreateView`,
  `TicketsListView`.
- `src/components/` — `AppHeader`, `AppFooter`, `EventCard` (ingresso estilizado), `StatusBadge`,
  `Toast`.
- `src/services/` — `api.js` (cliente HTTP), `eventService.js`, `ticketService.js`.
- `src/router/` — rotas do Vue Router.

---

## 6. Banco de dados

**Um único banco** (requisito da atividade). Em desenvolvimento, **SQLite** já incluso em
`database/database.sqlite`. Migrations em `database/migrations/`:

- `create_users_table`, `create_events_table`, `create_tickets_table`, `create_jobs_table` (tabela
  da fila `database`).

---

## 7. Configuração de ambiente

Copie `.env.example` para `.env`. Para usar o SQLite incluso:

```
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### E-mail (SMTP) — comprovante de compra
Configuração em `config/mail.php`, valores no `.env`:

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_USERNAME=<seu-email@gmail.com>
MAIL_PASSWORD="<senha de app de 16 dígitos do Gmail>"
MAIL_FROM_ADDRESS=<seu-email@gmail.com>
MAIL_FROM_NAME="Ticket-system"
```

> Use uma **senha de app** do Gmail (não a senha normal da conta). O `.env` está no `.gitignore`
> — não commitar credenciais. Em desenvolvimento, dá para usar `MAIL_MAILER=log` para "enviar" o
> e-mail ao log em vez de um SMTP real.

---

## 8. Como rodar

Pré-requisitos: **PHP 8.1+**, **Composer** e **Node.js**.

```bash
# 1) Backend — dependências e migrations
composer install
php artisan migrate

# 2) Subir a API
php -S localhost:8000 -t public        # Terminal 1 — API em http://localhost:8000/v1

# 3) Worker da fila (processa as compras assíncronas e dispara o e-mail)
php artisan queue:work                 # Terminal 2 — OBRIGATÓRIO para confirmar compras

# 4) Frontend
cd frontend
npm install
npm run dev                            # Terminal 3 — http://localhost:5173
```

São **3 processos** rodando em paralelo. Sem o **Terminal 2** (worker), as compras ficam pendentes
na fila e o e-mail não é enviado.

---

## 9. Testes

```bash
./vendor/bin/phpunit
```

`phpunit.xml` define `QUEUE_CONNECTION=sync`, então em testes o `ProcessTicketPurchaseJob` roda
inline (sem precisar de um worker real).

---

## 10. Mapa de pastas

```
app/
  Domain/            ← regras de negócio (PHP puro): Event e Sale (2 bounded contexts)
    Event/           ← entidade Event + interface de repositório
    Sale/            ← entidade Ticket + interface de repositório
  Application/       ← casos de uso, DTOs e a porta de notificação
    UseCases/
    DTOs/
    Notifications/
  Infrastructure/    ← detalhes técnicos (implementações concretas)
    Models/          ← Eloquent
    Repositories/    ← implementam as interfaces do Domain
    Jobs/            ← job da fila de compra
    Notifications/   ← e-mail (MailTicketNotifier)
  Http/              ← Controllers (separados por contexto) e Middlewares
  Providers/         ← RepositoryServiceProvider (injeção de dependência)
config/              ← database, queue, mail
database/            ← migrations, seeders, factories e o SQLite
routes/web.php       ← rotas (prefixo /v1)
public/              ← index.php + documentação Swagger (swagger.html / openapi.json)
frontend/            ← SPA Vue 3 + Vite
tests/               ← PHPUnit
trabalho_final_sistemas_v2.pdf   ← enunciado da atividade (requisitos)
```

---

## 11. Itens opcionais (diferenciais)

- ✅ **Mensageria / fila assíncrona** — `ProcessTicketPurchaseJob` (fila `database`).
- ✅ **Notificação por e-mail** — comprovante de ingresso confirmado (SMTP).
- ⬜ **Autenticação (JWT)** — não implementado.
- ⬜ **Testes automatizados** — estrutura presente (PHPUnit), cobertura a expandir.

---

### Resumo para a banca

1. **Camadas com regra de dependência clara** (`HTTP → Application → Domain`; `Infrastructure`
   implementa as interfaces do Domain). O Domain é PHP puro.
2. **2 Bounded Contexts**: `Event` (eventos) e `Sale` (vendas), com controllers separados.
3. **Entidades ricas**: `Event` protege invariantes; `Ticket` é máquina de estados.
4. **Repository Pattern + Injeção de Dependência** via `RepositoryServiceProvider`.
5. **Defesa de concorrência** contra *overselling* com `DB::transaction()` + `lockForUpdate`.
