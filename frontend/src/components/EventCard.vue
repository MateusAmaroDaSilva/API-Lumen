<template>
  <router-link :to="`/events/${event.id}`" class="event-card" :id="`event-card-${event.id}`">
    <div class="event-card-header">
      <div class="event-card-gradient" :style="gradientStyle"></div>
      <div class="event-card-overlay">
        <span class="event-card-price">R$ {{ formatPrice(event.price) }}</span>
        <StatusBadge :status="eventStatus" />
      </div>
    </div>
    <div class="event-card-body">
      <h3 class="event-card-title">{{ event.name }}</h3>
      <p class="event-card-desc">{{ truncate(event.description, 80) }}</p>
      <div class="event-card-meta">
        <div class="meta-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/>
          </svg>
          <span>{{ formatDate(event.event_date) }}</span>
        </div>
        <div class="meta-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
          <span>{{ event.capacity }} vagas</span>
        </div>
      </div>
    </div>
  </router-link>
</template>

<script setup>
import { computed } from 'vue'
import StatusBadge from './StatusBadge.vue'

const props = defineProps({
  event: {
    type: Object,
    required: true,
  },
})

const eventStatus = computed(() => {
  if (props.event.is_past) return 'expired'
  if (!props.event.has_capacity) return 'soldout'
  return 'available'
})

// Generate a consistent gradient from event id
const gradientStyle = computed(() => {
  const hue = (props.event.id * 47) % 360
  return {
    background: `linear-gradient(135deg, hsl(${hue}, 70%, 35%) 0%, hsl(${(hue + 40) % 360}, 60%, 20%) 100%)`,
  }
})

function formatPrice(price) {
  return Number(price).toFixed(2).replace('.', ',')
}

function formatDate(dateStr) {
  const date = new Date(dateStr)
  return date.toLocaleDateString('pt-BR', {
    day: '2-digit',
    month: 'short',
    year: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
  })
}

function truncate(text, maxLength) {
  if (!text) return ''
  return text.length > maxLength ? text.slice(0, maxLength) + '…' : text
}
</script>

<style scoped>
.event-card {
  display: flex;
  flex-direction: column;
  background: var(--gradient-card);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  overflow: hidden;
  text-decoration: none;
  color: var(--color-text);
  transition: all var(--transition-base);
  animation: fadeInUp 0.5s ease both;
}

.event-card:hover {
  transform: translateY(-4px);
  border-color: var(--color-primary);
  box-shadow: var(--shadow-glow);
}

.event-card-header {
  position: relative;
  height: 160px;
  overflow: hidden;
}

.event-card-gradient {
  width: 100%;
  height: 100%;
  transition: transform 0.4s ease;
}

.event-card:hover .event-card-gradient {
  transform: scale(1.05);
}

.event-card-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 16px;
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.6));
}

.event-card-price {
  font-size: 1.3rem;
  font-weight: 700;
  color: #fff;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.event-card-body {
  padding: 20px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.event-card-title {
  font-size: 1.05rem;
  font-weight: 600;
  color: var(--color-text);
  margin-bottom: 8px;
  line-height: 1.3;
}

.event-card-desc {
  font-size: 0.85rem;
  color: var(--color-text-muted);
  line-height: 1.5;
  margin-bottom: 16px;
  flex: 1;
}

.event-card-meta {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.meta-item {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 0.8rem;
  color: var(--color-text-secondary);
}

.meta-item svg {
  color: var(--color-text-muted);
  flex-shrink: 0;
}
</style>
