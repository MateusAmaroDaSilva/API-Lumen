<template>
  <header class="app-header">
    <div class="header-content">
      <router-link to="/" class="header-logo" id="header-logo">
        <span class="logo-mark" aria-hidden="true">
          <span></span><span></span><span></span>
        </span>
        <span class="logo-text">
          Bilheteria
          <span class="logo-sub">Box&nbsp;Office</span>
        </span>
      </router-link>

      <nav class="header-nav" :class="{ open: menuOpen }" id="main-nav">
        <router-link
          v-for="(link, i) in navLinks"
          :key="link.to"
          :to="link.to"
          class="nav-link"
          :id="link.id"
          @click="menuOpen = false"
        >
          <span class="nav-index">{{ String(i + 1).padStart(2, '0') }}</span>
          {{ link.label }}
        </router-link>
      </nav>

      <button class="menu-toggle" @click="menuOpen = !menuOpen" id="menu-toggle" aria-label="Menu">
        <span :class="{ active: menuOpen }"></span>
      </button>
    </div>
  </header>
</template>

<script setup>
import { ref } from 'vue'

const menuOpen = ref(false)

const navLinks = [
  { to: '/', label: 'Início', id: 'nav-dashboard' },
  { to: '/events', label: 'Eventos', id: 'nav-events' },
  { to: '/events/new', label: 'Novo Evento', id: 'nav-new-event' },
  { to: '/tickets', label: 'Ingressos', id: 'nav-tickets' },
]
</script>

<style scoped>
.app-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: var(--header-height);
  background: rgba(246, 240, 228, 0.85);
  backdrop-filter: blur(10px) saturate(120%);
  -webkit-backdrop-filter: blur(10px) saturate(120%);
  border-bottom: 1.5px solid var(--color-ink);
  z-index: 1000;
  animation: slideDown 0.4s ease both;
}

.header-content {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 32px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/* ── Logo ── */
.header-logo {
  display: flex;
  align-items: center;
  gap: 12px;
  text-decoration: none;
  color: var(--color-ink);
}

.logo-mark {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 3px;
  width: 38px;
  height: 38px;
  padding: 9px 8px;
  background: var(--color-primary);
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-sm);
  transition: transform var(--transition-base);
}
.logo-mark span {
  height: 2px;
  background: var(--color-paper);
  border-radius: 2px;
}
.logo-mark span:nth-child(2) { width: 80%; }
.logo-mark span:nth-child(3) { width: 55%; }

.header-logo:hover .logo-mark { transform: rotate(-4deg); }

.logo-text {
  display: flex;
  flex-direction: column;
  font-family: var(--font-display);
  font-weight: 700;
  font-size: 1.22rem;
  line-height: 1;
  letter-spacing: -0.02em;
  color: var(--color-ink);
}

.logo-sub {
  font-family: var(--font-mono);
  font-size: 0.56rem;
  font-weight: 700;
  letter-spacing: 0.32em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  margin-top: 4px;
}

/* ── Nav ── */
.header-nav {
  display: flex;
  align-items: center;
  gap: 4px;
}

.nav-link {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  padding: 9px 14px;
  font-family: var(--font-mono);
  font-size: 0.74rem;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: var(--color-text-secondary);
  text-decoration: none;
  border: 1.5px solid transparent;
  border-radius: var(--radius-sm);
  transition: all var(--transition-fast);
}

.nav-index {
  font-size: 0.62rem;
  color: var(--color-text-muted);
  transition: color var(--transition-fast);
}

.nav-link:hover {
  color: var(--color-ink);
  border-color: var(--color-border-light);
}

.nav-link.router-link-exact-active {
  color: var(--color-paper);
  background: var(--color-ink);
  border-color: var(--color-ink);
}
.nav-link.router-link-exact-active .nav-index { color: var(--color-primary-light); }

/* ── Hamburger ── */
.menu-toggle {
  display: none;
  width: 38px;
  height: 38px;
  background: none;
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-sm);
  padding: 6px;
  position: relative;
}

.menu-toggle span,
.menu-toggle span::before,
.menu-toggle span::after {
  display: block;
  width: 20px;
  height: 2px;
  background: var(--color-ink);
  border-radius: 2px;
  transition: all 0.3s ease;
  position: absolute;
  left: 8px;
}
.menu-toggle span { top: 50%; transform: translateY(-50%); }
.menu-toggle span::before { content: ''; top: -6px; }
.menu-toggle span::after { content: ''; top: 6px; }
.menu-toggle span.active { background: transparent; }
.menu-toggle span.active::before { top: 0; transform: rotate(45deg); }
.menu-toggle span.active::after { top: 0; transform: rotate(-45deg); }

@media (max-width: 820px) {
  .menu-toggle { display: block; }

  .header-nav {
    position: fixed;
    top: var(--header-height);
    left: 0;
    right: 0;
    background: var(--color-surface);
    flex-direction: column;
    align-items: stretch;
    padding: 16px;
    gap: 6px;
    border-bottom: 1.5px solid var(--color-ink);
    transform: translateY(-110%);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
  }
  .header-nav.open {
    transform: translateY(0);
    opacity: 1;
    pointer-events: all;
  }
  .nav-link { width: 100%; padding: 14px 16px; }
}
</style>
