<template>
  <div class="page-container" id="events-list-view">
    <div class="page-header flex justify-between items-center" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
      <div>
        <h1 class="page-title">Eventos</h1>
        <p class="page-subtitle">Todos os eventos cadastrados na plataforma</p>
      </div>
      <router-link to="/events/new" class="btn btn-primary" id="btn-create-event">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/>
        </svg>
        Novo Evento
      </router-link>
    </div>

    <!-- Search bar -->
    <div class="search-bar fade-in-up" id="search-bar">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>
      </svg>
      <input
        type="text"
        v-model="searchQuery"
        placeholder="Buscar eventos pelo nome..."
        class="search-input"
        id="search-input"
      />
    </div>

    <!-- Loading -->
    <div v-if="loading" class="loading-overlay" id="loading-events">
      <div class="spinner"></div>
      <span>Carregando eventos...</span>
    </div>

    <!-- Error -->
    <div v-else-if="error" class="empty-state" id="error-events">
      <div class="empty-state-icon">⚠️</div>
      <h3 class="empty-state-title">Erro ao carregar eventos</h3>
      <p class="empty-state-text">{{ error }}</p>
      <button class="btn btn-primary" @click="loadEvents" id="btn-retry">Tentar novamente</button>
    </div>

    <!-- Empty -->
    <div v-else-if="filteredEvents.length === 0 && !searchQuery" class="empty-state" id="empty-events">
      <div class="empty-state-icon">📅</div>
      <h3 class="empty-state-title">Nenhum evento cadastrado</h3>
      <p class="empty-state-text">Comece criando seu primeiro evento na plataforma.</p>
      <router-link to="/events/new" class="btn btn-primary" id="btn-empty-create">Criar Evento</router-link>
    </div>

    <!-- No results -->
    <div v-else-if="filteredEvents.length === 0 && searchQuery" class="empty-state" id="no-results">
      <div class="empty-state-icon">🔍</div>
      <h3 class="empty-state-title">Nenhum resultado encontrado</h3>
      <p class="empty-state-text">Nenhum evento encontrado para "{{ searchQuery }}"</p>
    </div>

    <!-- Events Grid -->
    <div v-else class="events-grid grid grid-3 stagger-list" id="events-grid">
      <EventCard
        v-for="event in filteredEvents"
        :key="event.id"
        :event="event"
      />
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
.search-bar {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 14px 20px;
  background: var(--color-surface);
  border: 1px solid var(--color-border);
  border-radius: var(--radius-lg);
  margin-bottom: 28px;
  transition: border-color var(--transition-fast);
}

.search-bar:focus-within {
  border-color: var(--color-primary);
  box-shadow: 0 0 0 3px rgba(2, 77, 223, 0.15);
}

.search-bar svg {
  color: var(--color-text-muted);
  flex-shrink: 0;
}

.search-input {
  flex: 1;
  background: none;
  border: none;
  outline: none;
  color: var(--color-text);
  font-size: 0.95rem;
  font-family: inherit;
}

.search-input::placeholder {
  color: var(--color-text-muted);
}

.events-grid {
  padding-bottom: 40px;
}
</style>
