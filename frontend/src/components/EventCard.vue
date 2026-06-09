<template>
  <router-link :to="`/events/${event.id}`" class="event-card" :id="`event-card-${event.id}`">
    <!-- Cabeçalho do canhoto -->
    <div class="ticket-top">
      <span class="ticket-admit">Admit One</span>
      <span class="ticket-serial">Nº {{ String(event.id).padStart(4, '0') }}</span>
    </div>

    <!-- Corpo -->
    <div class="ticket-body">
      <StatusBadge :status="eventStatus" />
      <h3 class="event-card-title">{{ event.name }}</h3>
      <p class="event-card-desc">{{ truncate(event.description, 92) }}</p>

      <dl class="event-card-meta">
        <div class="meta-item">
          <dt>Data</dt>
          <dd>{{ formatDate(event.event_date) }}</dd>
        </div>
        <div class="meta-item">
          <dt>Lugares</dt>
          <dd>{{ event.capacity }}</dd>
        </div>
      </dl>
    </div>

    <!-- Picote com entalhes laterais -->
    <div class="ticket-perf"><span class="notch left"></span><span class="notch right"></span></div>

    <!-- Rodapé com preço + código de barras -->
    <div class="ticket-foot">
      <div class="ticket-price">
        <span class="price-cur">R$</span>{{ formatPrice(event.price) }}
      </div>
      <div class="barcode" aria-hidden="true"></div>
    </div>
  </router-link>
</template>

<script setup>
import { computed } from 'vue'
import StatusBadge from './StatusBadge.vue'

const props = defineProps({
  event: { type: Object, required: true },
})

const eventStatus = computed(() => {
  if (props.event.is_past) return 'expired'
  if (!props.event.has_capacity) return 'soldout'
  return 'available'
})

function formatPrice(price) {
  return Number(price).toFixed(2).replace('.', ',')
}

function formatDate(dateStr) {
  const date = new Date(dateStr)
  return date.toLocaleDateString('pt-BR', {
    day: '2-digit', month: 'short', year: 'numeric',
    hour: '2-digit', minute: '2-digit',
  })
}

function truncate(text, maxLength) {
  if (!text) return ''
  return text.length > maxLength ? text.slice(0, maxLength) + '…' : text
}
</script>

<style scoped>
.event-card {
  position: relative;
  display: flex;
  flex-direction: column;
  background: var(--color-surface);
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-lg);
  text-decoration: none;
  color: var(--color-text);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  animation: fadeInUp 0.5s ease both;
}

.event-card:hover {
  transform: translate(-4px, -4px);
  box-shadow: var(--shadow-glow);
}

/* ── Topo ── */
.ticket-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 11px 18px;
  background: var(--color-ink);
  color: var(--color-paper);
  border-radius: var(--radius-lg) var(--radius-lg) 0 0;
}

.ticket-admit {
  font-family: var(--font-mono);
  font-size: 0.66rem;
  font-weight: 700;
  letter-spacing: 0.26em;
  text-transform: uppercase;
}

.ticket-serial {
  font-family: var(--font-mono);
  font-size: 0.66rem;
  letter-spacing: 0.1em;
  color: var(--color-primary-light);
}

/* ── Corpo ── */
.ticket-body {
  padding: 20px 18px 18px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.event-card-title {
  font-family: var(--font-display);
  font-size: 1.32rem;
  font-weight: 600;
  letter-spacing: -0.015em;
  color: var(--color-text);
  margin: 12px 0 8px;
  line-height: 1.12;
  transition: color var(--transition-fast);
}

.event-card:hover .event-card-title { color: var(--color-primary); }

.event-card-desc {
  font-size: 0.85rem;
  color: var(--color-text-muted);
  line-height: 1.5;
  margin-bottom: 18px;
  flex: 1;
}

.event-card-meta {
  display: flex;
  gap: 28px;
}

.meta-item dt {
  font-family: var(--font-mono);
  font-size: 0.6rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  margin-bottom: 4px;
}

.meta-item dd {
  font-size: 0.84rem;
  font-weight: 600;
  color: var(--color-text);
}

/* ── Picote ── */
.ticket-perf {
  position: relative;
  height: 0;
  margin: 0 14px;
  border-top: 2px dashed var(--color-border-light);
}

.notch {
  position: absolute;
  top: 50%;
  width: 18px;
  height: 18px;
  background: var(--color-bg);
  border: 1.5px solid var(--color-ink);
  border-radius: 50%;
  transform: translateY(-50%);
}
.notch.left { left: -23px; border-right-color: var(--color-bg); }
.notch.right { right: -23px; border-left-color: var(--color-bg); }

/* ── Rodapé ── */
.ticket-foot {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 18px;
  padding: 16px 18px 18px;
}

.ticket-price {
  font-family: var(--font-display);
  font-size: 1.7rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  color: var(--color-ink);
  white-space: nowrap;
}

.price-cur {
  font-size: 0.85rem;
  font-weight: 600;
  margin-right: 3px;
  color: var(--color-text-muted);
  vertical-align: 0.35em;
}

.barcode {
  flex: 1;
  max-width: 130px;
  height: 34px;
}
</style>
