<template>
  <div class="page-container" id="events-list-view">
    <div class="list-head">
      <div>
        <span class="eyebrow">Programação</span>
        <h1 class="page-title">Eventos</h1>
        <p class="page-subtitle">
          {{ events.length ? `${events.length} evento(s) em cartaz na plataforma.` : 'Todos os eventos cadastrados na bilheteria.' }}
        </p>
      </div>
      <router-link to="/events/new" class="btn btn-primary" id="btn-create-event">
        Novo evento
      </router-link>
    </div>

    <!-- Busca -->
    <div class="search-bar fade-in-up" id="search-bar">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>
      </svg>
      <input
        type="text"
        v-model="searchQuery"
        placeholder="Buscar evento pelo nome ou descrição…"
        class="search-input"
        id="search-input"
      />
      <kbd v-if="!searchQuery" class="search-kbd">Buscar</kbd>
    </div>

    <!-- Loading -->
    <div v-if="loading" class="loading-overlay" id="loading-events">
      <div class="spinner"></div>
      <span>Carregando eventos…</span>
    </div>

    <!-- Error -->
    <div v-else-if="error" class="empty-state" id="error-events">
      <div class="empty-state-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
      </div>
      <h3 class="empty-state-title">Erro ao carregar eventos</h3>
      <p class="empty-state-text">{{ error }}</p>
      <button class="btn btn-primary" @click="loadEvents" id="btn-retry">Tentar novamente</button>
    </div>

    <!-- Empty -->
    <div v-else-if="filteredEvents.length === 0 && !searchQuery" class="empty-state" id="empty-events">
      <div class="empty-state-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
      </div>
      <h3 class="empty-state-title">Nenhum evento em cartaz</h3>
      <p class="empty-state-text">Comece criando o primeiro evento da bilheteria.</p>
      <router-link to="/events/new" class="btn btn-primary" id="btn-empty-create">Criar evento</router-link>
    </div>

    <!-- Sem resultados -->
    <div v-else-if="filteredEvents.length === 0 && searchQuery" class="empty-state" id="no-results">
      <div class="empty-state-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
      </div>
      <h3 class="empty-state-title">Nada encontrado</h3>
      <p class="empty-state-text">Nenhum evento corresponde a “{{ searchQuery }}”.</p>
    </div>

    <!-- Grid -->
    <div v-else class="events-grid grid grid-3 stagger-list" id="events-grid">
      <EventCard v-for="event in filteredEvents" :key="event.id" :event="event" />
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'
import { eventService } from '../services/eventService'
import EventCard from '../components/EventCard.vue'

const events = ref([])
const loading = ref(true)
const error = ref(null)
const searchQuery = ref('')

const filteredEvents = computed(() => {
  if (!searchQuery.value) return events.value
  const q = searchQuery.value.toLowerCase()
  return events.value.filter((e) =>
    e.name.toLowerCase().includes(q) ||
    e.description?.toLowerCase().includes(q)
  )
})

async function loadEvents() {
  loading.value = true
  error.value = null
  try {
    events.value = await eventService.getEvents()
  } catch (err) {
    error.value = err.message || 'Erro ao carregar eventos.'
  } finally {
    loading.value = false
  }
}

onMounted(loadEvents)
</script>

<style scoped>
.list-head {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  flex-wrap: wrap;
  gap: 18px;
  margin-bottom: 28px;
  animation: fadeInUp 0.5s ease both;
}
.list-head .page-title { margin-top: 10px; margin-bottom: 8px; }

.search-bar {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 14px 18px;
  background: var(--color-surface);
  border: 1.5px solid var(--color-ink);
  border-radius: var(--radius-md);
  margin-bottom: 32px;
  transition: box-shadow var(--transition-fast);
}
.search-bar:focus-within { box-shadow: var(--shadow-press); }
.search-bar svg { color: var(--color-text-muted); flex-shrink: 0; }
.search-bar:focus-within svg { color: var(--color-primary); }

.search-input {
  flex: 1;
  background: none;
  border: none;
  outline: none;
  color: var(--color-text);
  font-size: 0.95rem;
  font-family: inherit;
}
.search-input::placeholder { color: var(--color-text-muted); }

.search-kbd {
  font-family: var(--font-mono);
  font-size: 0.62rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-text-muted);
  padding: 3px 8px;
  border: 1.5px solid var(--color-border-light);
  border-radius: var(--radius-sm);
}

.events-grid { padding-bottom: 40px; }
</style>
