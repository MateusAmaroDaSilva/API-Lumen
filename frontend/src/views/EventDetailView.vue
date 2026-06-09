<template>
  <div class="page-container" id="event-detail-view">
    <!-- Loading -->
    <div v-if="loading" class="loading-overlay">
      <div class="spinner"></div>
      <span>Carregando evento…</span>
    </div>

    <!-- Error -->
    <div v-else-if="error" class="empty-state">
      <div class="empty-state-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
      </div>
      <h3 class="empty-state-title">Evento não encontrado</h3>
      <p class="empty-state-text">{{ error }}</p>
      <router-link to="/events" class="btn btn-primary">Voltar para eventos</router-link>
    </div>

    <!-- Detalhe -->
    <template v-else-if="event">
      <router-link to="/events" class="back-link" id="btn-back-events-detail">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        Voltar para eventos
      </router-link>

      <!-- Herói: faixa de ingresso -->
      <div class="event-hero fade-in-up" id="event-hero">
        <div class="hero-top">
          <span class="hero-admit">Admit One</span>
          <span class="hero-serial">Nº {{ String(event.id).padStart(4, '0') }}</span>
        </div>
        <div class="hero-main">
          <StatusBadge :status="eventStatus" />
          <h1 class="event-hero-title">{{ event.name }}</h1>
          <div class="event-hero-meta">
            <span class="hero-meta-item">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
              {{ formatDate(event.event_date) }}
            </span>
            <span class="hero-meta-item">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
              {{ event.capacity }} lugares restantes
            </span>
          </div>
        </div>
      </div>

      <div class="event-content-grid fade-in-up" id="event-content">
        <!-- Detalhes -->
        <div class="event-details card">
          <h2 class="detail-section-title">Sobre o evento</h2>
          <p class="event-description">{{ event.description }}</p>

          <dl class="detail-items">
            <div class="detail-item">
              <dt class="detail-label">Preço</dt>
              <dd class="detail-value price-value">R$ {{ formatPrice(event.price) }}</dd>
            </div>
            <div class="detail-item">
              <dt class="detail-label">Data</dt>
              <dd class="detail-value">{{ formatDate(event.event_date) }}</dd>
            </div>
            <div class="detail-item">
              <dt class="detail-label">Capacidade</dt>
              <dd class="detail-value">{{ event.capacity }} lugares</dd>
            </div>
            <div class="detail-item">
              <dt class="detail-label">Status</dt>
              <dd class="detail-value"><StatusBadge :status="eventStatus" /></dd>
            </div>
          </dl>

          <!-- Compradores -->
          <div class="event-buyers">
            <h2 class="detail-section-title">Quem já garantiu</h2>
            <p v-if="eventTickets.length === 0" class="empty-buyers">
              Ainda não há ingressos vendidos. Seja o primeiro!
            </p>
            <div v-else class="buyers-grid">
              <div v-for="ticket in eventTickets" :key="ticket.id" class="buyer-card">
                <div class="buyer-avatar">{{ ticket.user.name.charAt(0).toUpperCase() }}</div>
                <div class="buyer-info">
                  <span class="buyer-name">{{ ticket.user.name }}</span>
                  <StatusBadge :status="ticket.status" class="buyer-status" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Compra -->
        <div class="buy-section" id="buy-section">
          <div class="buy-top">
            <span>Comprar ingresso</span>
            <span class="buy-price">R$ {{ formatPrice(event.price) }}</span>
          </div>

          <div class="buy-inner">
            <div v-if="!canBuy" class="buy-unavailable">
              <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m4.9 4.9 14.2 14.2"/></svg>
              <p v-if="event.is_past">Este evento já ocorreu.</p>
              <p v-else>Ingressos esgotados para este evento.</p>
            </div>

            <form v-else @submit.prevent="handleBuy" class="buy-form">
              <div class="form-group">
                <label for="input-user-name" class="form-label">Seu nome *</label>
                <input
                  id="input-user-name" v-model="buyForm.user_name" type="text"
                  class="form-input" :class="{ 'is-error': buyErrors.user_name }"
                  placeholder="Nome completo" maxlength="255"
                />
                <span v-if="buyErrors.user_name" class="form-error">{{ buyErrors.user_name }}</span>
              </div>

              <div class="form-group">
                <label for="input-user-email" class="form-label">Seu email *</label>
                <input
                  id="input-user-email" v-model="buyForm.user_email" type="email"
                  class="form-input" :class="{ 'is-error': buyErrors.user_email }"
                  placeholder="voce@email.com" maxlength="255"
                />
                <span v-if="buyErrors.user_email" class="form-error">{{ buyErrors.user_email }}</span>
              </div>

              <div class="buy-summary">
                <div class="summary-row"><span>Ingresso (1×)</span><span>R$ {{ formatPrice(event.price) }}</span></div>
                <div class="perforation"></div>
                <div class="summary-row summary-total"><span>Total</span><span>R$ {{ formatPrice(event.price) }}</span></div>
              </div>

              <button type="submit" class="btn btn-primary btn-lg w-full" :disabled="buySubmitting" id="btn-buy-ticket">
                <div v-if="buySubmitting" class="spinner" style="width: 18px; height: 18px; border-width: 2px;"></div>
                {{ buySubmitting ? 'Processando…' : 'Comprar ingresso' }}
              </button>
              <p class="buy-note">Pedido processado de forma assíncrona — o status aparece em “Ingressos”.</p>
            </form>
          </div>
        </div>
      </div>
    </template>

    <Toast
      :show="toast.show" :message="toast.message" :title="toast.title"
      :type="toast.type" @update:show="toast.show = $event"
    />
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import { eventService } from '../services/eventService'
import { ticketService } from '../services/ticketService'
import StatusBadge from '../components/StatusBadge.vue'
import Toast from '../components/Toast.vue'

const route = useRoute()
const event = ref(null)
const eventTickets = ref([])
const loading = ref(true)
const error = ref(null)

const buyForm = ref({ user_name: '', user_email: '' })
const buyErrors = ref({})
const buySubmitting = ref(false)
const toast = ref({ show: false, message: '', title: '', type: 'success' })

const eventStatus = computed(() => {
  if (!event.value) return 'expired'
  if (event.value.is_past) return 'expired'
  if (!event.value.has_capacity) return 'soldout'
  return 'available'
})

const canBuy = computed(() => event.value && !event.value.is_past && event.value.has_capacity)

function formatPrice(price) {
  return Number(price).toFixed(2).replace('.', ',')
}

function formatDate(dateStr) {
  return new Date(dateStr).toLocaleDateString('pt-BR', {
    weekday: 'long', day: '2-digit', month: 'long', year: 'numeric',
    hour: '2-digit', minute: '2-digit',
  })
}

function validateBuy() {
  const errs = {}
  if (!buyForm.value.user_name.trim()) errs.user_name = 'O nome é obrigatório.'
  if (!buyForm.value.user_email.trim()) {
    errs.user_email = 'O email é obrigatório.'
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(buyForm.value.user_email)) {
    errs.user_email = 'Informe um email válido.'
  }
  buyErrors.value = errs
  return Object.keys(errs).length === 0
}

async function handleBuy() {
  if (!validateBuy()) return
  buySubmitting.value = true
  try {
    await ticketService.buyTicket({
      event_id: event.value.id,
      user_name: buyForm.value.user_name.trim(),
      user_email: buyForm.value.user_email.trim(),
    })

    toast.value = { show: true, title: 'Ingresso solicitado!', message: 'Seu pedido foi registrado com sucesso.', type: 'success' }
    buyForm.value = { user_name: '', user_email: '' }

    const updated = await eventService.getEvent(route.params.id)
    event.value = updated

    setTimeout(async () => {
      try {
        const allTickets = await ticketService.getTickets()
        eventTickets.value = allTickets.filter((t) => t.event_id === Number(route.params.id))
      } catch (e) {
        console.error(e)
      }
    }, 1500)
  } catch (err) {
    toast.value = { show: true, title: 'Erro na compra', message: err.message || 'Erro ao comprar ingresso.', type: 'error' }
  } finally {
    buySubmitting.value = false
  }
}

onMounted(async () => {
  try {
    const eventId = route.params.id
    event.value = await eventService.getEvent(eventId)
    try {
      const allTickets = await ticketService.getTickets()
      eventTickets.value = allTickets.filter((t) => t.event_id === Number(eventId))
    } catch (e) {
      console.error('Erro ao carregar ingressos', e)
    }
  } catch (err) {
    error.value = err.message || 'Evento não encontrado.'
  } finally {
    loading.value = false
  }
})
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

/* ── Herói ── */
.event-hero {
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-lg);
  overflow: hidden;
  margin-bottom: 28px;
  box-shadow: var(--shadow-md);
}

.hero-top {
  display: flex;
  justify-content: space-between;
  padding: 12px 24px;
  background: var(--color-ink);
  color: var(--color-paper);
  font-family: var(--font-mono);
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.24em;
  text-transform: uppercase;
}
.hero-serial { color: var(--color-primary-light); letter-spacing: 0.12em; }

.hero-main {
  padding: 32px 28px;
  background:
    repeating-linear-gradient(90deg, transparent 0 38px, rgba(28,24,20,0.025) 38px 39px),
    var(--color-surface);
}

.event-hero-title {
  font-family: var(--font-display);
  font-size: clamp(1.9rem, 4.5vw, 3rem);
  font-weight: 700;
  color: var(--color-ink);
  margin: 14px 0 16px;
  letter-spacing: -0.025em;
  line-height: 1.02;
}

.event-hero-meta { display: flex; gap: 24px; flex-wrap: wrap; }
.hero-meta-item {
  display: flex;
  align-items: center;
  gap: 7px;
  font-size: 0.88rem;
  color: var(--color-text-secondary);
}
.hero-meta-item svg { color: var(--color-primary); }

/* ── Conteúdo ── */
.event-content-grid {
  display: grid;
  grid-template-columns: 1fr 372px;
  gap: 26px;
  align-items: start;
}

.detail-section-title {
  font-family: var(--font-display);
  font-size: 1.4rem;
  font-weight: 600;
  letter-spacing: -0.015em;
  color: var(--color-ink);
  margin-bottom: 18px;
  padding-bottom: 12px;
  border-bottom: 1.5px solid var(--color-border);
}

.event-description {
  font-size: 0.96rem;
  color: var(--color-text-secondary);
  line-height: 1.7;
  margin-bottom: 30px;
  white-space: pre-wrap;
}

.detail-items { display: flex; flex-direction: column; }
.detail-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 13px 0;
  border-bottom: 1px solid var(--color-border);
}
.detail-item:last-child { border-bottom: none; }

.detail-label {
  font-family: var(--font-mono);
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-text-muted);
}
.detail-value { font-size: 0.92rem; font-weight: 600; color: var(--color-text); }
.price-value { font-family: var(--font-display); font-size: 1.2rem; color: var(--color-primary); }

/* ── Compra ── */
.buy-section {
  position: sticky;
  top: calc(var(--header-height) + 24px);
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-lg);
  background: var(--color-surface);
  box-shadow: var(--shadow-md);
  overflow: hidden;
}

.buy-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 14px 22px;
  background: var(--color-primary);
  color: var(--color-paper);
  font-family: var(--font-mono);
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
}
.buy-price { font-size: 0.86rem; }

.buy-inner { padding: 26px 22px; }

.buy-unavailable { text-align: center; padding: 24px 12px; color: var(--color-text-muted); }
.buy-unavailable svg { color: var(--color-danger); margin-bottom: 12px; }
.buy-unavailable p { font-size: 0.92rem; }

.buy-summary {
  margin: 22px 0;
  padding: 16px 18px;
  background: var(--color-bg-elevated);
  border: 1.5px solid var(--color-border);
  border-radius: var(--radius-sm);
}
.summary-row {
  display: flex;
  justify-content: space-between;
  font-size: 0.86rem;
  color: var(--color-text-secondary);
  padding: 4px 0;
}
.buy-summary .perforation { margin: 10px 0; }
.summary-total {
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 1.05rem;
  color: var(--color-ink);
}

.buy-form .btn:disabled { opacity: 0.55; cursor: not-allowed; transform: none; box-shadow: none; }

.buy-note {
  font-size: 0.72rem;
  color: var(--color-text-muted);
  text-align: center;
  margin-top: 14px;
  line-height: 1.4;
}

/* ── Compradores ── */
.event-buyers { margin-top: 34px; }
.empty-buyers { font-size: 0.9rem; color: var(--color-text-muted); padding: 8px 0; }

.buyers-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(186px, 1fr));
  gap: 12px;
}

.buyer-card {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px;
  background: var(--color-bg-elevated);
  border: 1.5px solid var(--color-border);
  border-radius: var(--radius-sm);
  transition: border-color var(--transition-fast), transform var(--transition-fast);
}
.buyer-card:hover { transform: translateY(-2px); border-color: var(--color-ink); }

.buyer-avatar {
  width: 38px;
  height: 38px;
  border-radius: var(--radius-sm);
  background: var(--color-primary);
  color: var(--color-paper);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 1.05rem;
  flex-shrink: 0;
}

.buyer-info { display: flex; flex-direction: column; gap: 5px; overflow: hidden; }
.buyer-name {
  font-size: 0.85rem;
  font-weight: 600;
  color: var(--color-text);
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.buyer-status { transform: scale(0.92); transform-origin: left center; }

@media (max-width: 880px) {
  .event-content-grid { grid-template-columns: 1fr; }
  .buy-section { position: static; }
}
</style>
