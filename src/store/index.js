import { createStore } from 'vuex'

export default createStore({
  state: {
      base_url : "http://127.0.0.1:8000/api",
      base_url_heroku : 'https://laravel-portfolio-api.herokuapp.com/api'
  },
  getters: {
      getBaseUrl(state) {
        return state.base_url_heroku
      }
  },
  mutations: {
  },
  actions: {
  },
  modules: {
  }
})
