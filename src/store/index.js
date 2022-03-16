import { createStore } from 'vuex'

export default createStore({
  state: {
      base_url : "http://127.0.0.1:8000/api"
  },
  getters: {
      getBaseUrl(state) {
        return state.base_url
      }
  },
  mutations: {
  },
  actions: {
  },
  modules: {
  }
})
