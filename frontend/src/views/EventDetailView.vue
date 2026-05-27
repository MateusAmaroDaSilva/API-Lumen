<template>
  <div class="page-container" id="event-detail-view">
    <!-- Loading -->
    <div v-if="loading" class="loading-overlay">
      <div class="spinner"></div>
      <span>Carregando evento...</span>
    </div>

    <!-- Error -->
    <div v-else-if="error" class="empty-state">
      <div class="empty-state-icon">⚠️</div>
      <h3 class="empty-state-title">Evento não encontrado</h3>
      <p class="empty-state-text">{{ error }}</p>
      <router-link to="/events" class="btn btn-primary">Voltar para eventos</router-link>
    </div>

    <!-- Event detail -->
    <template v-else-if="event">
      <div class="page-header">
        <router-link to="/events" class="back-link" id="btn-back-events-detail">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m15 18-6-6 6-6"/>
          </svg>
          Voltar para eventos
        </router-link>
      </div>

      <!-- Event Header -->
      <div class="event-hero fade-in-up" id="event-hero">
        <div class="event-hero-gradient" :style="gradientStyle"></div>
        <div class="event-hero-content">
          <StatusBadge :status="eventStatus" />
          <h1 class="event-hero-title">{{ event.name }}</h1>
          <div class="event-hero-meta">
            <span class="hero-meta-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/>
              </svg>
              {{ formatDate(event.event_date) }}
            </span>
            <span class="hero-meta-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
              </svg>
              {{ event.capacity }} vagas restantes
            </span>
          </div>
        </div>
      </div>

      <!-- Content Grid -->
      <div class="event-content-grid fade-in-up" id="event-content">
        <!-- Details -->
        <div class="event-details card">
          <h2 class="detail-section-title">Sobre o evento</h2>
          <p class="event-description">{{ event.description }}</p>

          <div class="detail-items">
            <div class="detail-item">
              <span class="detail-label">Preço</span>
              <span class="detail-value price-value">R$ {{ formatPrice(event.price) }}</span>
            </div>
            <div class="detail-item">
              <span class="detail-label">Data</span>
              <span class="detail-value">{{ formatDate(event.event_date) }}</span>
            </div>
            <div class="detail-item">
              <span class="detail-label">Capacidade</span>
              <span class="detail-value">{{ event.capacity }} vagas</span>
            </div>
            <div class="detail-item">
              <span class="detail-label">Status</span>
              <StatusBadge :status="eventStatus" />
            </div>
          </div>

          <!-- Componente de compradores -->
          <div class="event-buyers">
            <h2 class="detail-section-title" style="margin-top: 32px;">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
              </svg>
              Quem já garantiu
            </h2>
            <div v-if="eventTickets.length === 0" class="empty-buyers">
              Ainda não há ingressos vendidos. Seja o primeiro!
            </div>
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

        <!-- Buy ticket form -->
        <div class="buy-section card-glass" id="buy-section">
          <h2 class="detail-section-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
              <path d="M13 5v2"/><path d="M13 17v2"/><path d="M13 11v2"/>
            </svg>
            Comprar Ingresso
          </h2>

          <div v-if="!canBuy" class="buy-unavailable">
            <div class="unavailable-icon">🚫</div>
            <p v-if="event.is_past">Este evento já ocorreu.</p>
            <p v-else>Ingressos esgotados para este evento.</p>
          </div>

          <form v-else @submit.prevent="handleBuy" class="buy-form">
            <div class="form-group">
              <label for="input-user-name" class="form-label">Seu nome *</label>
              <input
                id="input-user-name"
                v-model="buyForm.user_name"
                type="text"
                class="form-input"
                :class="{ 'is-error': buyErrors.user_name }"
                placeholder="Nome completo"
                maxlength="255"
              />
              <span v-if="buyErrors.user_name" class="form-error">{{ buyErrors.user_name }}</span>
            </div>

            <div class="form-group">
              <label for="input-user-email" class="form-label">Seu email *</label>
              <input
                id="input-user-email"
                v-model="buyForm.user_email"
                type="email"
                class="form-input"
                :class="{ 'is-error': buyErrors.user_email }"
                placeholder="seu@email.com"
                maxlength="255"
              />
              <span v-if="buyErrors.user_email" class="form-error">{{ buyErrors.user_email }}</span>
            </div>

            <div class="form-group">
              <label for="input-payment-method" class="form-label">Forma de pagamento *</label>
              <select
                id="input-payment-method"
                v-model="buyForm.payment_method"
                class="form-input"
                :class="{ 'is-error': buyErrors.payment_method }"
              >
                <option value="" disabled>Selecione uma opção</option>
                <option value="credit_card">Cartão de Crédito</option>
              </select>
              <span v-if="buyErrors.payment_method" class="form-error">{{ buyErrors.payment_method }}</span>
            </div>

            <div class="buy-summary">
              <div class="summary-row">
                <span>Ingresso</span>
                <span>R$ {{ formatPrice(event.price) }}</span>
              </div>
              <div class="summary-divider"></div>
              <div class="summary-row summary-total">
                <span>Total</span>
                <span>R$ {{ formatPrice(event.price) }}</span>
              </div>
            </div>

            <button
              type="submit"
              class="btn btn-accent btn-lg w-full"
              :disabled="buySubmitting"
              id="btn-buy-ticket"
            >
              <div v-if="buySubmitting" class="spinner" style="width: 18px; height: 18px; border-width: 2px;"></div>
              <svg v-else width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
              </svg>
              {{ buySubmitting ? 'Processando...' : 'Comprar Ingresso' }}
            </button>
          </form>
        </div>
      </div>
    </template>

    <Toast
      :show="toast.show"
      :message="toast.message"
      :title="toast.title"
      :type="toast.type"
      @update:show="toast.show = $event"
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

const buyForm = ref({ user_name: '', user_email: '', payment_method: '' })
const buyErrors = ref({})
const buySubmitting = ref(false)
const toast = ref({ show: false, message: '', title: '', type: 'success' })

const eventStatus = computed(() => {
  if (!event.value) return 'expired'
  if (event.value.is_past) return 'expired'
  if (!event.value.has_capacity) return 'soldout'
  return 'available'
})

const canBuy = computed(() => {
  return event.value && !event.value.is_past && event.value.has_capacity
})

const gradientStyle = computed(() => {
  if (!event.value) return {}
  const hue = (event.value.id * 47) % 360
  return {
    background: `linear-gradient(135deg, hsl(${hue}, 70%, 30%) 0%, hsl(${(hue + 50) % 360}, 60%, 15%) 100%)`,
  }
})

function formatPrice(price) {
  return Number(price).toFixed(2).replace('.', ',')
}

function formatDate(dateStr) {
  const d = new Date(dateStr)
  return d.toLocaleDateString('pt-BR', {
    weekday: 'long',
    day: '2-digit',
    month: 'long',
    year: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
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
  if (!buyForm.value.payment_method) errs.payment_method = 'Selecione uma forma de pagamento.'
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
      payment_method: buyForm.value.payment_method,
    })

    toast.value = {
      show: true,
      title: 'Ingresso adquirido!',
      message: 'Seu ingresso foi registrado com sucesso.',
      type: 'success',
    }

    buyForm.value = { user_name: '', user_email: '', payment_method: '' }

    // Reload event to update capacity
    const updated = await eventService.getEvent(route.params.id)
    event.value = updated

    // Tentar recarregar ingressos após 1.5s para dar tempo do job processar
    setTimeout(async () => {
      try {
        const allTickets = await ticketService.getTickets()
        eventTickets.value = allTickets.filter(t => t.event_id === Number(route.params.id))
      } catch (e) {
        console.error(e)
      }
    }, 1500)
  } catch (err) {
    toast.value = {
      show: true,
      title: 'Erro na compra',
      message: err.message || 'Erro ao comprar ingresso.',
      type: 'error',
    }
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
      eventTickets.value = allTickets.filter(t => t.event_id === Number(eventId))
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
  font-size: 0.85rem;
  color: var(--color-text-muted);
  text-decoration: none;
  margin-bottom: 16px;
  transition: color var(--transition-fast);
}

.back-link:hover {
  color: var(--color-accent);
}

/* Event Hero */
.event-hero {
  position: relative;
  border-radius: var(--radius-xl);
  overflow: hidden;
  min-height: 240px;
  display: flex;
  align-items: flex-end;
  margin-bottom: 28px;
}

.event-hero-gradient {
  position: absolute;
  inset: 0;
}

.event-hero-content {
  position: relative;
  z-index: 1;
  padding: 40px;
  width: 100%;
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.65));
}

.event-hero-title {
  font-size: 2rem;
  font-weight: 700;
  color: #fff;
  margin: 12px 0;
  letter-spacing: -0.02em;
}

.event-hero-meta {
  display: flex;
  gap: 24px;
  flex-wrap: wrap;
}

.hero-meta-item {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.8);
}

/* Content Grid */
.event-content-grid {
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: 24px;
  align-items: start;
}

.detail-section-title {
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--color-text);
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.event-description {
  font-size: 0.95rem;
  color: var(--color-text-secondary);
  line-height: 1.7;
  margin-bottom: 28px;
  white-space: pre-wrap;
}

.detail-items {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.detail-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 0;
  border-bottom: 1px solid var(--color-border);
}

.detail-item:last-child {
  border-bottom: none;
}

.detail-label {
  font-size: 0.85rem;
  color: var(--color-text-muted);
  font-weight: 500;
}

.detail-value {
  font-size: 0.9rem;
  font-weight: 600;
  color: var(--color-text);
}

.price-value {
  font-size: 1.1rem;
  color: var(--color-accent);
}

/* Buy Section */
.buy-section {
  position: sticky;
  top: calc(var(--header-height) + 24px);
}

.buy-unavailable {
  text-align: center;
  padding: 32px 16px;
}

.unavailable-icon {
  font-size: 2rem;
  margin-bottom: 12px;
}

.buy-unavailable p {
  font-size: 0.9rem;
  color: var(--color-text-muted);
}

.buy-summary {
  margin: 20px 0;
  padding: 16px;
  background: var(--color-bg-elevated);
  border-radius: var(--radius-md);
}

.summary-row {
  display: flex;
  justify-content: space-between;
  font-size: 0.85rem;
  color: var(--color-text-secondary);
  padding: 4px 0;
}

.summary-divider {
  height: 1px;
  background: var(--color-border);
  margin: 8px 0;
}

.summary-total {
  font-weight: 700;
  font-size: 1rem;
  color: var(--color-text);
}

.buy-form .btn:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}

/* Buyers Section */
.event-buyers {
  margin-top: 16px;
  border-top: 1px solid var(--color-border);
  padding-top: 16px;
}

.empty-buyers {
  font-size: 0.9rem;
  color: var(--color-text-muted);
  font-style: italic;
  padding: 16px 0;
}

.buyers-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
  gap: 12px;
  margin-top: 16px;
}

.buyer-card {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px;
  background: var(--color-bg-elevated);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-md);
  transition: transform var(--transition-fast), border-color var(--transition-fast);
}

.buyer-card:hover {
  transform: translateY(-2px);
  border-color: var(--color-border-hover);
}

.buyer-avatar {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: var(--color-primary-light);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  font-size: 1.1rem;
  flex-shrink: 0;
}

.buyer-info {
  display: flex;
  flex-direction: column;
  gap: 4px;
  overflow: hidden;
}

.buyer-name {
  font-size: 0.85rem;
  font-weight: 600;
  color: var(--color-text);
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.buyer-status {
  font-size: 0.7rem;
  transform: scale(0.9);
  transform-origin: left center;
}

@media (max-width: 860px) {
  .event-content-grid {
    grid-template-columns: 1fr;
  }

  .buy-section {
    position: static;
  }

  .event-hero-title {
    font-size: 1.5rem;
  }

  .event-hero-content {
    padding: 24px;
  }
}
</style>
