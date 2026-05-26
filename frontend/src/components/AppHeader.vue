<template>
  <header class="app-header">
    <div class="header-content">
      <router-link to="/" class="header-logo" id="header-logo">
        <div class="logo-icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
            <path d="M13 5v2"/>
            <path d="M13 17v2"/>
            <path d="M13 11v2"/>
          </svg>
        </div>
        <span class="logo-text">Ingressos</span>
      </router-link>

      <nav class="header-nav" :class="{ open: menuOpen }" id="main-nav">
        <router-link
          v-for="link in navLinks"
          :key="link.to"
          :to="link.to"
          class="nav-link"
          :id="link.id"
          @click="menuOpen = false"
        >
          <span class="nav-icon" v-html="link.icon"></span>
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
  {
    to: '/',
    label: 'Dashboard',
    id: 'nav-dashboard',
    icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>',
  },
  {
    to: '/events',
    label: 'Eventos',
    id: 'nav-events',
    icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>',
  },
  {
    to: '/events/new',
    label: 'Novo Evento',
    id: 'nav-new-event',
    icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>',
  },
  {
    to: '/tickets',
    label: 'Ingressos',
    id: 'nav-tickets',
    icon: '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/><path d="M13 5v2"/><path d="M13 17v2"/><path d="M13 11v2"/></svg>',
  },
]
</script>

<style scoped>
.app-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: var(--header-height);
  background: rgba(10, 14, 23, 0.85);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--color-border);
  z-index: 1000;
  animation: slideDown 0.4s ease both;
}

.header-content {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 24px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.header-logo {
  display: flex;
  align-items: center;
  gap: 10px;
  text-decoration: none;
  color: var(--color-text);
  font-weight: 700;
  font-size: 1.15rem;
  letter-spacing: -0.02em;
}

.logo-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 38px;
  height: 38px;
  background: var(--gradient-primary);
  border-radius: var(--radius-md);
  color: #fff;
  box-shadow: var(--shadow-glow);
}

.logo-text {
  background: linear-gradient(135deg, #fff 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.header-nav {
  display: flex;
  align-items: center;
  gap: 4px;
}

.nav-link {
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 8px 16px;
  font-size: 0.875rem;
  font-weight: 500;
  color: var(--color-text-muted);
  text-decoration: none;
  border-radius: var(--radius-md);
  transition: all var(--transition-fast);
}

.nav-link:hover {
  color: var(--color-text);
  background: var(--color-surface);
}

.nav-link.router-link-exact-active {
  color: var(--color-accent);
  background: rgba(0, 255, 255, 0.08);
}

.nav-icon {
  display: flex;
  align-items: center;
  opacity: 0.7;
}

.nav-link.router-link-exact-active .nav-icon {
  opacity: 1;
}

/* Hamburger */
.menu-toggle {
  display: none;
  width: 36px;
  height: 36px;
  background: none;
  border: none;
  padding: 6px;
  cursor: pointer;
  position: relative;
}

.menu-toggle span,
.menu-toggle span::before,
.menu-toggle span::after {
  display: block;
  width: 22px;
  height: 2px;
  background: var(--color-text);
  border-radius: 2px;
  transition: all 0.3s ease;
  position: absolute;
  left: 7px;
}

.menu-toggle span { top: 50%; transform: translateY(-50%); }
.menu-toggle span::before { content: ''; top: -7px; }
.menu-toggle span::after { content: ''; top: 7px; }

.menu-toggle span.active { background: transparent; }
.menu-toggle span.active::before { top: 0; transform: rotate(45deg); }
.menu-toggle span.active::after { top: 0; transform: rotate(-45deg); }

@media (max-width: 768px) {
  .menu-toggle {
    display: block;
  }

  .header-nav {
    position: fixed;
    top: var(--header-height);
    left: 0;
    right: 0;
    background: rgba(10, 14, 23, 0.98);
    backdrop-filter: blur(20px);
    flex-direction: column;
    padding: 16px;
    gap: 4px;
    border-bottom: 1px solid var(--color-border);
    transform: translateY(-100%);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
  }

  .header-nav.open {
    transform: translateY(0);
    opacity: 1;
    pointer-events: all;
  }

  .nav-link {
    width: 100%;
    padding: 14px 16px;
  }
}
</style>
