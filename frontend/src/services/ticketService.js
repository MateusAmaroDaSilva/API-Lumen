import api from './api'

export const ticketService = {
  async buyTicket(payload) {
    const { data } = await api.post('/tickets/buy', payload)
    return data
  },

  async getTickets() {
    const { data } = await api.get('/tickets')
    return data.data
  },
}
