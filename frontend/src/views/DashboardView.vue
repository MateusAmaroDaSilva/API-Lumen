<template>
  <div class="dashboard" id="dashboard-view">
    <!-- Hero Section -->
    <section class="hero" id="hero-section">
      <div class="hero-bg">
        <div class="hero-gradient"></div>
        <div class="hero-particles">
          <span v-for="i in 6" :key="i" class="particle" :style="particleStyle(i)"></span>
        </div>
      </div>
      <div class="hero-content">
        <h1 class="hero-title">
          Sistema de
          <span class="hero-accent">Ingressos</span>
        </h1>
        <p class="hero-subtitle">
          Gerencie eventos e vendas de ingressos em uma plataforma moderna e eficiente.
        </p>
        <div class="hero-actions">
          <router-link to="/events/new" class="btn btn-accent btn-lg" id="hero-create-event">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/>
            </svg>
            Criar Evento
          </router-link>
          <router-link to="/events" class="btn btn-secondary btn-lg" id="hero-view-events">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/>
            </svg>
            Ver Eventos
          </router-link>
        </div>
      </div>
    </section>

    <!-- Stats -->
    <section class="stats-section" id="stats-section">
      <div class="stats-grid grid grid-3 stagger-list">
        <div class="stat-card fade-in-up" id="stat-events">
          <div class="stat-icon stat-icon-primary">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/>
            </svg>
          </div>
          <div class="stat-info">
            <span class="stat-value">{{ stats.events }}</span>
            <span class="stat-label">Eventos</span>
          </div>
        </div>

        <div class="stat-card fade-in-up" id="stat-tickets">
          <div class="stat-icon stat-icon-accent">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
              <path d="M13 5v2"/><path d="M13 17v2"/><path d="M13 11v2"/>
            </svg>
          </div>
          <div class="stat-info">
            <span class="stat-value">{{ stats.tickets }}</span>
            <span class="stat-label">Ingressos Vendidos</span>
          </div>
        </div>

        <div class="stat-card fade-in-up" id="stat-available">
          <div class="stat-icon stat-icon-success">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
          </div>
          <div class="stat-info">
            <span class="stat-value">{{ stats.available }}</span>
            <span class="stat-label">Eventos Disponíveis</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Quick Actions -->
    <section class="quick-actions" id="quick-actions">
      <h2 class="section-title">Acesso Rápido</h2>
      <div class="actions-grid grid grid-3 stagger-list">
        <router-link to="/events" class="action-card fade-in-up" id="action-events">
          <div class="action-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/>
            </svg>
          </div>
          <h3>Listar Eventos</h3>
          <p>Veja todos os eventos cadastrados e seus detalhes.</p>
          <span class="action-arrow">→</span>
        </router-link>

        <router-link to="/events/new" class="action-card fade-in-up" id="action-new-event">
          <div class="action-icon action-icon-accent">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/>
            </svg>
          </div>
          <h3>Criar Evento</h3>
          <p>Cadastre um novo evento com preço, data e capacidade.</p>
          <span class="action-arrow">→</span>
        </router-link>

        <router-link to="/tickets" class="action-card fade-in-up" id="action-tickets">
          <div class="action-icon action-icon-warning">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
              <path d="M13 5v2"/><path d="M13 17v2"/><path d="M13 11v2"/>
            </svg>
          </div>
          <h3>Ver Ingressos</h3>
          <p>Acompanhe todos os ingressos vendidos e seus status.</p>
          <span class="action-arrow">→</span>
        </router-link>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { eventService } from '../services/eventService'
import { ticketService } from '../services/ticketService'

const stats = ref({
  events: '—',
  tickets: '—',
  available: '—',
})

function particleStyle(i) {
  const size = 4 + Math.random() * 6
  return {
    width: `${size}px`,
    height: `${size}px`,
    left: `${10 + (i * 15)}%`,
    top: `${20 + (i * 10)}%`,
    animationDelay: `${i * 0.5}s`,
    animationDuration: `${3 + i * 0.5}s`,
  }
}

onMounted(async () => {
  try {
    const [events, tickets] = await Promise.allSettled([
      eventService.getEvents(),
      ticketService.getTickets(),
    ])

    const eventsList = events.status === 'fulfilled' ? events.value : []
    const ticketsList = tickets.status === 'fulfilled' ? tickets.value : []

    stats.value = {
      events: eventsList.length,
      tickets: ticketsList.length,
      available: eventsList.filter((e) => e.has_capacity && !e.is_past).length,
    }
  } catch {
    // keep defaults
  }
})
</script>

<style scoped>
.dashboard {
  padding-top: var(--header-height);
}

/* ── Hero ── */
.hero {
  position: relative;
  min-height: 420px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.hero-bg {
  position: absolute;
  inset: 0;
}

.hero-gradient {
  position: absolute;
  inset: 0;
  background: var(--gradient-hero);
}

.hero-gradient::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 30% 50%, rgba(0, 255, 255, 0.08) 0%, transparent 60%);
}

.hero-particles {
  position: absolute;
  inset: 0;
}

.particle {
  position: absolute;
  background: rgba(0, 255, 255, 0.3);
  border-radius: 50%;
  animation: float 4s ease-in-out infinite;
}

@keyframes float {
  0%, 100% { transform: translateY(0) scale(1); opacity: 0.3; }
  50% { transform: translateY(-20px) scale(1.3); opacity: 0.6; }
}

.hero-content {
  position: relative;
  z-index: 1;
  text-align: center;
  padding: 60px 24px;
  max-width: 640px;
  animation: fadeInUp 0.6s ease both;
}

.hero-title {
  font-size: 3rem;
  font-weight: 800;
  letter-spacing: -0.03em;
  line-height: 1.1;
  margin-bottom: 16px;
  color: #fff;
}

.hero-accent {
  background: linear-gradient(135deg, var(--color-accent) 0%, #66FFE6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.hero-subtitle {
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.7);
  margin-bottom: 32px;
  line-height: 1.6;
}

.hero-actions {
  display: flex;
  gap: 12px;
  justify-content: center;
  flex-wrap: wrap;
}

/* ── Stats ── */
.stats-section {
  max-width: 1280px;
  margin: -40px auto 0;
  padding: 0 24px;
  position: relative;
  z-index: 2;
}

.stat-card {
  background: var(--gradient-card);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  padding: 24px;
  display: flex;
  align-items: center;
  gap: 16px;
  transition: all var(--transition-base);
}

.stat-card:hover {
  border-color: var(--color-border-light);
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

.stat-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.stat-icon-primary { background: rgba(2, 77, 223, 0.15); color: var(--color-primary-light); }
.stat-icon-accent { background: rgba(0, 255, 255, 0.1); color: var(--color-accent); }
.stat-icon-success { background: var(--color-success-bg); color: var(--color-success); }

.stat-info {
  display: flex;
  flex-direction: column;
}

.stat-value {
  font-size: 1.8rem;
  font-weight: 700;
  color: var(--color-text);
  line-height: 1;
  margin-bottom: 4px;
}

.stat-label {
  font-size: 0.8rem;
  color: var(--color-text-muted);
  font-weight: 500;
}

/* ── Quick Actions ── */
.quick-actions {
  max-width: 1280px;
  margin: 48px auto 0;
  padding: 0 24px 60px;
}

.section-title {
  font-size: 1.4rem;
  font-weight: 700;
  color: var(--color-text);
  margin-bottom: 24px;
  letter-spacing: -0.01em;
}

.action-card {
  display: flex;
  flex-direction: column;
  gap: 12px;
  padding: 28px;
  background: var(--gradient-card);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  text-decoration: none;
  color: var(--color-text);
  transition: all var(--transition-base);
  position: relative;
}

.action-card:hover {
  border-color: var(--color-primary);
  transform: translateY(-4px);
  box-shadow: var(--shadow-glow);
}

.action-card:hover .action-arrow {
  transform: translateX(4px);
  opacity: 1;
}

.action-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(2, 77, 223, 0.15);
  color: var(--color-primary-light);
}

.action-icon-accent { background: rgba(0, 255, 255, 0.1); color: var(--color-accent); }
.action-icon-warning { background: var(--color-warning-bg); color: var(--color-warning); }

.action-card h3 {
  font-size: 1.05rem;
  font-weight: 600;
  color: var(--color-text);
}

.action-card p {
  font-size: 0.85rem;
  color: var(--color-text-muted);
  line-height: 1.5;
  flex: 1;
}

.action-arrow {
  font-size: 1.2rem;
  color: var(--color-primary-light);
  transition: all var(--transition-base);
  opacity: 0.5;
}

/* ── Responsive ── */
@media (max-width: 768px) {
  .hero {
    min-height: 340px;
  }

  .hero-title {
    font-size: 2rem;
  }

  .hero-subtitle {
    font-size: 0.95rem;
  }

  .stats-section {
    margin-top: -24px;
  }
}

@media (max-width: 640px) {
  .hero-title {
    font-size: 1.8rem;
  }

  .hero-actions {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
