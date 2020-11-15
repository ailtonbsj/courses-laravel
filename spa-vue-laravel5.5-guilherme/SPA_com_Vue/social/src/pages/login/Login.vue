<template>
  <login-template>
    <span slot="menuesquerdo">
      <img src="@/assets/landing.svg" alt="Landing" class="responsive-img" />
    </span>
    <span slot="principal">
      <h2>Login</h2>
      <input type="email" placeholder="E-mail" v-model="email" />
      <input type="password" placeholder="Senha" v-model="password" />
      <button class="btn mr-4" @click="login">Entrar</button>
      <router-link to="/cadastro" class="btn orange mr-4"
        >Cadastre-se</router-link
      >
    </span>
  </login-template>
</template>

<script>
import LoginTemplate from '../../templates/LoginTemplate'
import axios from 'axios'
export default {
  components: { LoginTemplate },
  data () {
    return {
      email: '',
      password: ''
    }
  },
  methods: {
    login () {
      axios.post(`http://127.0.0.1:8000/api/login`, {
        email: this.email,
        password: this.password
      })
        .then(response => {
          if(response.data.token) {
            sessionStorage.setItem('usuario', JSON.stringify(response.data))
            this.$router.push('/')
          } else if(response.data.status === false) {
            alert('Login inválido!');
          } else {
            let erros = '';
            for(let erro of Object.values(response.data)) {
              erros += erro + " ";
            }
            alert(erros);
          }
        })
        .catch(e => {
          alert(e);
        })
    }
  },
}
</script>

<style>
.mr-4 {
  margin-right: 4px;
}
</style>