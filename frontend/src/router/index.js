import { createRouter, createWebHistory } from 'vue-router'

import DashboardView from '../views/DashboardView.vue'
import EventsListView from '../views/EventsListView.vue'
import EventCreateView from '../views/EventCreateView.vue'
import EventDetailView from '../views/EventDetailView.vue'
import TicketsListView from '../views/TicketsListView.vue'

const routes = [
  {
    path: '/',
    name: 'dashboard',
    component: DashboardView,
    meta: { title: 'Dashboard — Sistema de Ingressos' },
  },
  {
    path: '/events',
    name: 'events',
    component: EventsListView,
    meta: { title: 'Eventos — Sistema de Ingressos' },
  },
  {
    path: '/events/new',
    name: 'event-create',
    component: EventCreateView,
    meta: { title: 'Novo Evento — Sistema de Ingressos' },
  },
  {
    path: '/events/:id',
    name: 'event-detail',
    component: EventDetailView,
    meta: { title: 'Detalhe do Evento — Sistema de Ingressos' },
  },
  {
    path: '/tickets',
    name: 'tickets',
    component: TicketsListView,
    meta: { title: 'Ingressos — Sistema de Ingressos' },
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

router.beforeEach((to) => {
  document.title = to.meta.title || 'Sistema de Ingressos'
})

export default router
