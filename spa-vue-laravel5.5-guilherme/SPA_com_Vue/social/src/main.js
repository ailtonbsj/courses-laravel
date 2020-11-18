import Vue from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios'

// Import Materialize from node_modules
import 'materialize-css/dist/css/materialize.min.css'
import 'material-design-icons/iconfont/material-icons.css'
import Materialize from 'materialize-css'
Materialize.AutoInit()

Vue.config.productionTip = false
Vue.prototype.$http = axios.create({
  baseURL: 'https://localhost:8000/api'
})

let vue = new Vue({
  router,
  render: h => h(App)
}).$mount('#app')

// Reactive sessionStorage
window.onstorage = function(e) {
  if(!('sessionStore.usuario' in e)) vue.$router.push('/login')
}