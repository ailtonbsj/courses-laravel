import Vue from 'vue'
import App from './App.vue'
import router from './router'

// Import Materialize from node_modules
import 'materialize-css/dist/css/materialize.min.css'
import 'material-design-icons/iconfont/material-icons.css'
import Materialize from 'materialize-css'
Materialize.AutoInit()

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')