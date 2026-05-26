<template>
  <footer class="app-footer" id="app-footer">
    <div class="footer-content">
      <div class="footer-left">
        <div class="footer-brand">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
            <path d="M13 5v2"/><path d="M13 17v2"/><path d="M13 11v2"/>
          </svg>
          <span>Sistema de Ingressos</span>
        </div>
        <p class="footer-desc">Plataforma de gestão e venda de ingressos para eventos.</p>
      </div>
      <div class="footer-right">
        <span class="footer-api">API: {{ apiUrl }}</span>
        <span class="footer-copy">&copy; {{ currentYear }}</span>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { computed } from 'vue'

const apiUrl = import.meta.env.VITE_API_BASE_URL || 'http://localhost:8000/v1'
const currentYear = computed(() => new Date().getFullYear())
</script>

<style scoped>
.app-footer {
  background: var(--color-dark);
  border-top: 1px solid var(--color-border);
  padding: 24px 0;
  margin-top: 60px;
}

.footer-content {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 24px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 16px;
}

.footer-brand {
  display: flex;
  align-items: center;
  gap: 8px;
  color: var(--color-text);
  font-weight: 600;
  font-size: 0.9rem;
  margin-bottom: 4px;
}

.footer-desc {
  font-size: 0.8rem;
  color: var(--color-text-muted);
}

.footer-right {
  display: flex;
  align-items: center;
  gap: 20px;
  font-size: 0.8rem;
  color: var(--color-text-muted);
}

.footer-api {
  padding: 4px 10px;
  background: var(--color-surface);
  border-radius: var(--radius-sm);
  font-family: 'SF Mono', 'Fira Code', monospace;
  font-size: 0.75rem;
}

@media (max-width: 640px) {
  .footer-content {
    flex-direction: column;
    align-items: flex-start;
  }
}
</style>
