<template>
  <Teleport to="body">
    <Transition name="toast">
      <div v-if="visible" class="toast-wrapper" id="toast-notification">
        <div class="toast" :class="`toast-${type}`">
          <div class="toast-icon" v-html="icon"></div>
          <div class="toast-content">
            <strong v-if="title" class="toast-title">{{ title }}</strong>
            <p class="toast-message">{{ message }}</p>
          </div>
          <button class="toast-close" @click="close" aria-label="Fechar">&times;</button>
        </div>
      </div>
    </Transition>
  </Teleport>
</template>

<script setup>
import { ref, computed, watch } from 'vue'

const props = defineProps({
  message: { type: String, default: '' },
  title: { type: String, default: '' },
  type: { type: String, default: 'success' },
  duration: { type: Number, default: 4000 },
  show: { type: Boolean, default: false },
})

const emit = defineEmits(['update:show'])

const visible = ref(false)
let timer = null

watch(() => props.show, (val) => {
  if (val) {
    visible.value = true
    clearTimeout(timer)
    timer = setTimeout(() => close(), props.duration)
  }
})

function close() {
  visible.value = false
  emit('update:show', false)
}

const icons = {
  success: '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>',
  error: '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
  warning: '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 9v4"/><path d="M12 17h.01"/><path d="m10.3 3.9-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.7-3l-8-14a2 2 0 0 0-3.4 0Z"/></svg>',
  info: '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 16v-4"/><path d="M12 8h.01"/><circle cx="12" cy="12" r="10"/></svg>',
}

const icon = computed(() => icons[props.type] || icons.info)
</script>

<style scoped>
.toast-wrapper {
  position: fixed;
  top: calc(var(--header-height) + 18px);
  right: 24px;
  z-index: 9999;
}

.toast {
  display: flex;
  align-items: flex-start;
  gap: 13px;
  padding: 16px 18px;
  min-width: 320px;
  max-width: 440px;
  background: var(--color-surface);
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-press);
}

.toast-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 34px;
  height: 34px;
  flex-shrink: 0;
  border: 1.5px solid currentColor;
  border-radius: var(--radius-sm);
}

.toast-success { --toast-c: var(--color-success); }
.toast-error { --toast-c: var(--color-danger); }
.toast-warning { --toast-c: var(--color-warning); }
.toast-info { --toast-c: var(--color-primary); }

.toast-success .toast-icon,
.toast-error .toast-icon,
.toast-warning .toast-icon,
.toast-info .toast-icon {
  color: var(--toast-c);
  background: color-mix(in srgb, var(--toast-c) 12%, transparent);
}

.toast-title {
  display: block;
  font-family: var(--font-display);
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--color-text);
  margin-bottom: 3px;
}

.toast-message {
  font-size: 0.82rem;
  color: var(--color-text-secondary);
  line-height: 1.45;
  margin: 0;
}

.toast-content { flex: 1; padding-top: 1px; }

.toast-close {
  background: none;
  border: none;
  color: var(--color-text-muted);
  font-size: 1.3rem;
  line-height: 1;
  padding: 0 2px;
  transition: color var(--transition-fast);
}
.toast-close:hover { color: var(--color-ink); }

.toast-enter-active { animation: toastIn 0.3s cubic-bezier(0.2, 0.8, 0.3, 1) both; }
.toast-leave-active { animation: toastOut 0.22s ease both; }

@keyframes toastIn {
  from { opacity: 0; transform: translateX(36px); }
  to { opacity: 1; transform: translateX(0); }
}
@keyframes toastOut {
  from { opacity: 1; transform: translateX(0); }
  to { opacity: 0; transform: translateX(36px); }
}
</style>
