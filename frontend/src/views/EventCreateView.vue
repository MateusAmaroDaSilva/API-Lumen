<template>
  <div class="page-container" id="event-create-view">
    <div class="page-header">
      <router-link to="/events" class="back-link" id="btn-back-events">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m15 18-6-6 6-6"/>
        </svg>
        Voltar para eventos
      </router-link>
      <h1 class="page-title">Novo Evento</h1>
      <p class="page-subtitle">Preencha as informações para cadastrar um novo evento</p>
    </div>

    <div class="form-wrapper fade-in-up">
      <form @submit.prevent="handleSubmit" class="event-form card-glass" id="event-form">
        <!-- Nome -->
        <div class="form-group">
          <label for="input-name" class="form-label">Nome do evento *</label>
          <input
            id="input-name"
            v-model="form.name"
            type="text"
            class="form-input"
            :class="{ 'is-error': errors.name }"
            placeholder="Ex: Show do Rock in Rio"
            maxlength="255"
            @blur="validateField('name')"
          />
          <span v-if="errors.name" class="form-error">{{ errors.name }}</span>
        </div>

        <!-- Descrição -->
        <div class="form-group">
          <label for="input-description" class="form-label">Descrição *</label>
          <textarea
            id="input-description"
            v-model="form.description"
            class="form-textarea"
            :class="{ 'is-error': errors.description }"
            placeholder="Descreva os detalhes do evento..."
            rows="4"
            @blur="validateField('description')"
          ></textarea>
          <span v-if="errors.description" class="form-error">{{ errors.description }}</span>
        </div>

        <!-- Preço e Capacidade -->
        <div class="form-row">
          <div class="form-group">
            <label for="input-price" class="form-label">Preço (R$) *</label>
            <input
              id="input-price"
              v-model.number="form.price"
              type="number"
              class="form-input"
              :class="{ 'is-error': errors.price }"
              placeholder="0.00"
              min="0"
              step="0.01"
              @blur="validateField('price')"
            />
            <span v-if="errors.price" class="form-error">{{ errors.price }}</span>
          </div>

          <div class="form-group">
            <label for="input-capacity" class="form-label">Capacidade *</label>
            <input
              id="input-capacity"
              v-model.number="form.capacity"
              type="number"
              class="form-input"
              :class="{ 'is-error': errors.capacity }"
              placeholder="100"
              min="1"
              @blur="validateField('capacity')"
            />
            <span v-if="errors.capacity" class="form-error">{{ errors.capacity }}</span>
          </div>
        </div>

        <!-- Data do evento -->
        <div class="form-group">
          <label for="input-event-date" class="form-label">Data e hora do evento *</label>
          <input
            id="input-event-date"
            v-model="form.event_date"
            type="datetime-local"
            class="form-input"
            :class="{ 'is-error': errors.event_date }"
            :min="minDate"
            @blur="validateField('event_date')"
          />
          <span v-if="errors.event_date" class="form-error">{{ errors.event_date }}</span>
          <span v-else class="form-hint">O evento deve ser em uma data futura.</span>
        </div>

        <!-- Preview card -->
        <div v-if="isFormPartiallyFilled" class="preview-section" id="event-preview">
          <h3 class="preview-title">Pré-visualização</h3>
          <div class="preview-card">
            <div class="preview-gradient"></div>
            <div class="preview-body">
              <h4>{{ form.name || 'Nome do evento' }}</h4>
              <p>{{ form.description ? truncate(form.description, 100) : 'Descrição do evento...' }}</p>
              <div class="preview-meta">
                <span v-if="form.price">R$ {{ Number(form.price).toFixed(2).replace('.', ',') }}</span>
                <span v-if="form.capacity">{{ form.capacity }} vagas</span>
                <span v-if="form.event_date">{{ formatDate(form.event_date) }}</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="form-actions">
          <button
            type="submit"
            class="btn btn-primary btn-lg w-full"
            :disabled="submitting"
            id="btn-submit-event"
          >
            <div v-if="submitting" class="spinner" style="width: 18px; height: 18px; border-width: 2px;"></div>
            <svg v-else width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            {{ submitting ? 'Cadastrando...' : 'Cadastrar Evento' }}
          </button>
        </div>
      </form>
    </div>

    <Toast
      :show="toast.show"
      :message="toast.message"
      :title="toast.title"
      :type="toast.type"
      @update:show="toast.show = $event"
    />
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useRouter } from 'vue-router'
import { eventService } from '../services/eventService'
import Toast from '../components/Toast.vue'

const router = useRouter()

const form = ref({
  name: '',
  description: '',
  price: null,
  event_date: '',
  capacity: null,
})

const errors = ref({})
const submitting = ref(false)
const toast = ref({ show: false, message: '', title: '', type: 'success' })

const minDate = computed(() => {
  const now = new Date()
  now.setMinutes(now.getMinutes() - now.getTimezoneOffset())
  return now.toISOString().slice(0, 16)
})

const isFormPartiallyFilled = computed(() => {
  return form.value.name || form.value.description || form.value.price || form.value.capacity
})

function validateField(field) {
  const val = form.value[field]
  const errs = { ...errors.value }

  switch (field) {
    case 'name':
      errs.name = !val?.trim() ? 'O nome é obrigatório.' : ''
      break
    case 'description':
      errs.description = !val?.trim() ? 'A descrição é obrigatória.' : ''
      break
    case 'price':
      errs.price = val === null || val === '' || val < 0 ? 'Informe um preço válido.' : ''
      break
    case 'capacity':
      errs.capacity = !val || val < 1 ? 'A capacidade deve ser pelo menos 1.' : ''
      break
    case 'event_date':
      if (!val) {
        errs.event_date = 'A data é obrigatória.'
      } else if (new Date(val) <= new Date()) {
        errs.event_date = 'A data deve ser futura.'
      } else {
        errs.event_date = ''
      }
      break
  }

  errors.value = errs
  return !errs[field]
}

function validateAll() {
  const fields = ['name', 'description', 'price', 'capacity', 'event_date']
  return fields.every((f) => validateField(f))
}

async function handleSubmit() {
  if (!validateAll()) return

  submitting.value = true
  try {
    const payload = {
      name: form.value.name.trim(),
      description: form.value.description.trim(),
      price: form.value.price,
      event_date: form.value.event_date.replace('T', ' ') + ':00',
      capacity: form.value.capacity,
    }

    await eventService.createEvent(payload)

    toast.value = {
      show: true,
      title: 'Sucesso!',
      message: 'Evento cadastrado com sucesso.',
      type: 'success',
    }

    setTimeout(() => {
      router.push('/events')
    }, 1500)
  } catch (err) {
    toast.value = {
      show: true,
      title: 'Erro ao cadastrar',
      message: err.message || 'Erro ao cadastrar evento.',
      type: 'error',
    }
  } finally {
    submitting.value = false
  }
}

function truncate(text, max) {
  return text.length > max ? text.slice(0, max) + '…' : text
}

function formatDate(dateStr) {
  if (!dateStr) return ''
  const d = new Date(dateStr)
  return d.toLocaleDateString('pt-BR', {
    day: '2-digit',
    month: 'short',
    year: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
  })
}
</script>

<style scoped>
.form-wrapper {
  max-width: 680px;
  margin: 0 auto;
}

.event-form {
  padding: 36px;
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.back-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 0.85rem;
  color: var(--color-text-muted);
  text-decoration: none;
  margin-bottom: 16px;
  transition: color var(--transition-fast);
}

.back-link:hover {
  color: var(--color-accent);
}

/* Preview */
.preview-section {
  margin-top: 8px;
  margin-bottom: 20px;
}

.preview-title {
  font-size: 0.85rem;
  font-weight: 600;
  color: var(--color-text-muted);
  margin-bottom: 12px;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.preview-card {
  border-radius: var(--radius-md);
  overflow: hidden;
  border: 1px solid var(--color-border);
  background: var(--color-bg-elevated);
}

.preview-gradient {
  height: 80px;
  background: linear-gradient(135deg, #024DDF 0%, #0A3AA0 100%);
}

.preview-body {
  padding: 16px;
}

.preview-body h4 {
  font-size: 1rem;
  font-weight: 600;
  color: var(--color-text);
  margin-bottom: 4px;
}

.preview-body p {
  font-size: 0.825rem;
  color: var(--color-text-muted);
  margin-bottom: 12px;
  line-height: 1.4;
}

.preview-meta {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}

.preview-meta span {
  font-size: 0.75rem;
  color: var(--color-text-secondary);
  padding: 4px 10px;
  background: var(--color-surface);
  border-radius: var(--radius-sm);
}

.form-actions {
  margin-top: 8px;
}

.form-actions .btn:disabled {
  opacity: 0.6;
  cursor: not-allowed;
  transform: none;
}

@media (max-width: 640px) {
  .form-row {
    grid-template-columns: 1fr;
  }

  .event-form {
    padding: 24px;
  }
}
</style>
