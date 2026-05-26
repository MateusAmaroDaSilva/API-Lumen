<template>
  <span class="badge" :class="badgeClass" :id="`badge-${status}`">
    <span class="badge-dot"></span>
    {{ label }}
  </span>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  status: {
    type: String,
    required: true,
  },
})

const statusMap = {
  pending: { label: 'Pendente', class: 'badge-warning' },
  confirmed: { label: 'Confirmado', class: 'badge-success' },
  expired: { label: 'Expirado', class: 'badge-danger' },
  available: { label: 'Disponível', class: 'badge-success' },
  soldout: { label: 'Esgotado', class: 'badge-danger' },
}

const label = computed(() => statusMap[props.status]?.label || props.status)
const badgeClass = computed(() => statusMap[props.status]?.class || 'badge-muted')
</script>

<style scoped>
.badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 4px 12px;
  font-size: 0.7rem;
  font-weight: 600;
  border-radius: 100px;
  text-transform: uppercase;
  letter-spacing: 0.06em;
}

.badge-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: currentColor;
  animation: pulse 2s infinite;
}

.badge-success { color: var(--color-success); background: var(--color-success-bg); }
.badge-warning { color: var(--color-warning); background: var(--color-warning-bg); }
.badge-danger { color: var(--color-danger); background: var(--color-danger-bg); }
.badge-muted { color: var(--color-text-muted); background: rgba(139, 148, 158, 0.15); }
</style>
