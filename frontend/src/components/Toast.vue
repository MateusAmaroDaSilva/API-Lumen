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
    timer = setTimeout(() => {
      close()
    }, props.duration)
  }
})

function close() {
  visible.value = false
  emit('update:show', false)
}

const icons = {
  success: '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
  error: '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" x2="9" y1="9" y2="15"/><line x1="9" x2="15" y1="9" y2="15"/></svg>',
  warning: '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" x2="12" y1="9" y2="13"/><line x1="12" x2="12.01" y1="17" y2="17"/></svg>',
  info: '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>',
}

const icon = computed(() => icons[props.type] || icons.info)
</script>

<style scoped>
.toast-wrapper {
  position: fixed;
  top: calc(var(--header-height) + 16px);
  right: 24px;
  z-index: 9999;
}

.toast {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  padding: 16px 20px;
  min-width: 320px;
  max-width: 440px;
  background: var(--color-surface);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  backdrop-filter: blur(16px);
}

.toast-success { border-left: 3px solid var(--color-success); }
.toast-error { border-left: 3px solid var(--color-danger); }
.toast-warning { border-left: 3px solid var(--color-warning); }
.toast-info { border-left: 3px solid var(--color-primary); }

.toast-success .toast-icon { color: var(--color-success); }
.toast-error .toast-icon { color: var(--color-danger); }
.toast-warning .toast-icon { color: var(--color-warning); }
.toast-info .toast-icon { color: var(--color-primary); }

.toast-icon {
  display: flex;
  align-items: center;
  flex-shrink: 0;
  padding-top: 2px;
}

.toast-content {
  flex: 1;
}

.toast-title {
  display: block;
  font-size: 0.85rem;
  font-weight: 600;
  color: var(--color-text);
  margin-bottom: 2px;
}

.toast-message {
  font-size: 0.8rem;
  color: var(--color-text-muted);
  line-height: 1.4;
  margin: 0;
}

.toast-close {
  background: none;
  border: none;
  color: var(--color-text-muted);
  font-size: 1.2rem;
  line-height: 1;
  padding: 0 4px;
  cursor: pointer;
  transition: color var(--transition-fast);
}

.toast-close:hover {
  color: var(--color-text);
}

/* Transition */
.toast-enter-active {
  animation: toastIn 0.35s ease both;
}

.toast-leave-active {
  animation: toastOut 0.25s ease both;
}

@keyframes toastIn {
  from {
    opacity: 0;
    transform: translateX(40px) scale(0.95);
  }
  to {
    opacity: 1;
    transform: translateX(0) scale(1);
  }
}

@keyframes toastOut {
  from {
    opacity: 1;
    transform: translateX(0) scale(1);
  }
  to {
    opacity: 0;
    transform: translateX(40px) scale(0.95);
  }
}
</style>
