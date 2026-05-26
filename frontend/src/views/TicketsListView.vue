<template>
  <div class="page-container" id="tickets-list-view">
    <div class="page-header">
      <h1 class="page-title">Ingressos</h1>
      <p class="page-subtitle">Todos os ingressos vendidos na plataforma</p>
    </div>

    <!-- Loading -->
    <div v-if="loading" class="loading-overlay" id="loading-tickets">
      <div class="spinner"></div>
      <span>Carregando ingressos...</span>
    </div>

    <!-- Error -->
    <div v-else-if="error" class="empty-state" id="error-tickets">
      <div class="empty-state-icon">⚠️</div>
      <h3 class="empty-state-title">Erro ao carregar ingressos</h3>
      <p class="empty-state-text">{{ error }}</p>
      <button class="btn btn-primary" @click="loadTickets" id="btn-retry-tickets">Tentar novamente</button>
    </div>

    <!-- Empty -->
    <div v-else-if="tickets.length === 0" class="empty-state" id="empty-tickets">
      <div class="empty-state-icon">🎫</div>
      <h3 class="empty-state-title">Nenhum ingresso vendido</h3>
      <p class="empty-state-text">Os ingressos aparecerão aqui assim que forem comprados.</p>
      <router-link to="/events" class="btn btn-primary" id="btn-browse-events">Ver Eventos</router-link>
    </div>

    <!-- Tickets Table (Desktop) -->
    <div v-else class="fade-in-up">
      <!-- Stats -->
      <div class="ticket-stats stagger-list" id="ticket-stats">
        <div class="ticket-stat-card fade-in-up">
          <span class="ticket-stat-value">{{ tickets.length }}</span>
          <span class="ticket-stat-label">Total</span>
        </div>
        <div class="ticket-stat-card fade-in-up">
          <span class="ticket-stat-value stat-pending">{{ countByStatus('pending') }}</span>
          <span class="ticket-stat-label">Pendentes</span>
        </div>
        <div class="ticket-stat-card fade-in-up">
          <span class="ticket-stat-value stat-confirmed">{{ countByStatus('confirmed') }}</span>
          <span class="ticket-stat-label">Confirmados</span>
        </div>
        <div class="ticket-stat-card fade-in-up">
          <span class="ticket-stat-value stat-expired">{{ countByStatus('expired') }}</span>
          <span class="ticket-stat-label">Expirados</span>
        </div>
      </div>

      <!-- Table -->
      <div class="table-container fade-in-up" id="tickets-table">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Evento ID</th>
              <th>Usuário ID</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="ticket in tickets" :key="ticket.id" :id="`ticket-row-${ticket.id}`">
              <td>
                <span class="ticket-id">#{{ ticket.id }}</span>
              </td>
              <td>
                <router-link :to="`/events/${ticket.event_id}`" class="event-link" :id="`link-event-${ticket.event_id}`">
                  Evento #{{ ticket.event_id }}
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/>
                  </svg>
                </router-link>
              </td>
              <td>
                <span class="user-id">Usuário #{{ ticket.user_id }}</span>
              </td>
              <td>
                <StatusBadge :status="ticket.status" />
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Mobile Cards -->
      <div class="tickets-mobile stagger-list" id="tickets-mobile">
        <div
          v-for="ticket in tickets"
          :key="`mobile-${ticket.id}`"
          class="ticket-mobile-card card fade-in-up"
        >
          <div class="ticket-mobile-header">
            <span class="ticket-id">#{{ ticket.id }}</span>
            <StatusBadge :status="ticket.status" />
          </div>
          <div class="ticket-mobile-info">
            <div class="ticket-mobile-row">
              <span class="label">Evento</span>
              <router-link :to="`/events/${ticket.event_id}`" class="event-link">
                Evento #{{ ticket.event_id }}
              </router-link>
            </div>
            <div class="ticket-mobile-row">
              <span class="label">Usuário</span>
              <span>Usuário #{{ ticket.user_id }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { ticketService } from '../services/ticketService'
import StatusBadge from '../components/StatusBadge.vue'

const tickets = ref([])
const loading = ref(true)
const error = ref(null)

function countByStatus(status) {
  return tickets.value.filter((t) => t.status === status).length
}

async function loadTickets() {
  loading.value = true
  error.value = null
  try {
    tickets.value = await ticketService.getTickets()
  } catch (err) {
    error.value = err.message || 'Erro ao carregar ingressos.'
  } finally {
    loading.value = false
  }
}

onMounted(loadTickets)
</script>

<style scoped>
/* Ticket Stats */
.ticket-stats {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
  margin-bottom: 28px;
}

.ticket-stat-card {
  background: var(--gradient-card);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  padding: 20px;
  text-align: center;
}

.ticket-stat-value {
  display: block;
  font-size: 1.8rem;
  font-weight: 700;
  color: var(--color-text);
  margin-bottom: 4px;
}

.stat-pending { color: var(--color-warning); }
.stat-confirmed { color: var(--color-success); }
.stat-expired { color: var(--color-danger); }

.ticket-stat-label {
  font-size: 0.8rem;
  color: var(--color-text-muted);
  font-weight: 500;
}

/* Table customizations */
.ticket-id {
  font-family: 'SF Mono', 'Fira Code', monospace;
  font-weight: 600;
  color: var(--color-text);
  font-size: 0.85rem;
}

.event-link {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  color: var(--color-primary-light);
  text-decoration: none;
  font-weight: 500;
  transition: color var(--transition-fast);
}

.event-link:hover {
  color: var(--color-accent);
}

.user-id {
  color: var(--color-text-secondary);
}

/* Mobile cards */
.tickets-mobile {
  display: none;
}

.ticket-mobile-card {
  padding: 16px;
}

.ticket-mobile-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 12px;
}

.ticket-mobile-info {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.ticket-mobile-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.85rem;
}

.ticket-mobile-row .label {
  color: var(--color-text-muted);
}

@media (max-width: 768px) {
  .ticket-stats {
    grid-template-columns: repeat(2, 1fr);
  }

  .table-container {
    display: none;
  }

  .tickets-mobile {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
}

@media (max-width: 480px) {
  .ticket-stats {
    grid-template-columns: 1fr 1fr;
  }
}
</style>
