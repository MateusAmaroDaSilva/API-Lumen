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
  available: { label: 'À venda', class: 'badge-success' },
  soldout: { label: 'Esgotado', class: 'badge-danger' },
}

const label = computed(() => statusMap[props.status]?.label || props.status)
const badgeClass = computed(() => statusMap[props.status]?.class || 'badge-muted')
</script>

<style scoped>
.badge {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  padding: 4px 10px;
  font-family: var(--font-mono);
  font-size: 0.64rem;
  font-weight: 700;
  border-radius: var(--radius-sm);
  text-transform: uppercase;
  letter-spacing: 0.12em;
  border: 1.5px solid currentColor;
}

.badge-dot {
  width: 6px;
  height: 6px;
  background: currentColor;
}

.badge-success { color: var(--color-success); background: var(--color-success-bg); }
.badge-warning { color: var(--color-warning); background: var(--color-warning-bg); }
.badge-danger  { color: var(--color-danger);  background: var(--color-danger-bg); }
.badge-muted   { color: var(--color-text-muted); background: rgba(138, 124, 102, 0.12); }
</style>
