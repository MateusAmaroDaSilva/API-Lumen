<template>
  <div class="dashboard" id="dashboard-view">
    <!-- ── Hero / Marquee ── -->
    <section class="hero" id="hero-section">
      <div class="hero-rule"></div>
      <div class="hero-inner">
        <div class="hero-copy">
          <span class="eyebrow">Bilheteria · Box Office</span>
          <h1 class="hero-title">
            Cada evento merece<br />
            uma boa <span class="hero-accent">entrada</span>.
          </h1>
          <p class="hero-subtitle">
            Cadastre eventos e venda ingressos em tempo real — com controle de
            capacidade e zero overbooking, do balcão ao código de barras.
          </p>
          <div class="hero-actions">
            <router-link to="/events/new" class="btn btn-primary btn-lg" id="hero-create-event">
              Criar evento
            </router-link>
            <router-link to="/events" class="btn btn-secondary btn-lg" id="hero-view-events">
              Ver programação
            </router-link>
          </div>
        </div>

        <!-- Ticket decorativo -->
        <div class="hero-ticket" aria-hidden="true">
          <div class="ht-top">
            <span>Admit One</span>
            <span class="ht-serial">Nº 0001</span>
          </div>
          <div class="ht-body">
            <span class="ht-label">Apresenta</span>
            <strong class="ht-name">Noite de Estreia</strong>
            <div class="ht-meta">
              <span>Fila A · Assento 12</span>
              <span>Portão 3</span>
            </div>
          </div>
          <div class="ht-perf"><span class="ht-notch l"></span><span class="ht-notch r"></span></div>
          <div class="ht-foot">
            <div class="barcode"></div>
            <span class="ht-price">R$ 120,00</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ── Ledger / Stats ── -->
    <section class="ledger" id="stats-section">
      <div class="ledger-item stagger-list">
        <span class="ledger-value" id="stat-events">{{ stats.events }}</span>
        <span class="ledger-label">Eventos<br />cadastrados</span>
      </div>
      <div class="ledger-item">
        <span class="ledger-value" id="stat-tickets">{{ stats.tickets }}</span>
        <span class="ledger-label">Ingressos<br />emitidos</span>
      </div>
      <div class="ledger-item">
        <span class="ledger-value" id="stat-available">{{ stats.available }}</span>
        <span class="ledger-label">Eventos<br />à venda</span>
      </div>
    </section>

    <!-- ── Quick actions ── -->
    <section class="quick" id="quick-actions">
      <header class="quick-head">
        <span class="eyebrow">Atalhos</span>
        <h2 class="section-title">Por onde começar</h2>
      </header>

      <div class="quick-grid stagger-list">
        <router-link to="/events" class="quick-card fade-in-up" id="action-events">
          <span class="quick-num">01</span>
          <h3>Listar eventos</h3>
          <p>Veja toda a programação cadastrada, com preço, data e disponibilidade.</p>
          <span class="quick-go">Abrir &rarr;</span>
        </router-link>

        <router-link to="/events/new" class="quick-card fade-in-up" id="action-new-event">
          <span class="quick-num">02</span>
          <h3>Criar evento</h3>
          <p>Defina nome, descrição, preço, data e capacidade em poucos segundos.</p>
          <span class="quick-go">Abrir &rarr;</span>
        </router-link>

        <router-link to="/tickets" class="quick-card fade-in-up" id="action-tickets">
          <span class="quick-num">03</span>
          <h3>Ver ingressos</h3>
          <p>Acompanhe cada ingresso emitido e o status do pedido de compra.</p>
          <span class="quick-go">Abrir &rarr;</span>
        </router-link>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { eventService } from '../services/eventService'
import { ticketService } from '../services/ticketService'

const stats = ref({ events: '—', tickets: '—', available: '—' })

onMounted(async () => {
  try {
    const [events, tickets] = await Promise.allSettled([
      eventService.getEvents(),
      ticketService.getTickets(),
    ])

    const eventsList = events.status === 'fulfilled' ? events.value : []
    const ticketsList = tickets.status === 'fulfilled' ? tickets.value : []

    stats.value = {
      events: eventsList.length,
      tickets: ticketsList.length,
      available: eventsList.filter((e) => e.has_capacity && !e.is_past).length,
    }
  } catch {
    /* mantém defaults */
  }
})
</script>

<style scoped>
.dashboard { padding-top: var(--header-height); }

/* ── Hero ── */
.hero {
  max-width: 1180px;
  margin: 0 auto;
  padding: 64px 32px 24px;
}

.hero-rule {
  height: 2px;
  background: var(--color-ink);
  margin-bottom: 40px;
}

.hero-inner {
  display: grid;
  grid-template-columns: 1.25fr 0.9fr;
  gap: 48px;
  align-items: center;
}

.hero-copy { animation: fadeInUp 0.6s ease both; }

.hero-title {
  font-family: var(--font-display);
  font-size: clamp(2.6rem, 6.5vw, 4.6rem);
  font-weight: 600;
  letter-spacing: -0.03em;
  line-height: 0.97;
  margin: 24px 0 20px;
  color: var(--color-ink);
}

.hero-accent {
  font-style: italic;
  color: var(--color-primary);
}

.hero-subtitle {
  font-size: clamp(1rem, 1.6vw, 1.12rem);
  color: var(--color-text-secondary);
  margin-bottom: 32px;
  line-height: 1.6;
  max-width: 48ch;
}

.hero-actions {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
}

/* ── Ticket decorativo ── */
.hero-ticket {
  position: relative;
  background: var(--color-surface);
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  transform: rotate(2.5deg);
  animation: scaleIn 0.6s ease 0.1s both;
}
.hero-ticket:hover { transform: rotate(0deg); transition: transform var(--transition-slow); }

.ht-top {
  display: flex;
  justify-content: space-between;
  padding: 12px 20px;
  background: var(--color-primary);
  color: var(--color-paper);
  border-radius: var(--radius-lg) var(--radius-lg) 0 0;
  font-family: var(--font-mono);
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 0.2em;
  text-transform: uppercase;
}
.ht-serial { letter-spacing: 0.1em; }

.ht-body { padding: 24px 20px 18px; }
.ht-label {
  font-family: var(--font-mono);
  font-size: 0.62rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--color-text-muted);
}
.ht-name {
  display: block;
  font-family: var(--font-display);
  font-size: 2rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  color: var(--color-ink);
  margin: 8px 0 16px;
}
.ht-meta {
  display: flex;
  justify-content: space-between;
  font-family: var(--font-mono);
  font-size: 0.72rem;
  color: var(--color-text-secondary);
}

.ht-perf {
  position: relative;
  height: 0;
  margin: 0 14px;
  border-top: 2px dashed var(--color-border-light);
}
.ht-notch {
  position: absolute;
  top: 50%;
  width: 18px; height: 18px;
  background: var(--color-bg);
  border: 1.5px solid var(--color-ink);
  border-radius: 50%;
  transform: translateY(-50%);
}
.ht-notch.l { left: -23px; }
.ht-notch.r { right: -23px; }

.ht-foot {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  padding: 16px 20px 20px;
}
.ht-foot .barcode { max-width: 120px; height: 32px; }
.ht-price {
  font-family: var(--font-display);
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--color-ink);
  white-space: nowrap;
}

/* ── Ledger ── */
.ledger {
  width: calc(100% - 64px);
  max-width: calc(1180px - 64px);
  margin: 56px auto 0;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-lg);
  background: var(--color-surface);
  overflow: hidden;
}

.ledger-item {
  display: flex;
  align-items: baseline;
  gap: 16px;
  padding: 26px 30px;
  border-right: 1.5px solid var(--color-border);
  animation: fadeInUp 0.5s ease both;
}
.ledger-item:last-child { border-right: none; }

.ledger-value {
  font-family: var(--font-display);
  font-size: 3rem;
  font-weight: 700;
  letter-spacing: -0.03em;
  line-height: 1;
  color: var(--color-primary);
}

.ledger-label {
  font-family: var(--font-mono);
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  line-height: 1.4;
}

/* ── Quick actions ── */
.quick {
  max-width: 1180px;
  margin: 64px auto 0;
  padding: 0 32px 40px;
}

.quick-head { margin-bottom: 28px; }

.section-title {
  font-family: var(--font-display);
  font-size: 1.9rem;
  font-weight: 600;
  letter-spacing: -0.02em;
  color: var(--color-ink);
  margin-top: 12px;
}

.quick-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-lg);
  overflow: hidden;
}

.quick-card {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding: 30px 26px 26px;
  background: var(--color-surface);
  border-right: 1.5px solid var(--color-border);
  text-decoration: none;
  color: var(--color-text);
  transition: background var(--transition-fast);
}
.quick-card:last-child { border-right: none; }
.quick-card:hover { background: var(--color-bg-elevated); }

.quick-num {
  font-family: var(--font-mono);
  font-size: 0.78rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  color: var(--color-primary);
}

.quick-card h3 {
  font-family: var(--font-display);
  font-size: 1.35rem;
  font-weight: 600;
  letter-spacing: -0.01em;
  color: var(--color-ink);
}

.quick-card p {
  font-size: 0.88rem;
  color: var(--color-text-muted);
  line-height: 1.55;
  flex: 1;
}

.quick-go {
  font-family: var(--font-mono);
  font-size: 0.74rem;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: var(--color-ink);
  transition: color var(--transition-fast);
}
.quick-card:hover .quick-go { color: var(--color-primary); }

/* ── Responsivo ── */
@media (max-width: 900px) {
  .hero-inner { grid-template-columns: 1fr; gap: 40px; }
  .hero-ticket { max-width: 380px; transform: rotate(1.5deg); }
}

@media (max-width: 720px) {
  .ledger { grid-template-columns: 1fr; }
  .ledger-item { border-right: none; border-bottom: 1.5px solid var(--color-border); }
  .ledger-item:last-child { border-bottom: none; }
  .quick-grid { grid-template-columns: 1fr; }
  .quick-card { border-right: none; border-bottom: 1.5px solid var(--color-border); }
  .quick-card:last-child { border-bottom: none; }
}

@media (max-width: 560px) {
  .hero { padding: 40px 18px 16px; }
  .hero-actions { flex-direction: column; align-items: stretch; }
  .ledger { width: calc(100% - 36px); }
}
</style>
