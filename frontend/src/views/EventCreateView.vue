<template>
  <div class="page-container" id="event-create-view">
    <div class="page-header">
      <router-link to="/events" class="back-link" id="btn-back-events">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        Voltar para eventos
      </router-link>
      <span class="eyebrow">Novo registro</span>
      <h1 class="page-title">Criar evento</h1>
      <p class="page-subtitle">Preencha os dados abaixo. O ingresso ao lado é atualizado em tempo real.</p>
    </div>

    <div class="create-grid">
      <!-- Formulário -->
      <form @submit.prevent="handleSubmit" class="event-form card" id="event-form">
        <div class="form-group">
          <label for="input-name" class="form-label">Nome do evento *</label>
          <input
            id="input-name" v-model="form.name" type="text"
            class="form-input" :class="{ 'is-error': errors.name }"
            placeholder="Ex.: Festival de Inverno" maxlength="255"
            @blur="validateField('name')"
          />
          <span v-if="errors.name" class="form-error">{{ errors.name }}</span>
        </div>

        <div class="form-group">
          <label for="input-description" class="form-label">Descrição *</label>
          <textarea
            id="input-description" v-model="form.description"
            class="form-textarea" :class="{ 'is-error': errors.description }"
            placeholder="Descreva atrações, line-up e detalhes do evento…" rows="4"
            @blur="validateField('description')"
          ></textarea>
          <span v-if="errors.description" class="form-error">{{ errors.description }}</span>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="input-price" class="form-label">Preço (R$) *</label>
            <input
              id="input-price" v-model="form.price" type="text"
              inputmode="decimal"
              class="form-input" :class="{ 'is-error': errors.price }"
              placeholder="0,00"
              @input="onPriceInput" @blur="validateField('price')"
            />
            <span v-if="errors.price" class="form-error">{{ errors.price }}</span>
            <span v-else class="form-hint">Máximo R$ 1.000.000,00.</span>
          </div>

          <div class="form-group">
            <label for="input-capacity" class="form-label">Capacidade *</label>
            <input
              id="input-capacity" v-model="form.capacity" type="text"
              inputmode="numeric"
              class="form-input" :class="{ 'is-error': errors.capacity }"
              placeholder="100"
              @input="onCapacityInput" @blur="validateField('capacity')"
            />
            <span v-if="errors.capacity" class="form-error">{{ errors.capacity }}</span>
            <span v-else class="form-hint">Máximo 1.000.000 lugares.</span>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Data e hora *</label>
          <div class="datetime-row">
            <div class="dt-field">
              <span class="dt-cap">Data</span>
              <input
                id="input-event-day" v-model="form.event_day" type="date"
                class="form-input" :class="{ 'is-error': errors.event_date }"
                :min="minDay" max="9999-12-31" @blur="validateField('event_date')"
              />
            </div>
            <div class="dt-field">
              <span class="dt-cap">Hora</span>
              <input
                id="input-event-time" v-model="form.event_time" type="text"
                inputmode="numeric" placeholder="hh:mm" maxlength="5"
                class="form-input" :class="{ 'is-error': errors.event_date }"
                @input="onTimeInput" @blur="validateField('event_date')"
              />
            </div>
          </div>
          <span v-if="errors.event_date" class="form-error">{{ errors.event_date }}</span>
          <span v-else class="form-hint">O evento precisa ocorrer em uma data futura.</span>
        </div>

        <div class="form-actions">
          <button type="submit" class="btn btn-primary btn-lg w-full" :disabled="submitting" id="btn-submit-event">
            <div v-if="submitting" class="spinner" style="width: 18px; height: 18px; border-width: 2px;"></div>
            {{ submitting ? 'Cadastrando…' : 'Cadastrar evento' }}
          </button>
        </div>
      </form>

      <!-- Pré-visualização: ingresso ao vivo -->
      <aside class="preview-col">
        <span class="preview-tag">Pré-visualização</span>
        <div class="ticket" id="event-preview">
          <div class="ticket-top">
            <span>Admit One</span>
            <span class="ticket-serial">Nº ––––</span>
          </div>
          <div class="ticket-body">
            <span class="ticket-kicker">Apresenta</span>
            <h3 class="ticket-name">{{ form.name || 'Nome do evento' }}</h3>
            <p class="ticket-desc">{{ form.description ? truncate(form.description, 96) : 'A descrição do evento aparece aqui.' }}</p>
            <dl class="ticket-meta">
              <div><dt>Data</dt><dd>{{ previewDateText }}</dd></div>
              <div><dt>Lugares</dt><dd>{{ form.capacity || '—' }}</dd></div>
            </dl>
          </div>
          <div class="ticket-perf"><span class="notch l"></span><span class="notch r"></span></div>
          <div class="ticket-foot">
            <div class="ticket-price">
              <span class="cur">R$</span>{{ form.price || '0,00' }}
            </div>
            <div class="barcode"></div>
          </div>
        </div>
      </aside>
    </div>

    <Toast
      :show="toast.show" :message="toast.message" :title="toast.title"
      :type="toast.type" @update:show="toast.show = $event"
    />
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useRouter } from 'vue-router'
import { eventService } from '../services/eventService'
import Toast from '../components/Toast.vue'

const router = useRouter()

const PRICE_MAX = 1000000          // R$ 1.000.000,00
const CAPACITY_MAX = 1000000       // 1.000.000 lugares

const form = ref({ name: '', description: '', price: '', event_day: '', event_time: '', capacity: '' })
const errors = ref({})
const submitting = ref(false)
const toast = ref({ show: false, message: '', title: '', type: 'success' })

// Data mínima (hoje) para o seletor de data
const minDay = computed(() => {
  const now = new Date()
  now.setMinutes(now.getMinutes() - now.getTimezoneOffset())
  return now.toISOString().slice(0, 10)
})

// Texto da data combinada (data + hora) para o preview
const previewDateText = computed(() => {
  if (!form.value.event_day || !form.value.event_time) return '—'
  const dt = new Date(`${form.value.event_day}T${form.value.event_time}`)
  if (isNaN(dt.getTime())) return '—'
  return dt.toLocaleDateString('pt-BR', {
    day: '2-digit', month: 'short', year: 'numeric', hour: '2-digit', minute: '2-digit',
  })
})

// ── Máscaras ──
// Preço: digita só números, preenche como centavos da direita p/ esquerda → "1.234,56"
function onPriceInput(e) {
  const digits = e.target.value.replace(/\D/g, '')
  if (!digits) { form.value.price = ''; return }
  let cents = parseInt(digits, 10)
  if (cents > PRICE_MAX * 100) cents = PRICE_MAX * 100
  form.value.price = (cents / 100).toLocaleString('pt-BR', {
    minimumFractionDigits: 2, maximumFractionDigits: 2,
  })
}

// Capacidade: inteiro com separador de milhar → "10.000"
function onCapacityInput(e) {
  const digits = e.target.value.replace(/\D/g, '')
  if (!digits) { form.value.capacity = ''; return }
  let n = parseInt(digits, 10)
  if (n > CAPACITY_MAX) n = CAPACITY_MAX
  form.value.capacity = n.toLocaleString('pt-BR')
}

// Hora: digita só números (máx. 4) e o ":" entra sozinho → "1430" vira "14:30"
function onTimeInput(e) {
  const digits = e.target.value.replace(/\D/g, '').slice(0, 4)
  form.value.event_time = digits.length <= 2
    ? digits
    : `${digits.slice(0, 2)}:${digits.slice(2)}`
}

// Converte o texto mascarado de volta para número
function priceToNumber(str) {
  if (!str) return null
  return parseFloat(String(str).replace(/\./g, '').replace(',', '.'))
}
function capacityToNumber(str) {
  if (!str) return null
  return parseInt(String(str).replace(/\./g, ''), 10)
}

function validateField(field) {
  const val = form.value[field]
  const errs = { ...errors.value }
  switch (field) {
    case 'name':
      errs.name = !val?.trim() ? 'O nome é obrigatório.' : ''
      break
    case 'description':
      errs.description = !val?.trim() ? 'A descrição é obrigatória.' : ''
      break
    case 'price': {
      const n = priceToNumber(val)
      errs.price = n === null || isNaN(n) || n < 0
        ? 'Informe um preço válido.'
        : n > PRICE_MAX ? 'O preço máximo é R$ 1.000.000,00.' : ''
      break
    }
    case 'capacity': {
      const n = capacityToNumber(val)
      errs.capacity = !n || n < 1
        ? 'A capacidade deve ser pelo menos 1.'
        : n > CAPACITY_MAX ? 'A capacidade máxima é 1.000.000.' : ''
      break
    }
    case 'event_date': {
      const time = form.value.event_time
      if (!form.value.event_day) {
        errs.event_date = 'Informe a data.'
      } else if (!/^\d{2}:\d{2}$/.test(time)) {
        errs.event_date = 'Informe a hora no formato hh:mm.'
      } else {
        const [h, m] = time.split(':').map(Number)
        if (h > 23 || m > 59) {
          errs.event_date = 'Hora inválida.'
        } else {
          const dt = new Date(`${form.value.event_day}T${time}`)
          errs.event_date = dt <= new Date() ? 'A data e hora devem ser futuras.' : ''
        }
      }
      break
    }
  }
  errors.value = errs
  return !errs[field]
}

function validateAll() {
  return ['name', 'description', 'price', 'capacity', 'event_date'].every((f) => validateField(f))
}

async function handleSubmit() {
  if (!validateAll()) return
  submitting.value = true
  try {
    await eventService.createEvent({
      name: form.value.name.trim(),
      description: form.value.description.trim(),
      price: priceToNumber(form.value.price),
      event_date: `${form.value.event_day} ${form.value.event_time}:00`,
      capacity: capacityToNumber(form.value.capacity),
    })

    toast.value = { show: true, title: 'Evento cadastrado!', message: 'Já está disponível na programação.', type: 'success' }
    setTimeout(() => router.push('/events'), 1500)
  } catch (err) {
    toast.value = { show: true, title: 'Erro ao cadastrar', message: err.message || 'Erro ao cadastrar evento.', type: 'error' }
  } finally {
    submitting.value = false
  }
}

function truncate(text, max) {
  return text.length > max ? text.slice(0, max) + '…' : text
}
</script>

<style scoped>
.back-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-family: var(--font-mono);
  font-size: 0.72rem;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  margin-bottom: 18px;
  transition: color var(--transition-fast);
}
.back-link:hover { color: var(--color-primary); }

.create-grid {
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: 32px;
  align-items: start;
}

.event-form { padding: 34px; }

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

/* ── Data + hora separados ── */
.datetime-row {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: 14px;
}
.dt-field { display: flex; flex-direction: column; gap: 5px; }
.dt-cap {
  font-family: var(--font-mono);
  font-size: 0.62rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-text-muted);
}

.form-actions { margin-top: 6px; }
.form-actions .btn:disabled { opacity: 0.55; cursor: not-allowed; transform: none; box-shadow: none; }

/* ── Coluna de preview ── */
.preview-col { position: sticky; top: calc(var(--header-height) + 30px); }

.preview-tag {
  display: block;
  font-family: var(--font-mono);
  font-size: 0.64rem;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  margin-bottom: 14px;
}

.ticket {
  background: var(--color-surface);
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-md);
}

.ticket-top {
  display: flex;
  justify-content: space-between;
  padding: 12px 18px;
  background: var(--color-ink);
  color: var(--color-paper);
  border-radius: var(--radius-lg) var(--radius-lg) 0 0;
  font-family: var(--font-mono);
  font-size: 0.66rem;
  font-weight: 700;
  letter-spacing: 0.22em;
  text-transform: uppercase;
}
.ticket-serial { color: var(--color-primary-light); letter-spacing: 0.1em; }

.ticket-body { padding: 22px 18px 18px; }
.ticket-kicker {
  font-family: var(--font-mono);
  font-size: 0.6rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--color-text-muted);
}
.ticket-name {
  font-family: var(--font-display);
  font-size: 1.55rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  color: var(--color-ink);
  margin: 8px 0 10px;
  line-height: 1.08;
  word-break: break-word;
}
.ticket-desc {
  font-size: 0.82rem;
  color: var(--color-text-muted);
  line-height: 1.5;
  margin-bottom: 18px;
}
.ticket-meta { display: flex; gap: 28px; }
.ticket-meta dt {
  font-family: var(--font-mono);
  font-size: 0.58rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  margin-bottom: 4px;
}
.ticket-meta dd { font-size: 0.82rem; font-weight: 600; color: var(--color-text); }

.ticket-perf {
  position: relative;
  height: 0;
  margin: 0 14px;
  border-top: 2px dashed var(--color-border-light);
}
.notch {
  position: absolute;
  top: 50%;
  width: 18px; height: 18px;
  background: var(--color-bg);
  border: 1.5px solid var(--color-ink);
  border-radius: 50%;
  transform: translateY(-50%);
}
.notch.l { left: -23px; }
.notch.r { right: -23px; }

.ticket-foot {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 14px;
  padding: 16px 18px 18px;
}
.ticket-price {
  font-family: var(--font-display);
  font-size: 1.6rem;
  font-weight: 700;
  color: var(--color-ink);
  white-space: nowrap;
}
.cur { font-size: 0.82rem; color: var(--color-text-muted); margin-right: 3px; vertical-align: 0.3em; }
.ticket-foot .barcode { max-width: 120px; height: 32px; }

@media (max-width: 880px) {
  .create-grid { grid-template-columns: 1fr; }
  .preview-col { position: static; max-width: 420px; }
}

@media (max-width: 560px) {
  .form-row { grid-template-columns: 1fr; }
  .event-form { padding: 24px; }
}
</style>
