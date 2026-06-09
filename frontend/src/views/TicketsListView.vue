<template>
  <div class="page-container" id="tickets-list-view">
    <div class="page-header">
      <span class="eyebrow">Registro de vendas</span>
      <h1 class="page-title">Ingressos</h1>
      <p class="page-subtitle">Todos os ingressos emitidos na bilheteria e o status de cada pedido.</p>
    </div>

    <!-- Loading -->
    <div v-if="loading" class="loading-overlay" id="loading-tickets">
      <div class="spinner"></div>
      <span>Carregando ingressos…</span>
    </div>

    <!-- Error -->
    <div v-else-if="error" class="empty-state" id="error-tickets">
      <div class="empty-state-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
      </div>
      <h3 class="empty-state-title">Erro ao carregar ingressos</h3>
      <p class="empty-state-text">{{ error }}</p>
      <button class="btn btn-primary" @click="loadTickets" id="btn-retry-tickets">Tentar novamente</button>
    </div>

    <!-- Empty -->
    <div v-else-if="tickets.length === 0" class="empty-state" id="empty-tickets">
      <div class="empty-state-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/><path d="M13 5v2"/><path d="M13 17v2"/><path d="M13 11v2"/></svg>
      </div>
      <h3 class="empty-state-title">Nenhum ingresso emitido</h3>
      <p class="empty-state-text">Os ingressos aparecerão aqui assim que forem comprados.</p>
      <router-link to="/events" class="btn btn-primary" id="btn-browse-events">Ver eventos</router-link>
    </div>

    <!-- Conteúdo -->
    <div v-else class="fade-in-up">
      <!-- Ledger de status -->
      <div class="ticket-stats stagger-list" id="ticket-stats">
        <div class="tstat">
          <span class="tstat-value">{{ tickets.length }}</span>
          <span class="tstat-label">Total</span>
        </div>
        <div class="tstat">
          <span class="tstat-value c-warn">{{ countByStatus('pending') }}</span>
          <span class="tstat-label">Pendentes</span>
        </div>
        <div class="tstat">
          <span class="tstat-value c-ok">{{ countByStatus('confirmed') }}</span>
          <span class="tstat-label">Confirmados</span>
        </div>
        <div class="tstat">
          <span class="tstat-value c-bad">{{ countByStatus('expired') }}</span>
          <span class="tstat-label">Expirados</span>
        </div>
      </div>

      <!-- Tabela -->
      <div class="table-container fade-in-up" id="tickets-table">
        <table class="table">
          <thead>
            <tr>
              <th>Série</th>
              <th>Evento</th>
              <th>Comprador</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="ticket in tickets" :key="ticket.id" :id="`ticket-row-${ticket.id}`">
              <td><span class="ticket-id">Nº {{ String(ticket.id).padStart(4, '0') }}</span></td>
              <td>
                <router-link :to="`/events/${ticket.event_id}`" class="event-link" :id="`link-event-${ticket.event_id}`">
                  Evento #{{ ticket.event_id }}
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"/><path d="M7 17 17 7"/></svg>
                </router-link>
              </td>
              <td><span class="user-id">Usuário #{{ ticket.user_id }}</span></td>
              <td><StatusBadge :status="ticket.status" /></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Mobile -->
      <div class="tickets-mobile stagger-list" id="tickets-mobile">
        <div v-for="ticket in tickets" :key="`mobile-${ticket.id}`" class="ticket-mobile-card card fade-in-up">
          <div class="ticket-mobile-header">
            <span class="ticket-id">Nº {{ String(ticket.id).padStart(4, '0') }}</span>
            <StatusBadge :status="ticket.status" />
          </div>
          <div class="ticket-mobile-info">
            <div class="ticket-mobile-row">
              <span class="label">Evento</span>
              <router-link :to="`/events/${ticket.event_id}`" class="event-link">Evento #{{ ticket.event_id }}</router-link>
            </div>
            <div class="ticket-mobile-row">
              <span class="label">Comprador</span>
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
/* ── Ledger ── */
.ticket-stats {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-lg);
  background: var(--color-surface);
  overflow: hidden;
  margin-bottom: 30px;
}

.tstat {
  display: flex;
  flex-direction: column;
  gap: 6px;
  padding: 24px 26px;
  border-right: 1.5px solid var(--color-border);
  animation: fadeInUp 0.5s ease both;
}
.tstat:last-child { border-right: none; }

.tstat-value {
  font-family: var(--font-display);
  font-size: 2.6rem;
  font-weight: 700;
  letter-spacing: -0.03em;
  line-height: 1;
  color: var(--color-ink);
}
.c-warn { color: var(--color-warning); }
.c-ok { color: var(--color-success); }
.c-bad { color: var(--color-danger); }

.tstat-label {
  font-family: var(--font-mono);
  font-size: 0.66rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-text-muted);
}

/* ── Tabela ── */
.ticket-id {
  font-family: var(--font-mono);
  font-weight: 700;
  color: var(--color-text);
  font-size: 0.82rem;
  letter-spacing: 0.04em;
}

.event-link {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  color: var(--color-primary);
  font-weight: 600;
  transition: color var(--transition-fast);
}
.event-link:hover { color: var(--color-primary-dark); }

.user-id { color: var(--color-text-secondary); font-family: var(--font-mono); font-size: 0.82rem; }

/* ── Mobile ── */
.tickets-mobile { display: none; }
.ticket-mobile-card { padding: 18px; }
.ticket-mobile-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 14px;
  padding-bottom: 12px;
  border-bottom: 1px solid var(--color-border);
}
.ticket-mobile-info { display: flex; flex-direction: column; gap: 10px; }
.ticket-mobile-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.86rem;
}
.ticket-mobile-row .label {
  font-family: var(--font-mono);
  font-size: 0.66rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-text-muted);
}

@media (max-width: 768px) {
  .ticket-stats { grid-template-columns: repeat(2, 1fr); }
  .tstat:nth-child(2) { border-right: none; }
  .tstat:nth-child(1), .tstat:nth-child(2) { border-bottom: 1.5px solid var(--color-border); }
  .table-container { display: none; }
  .tickets-mobile { display: flex; flex-direction: column; gap: 12px; }
}

@media (max-width: 480px) {
  .ticket-stats { grid-template-columns: 1fr 1fr; }
}
</style>
