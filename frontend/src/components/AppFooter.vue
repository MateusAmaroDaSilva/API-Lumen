<template>
  <footer class="app-footer" id="app-footer">
    <div class="footer-perf" aria-hidden="true"></div>
    <div class="footer-content">
      <div class="footer-left">
        <div class="footer-brand">Bilheteria</div>
        <p class="footer-desc">Gestão de eventos &amp; venda de ingressos — projeto acadêmico UNIMAR.</p>
      </div>
      <div class="footer-right">
        <span class="footer-meta">Endpoint</span>
        <span class="footer-api">{{ apiUrl }}</span>
        <span class="footer-copy">© {{ currentYear }} · Admit One</span>
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
  position: relative;
  background: var(--color-ink);
  color: var(--color-paper);
  padding: 40px 0 36px;
  margin-top: 90px;
}

/* picote no topo do rodapé, como destacar a base do ingresso */
.footer-perf {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 12px;
  transform: translateY(-50%);
  background:
    radial-gradient(circle at center, var(--color-bg) 0 6px, transparent 6.5px);
  background-size: 20px 12px;
  background-repeat: repeat-x;
  background-position: center;
}

.footer-content {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 32px;
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 20px;
}

.footer-brand {
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 1.5rem;
  letter-spacing: -0.02em;
  margin-bottom: 8px;
}

.footer-desc {
  font-size: 0.85rem;
  color: rgba(251, 246, 236, 0.6);
  max-width: 42ch;
}

.footer-right {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 8px;
  text-align: right;
}

.footer-meta {
  font-family: var(--font-mono);
  font-size: 0.62rem;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--color-primary-light);
}

.footer-api {
  font-family: var(--font-mono);
  font-size: 0.78rem;
  color: rgba(251, 246, 236, 0.85);
  padding: 5px 11px;
  border: 1px solid rgba(251, 246, 236, 0.2);
  border-radius: var(--radius-sm);
}

.footer-copy {
  font-family: var(--font-mono);
  font-size: 0.7rem;
  letter-spacing: 0.08em;
  color: rgba(251, 246, 236, 0.45);
}

@media (max-width: 640px) {
  .footer-content { flex-direction: column; align-items: flex-start; }
  .footer-right { align-items: flex-start; text-align: left; }
}
</style>
