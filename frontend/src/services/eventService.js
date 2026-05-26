import api from './api'

export const eventService = {
  async getEvents() {
    const { data } = await api.get('/events')
    return data.data
  },

  async getEvent(id) {
    const { data } = await api.get(`/events/${id}`)
    return data.data
  },

  async createEvent(payload) {
    const { data } = await api.post('/events', payload)
    return data
  },
}
