<template>
  <login-template>
    <span slot="menuesquerdo">
      <img src="@/assets/landing.svg" alt="Landing" class="responsive-img" />
    </span>
    <span slot="principal">
      <h2>Cadastro</h2>
      <input type="text" placeholder="Nome" v-model="name" />
      <input type="email" placeholder="E-mail" v-model="email" />
      <input type="password" placeholder="Senha" v-model="password" />
      <input
        type="password"
        placeholder="Confirmar Senha"
        v-model="password_confirmation"
      />
      <button class="btn mr-4" @click="cadastrar()">Enviar</button>
      <router-link to="/login" class="btn orange">Já tenho conta</router-link>
    </span>
  </login-template>
</template>

<script>
import axios from 'axios'
import LoginTemplate from '../../templates/LoginTemplate'
export default {
  components: { LoginTemplate },
  data () {
    return {
      name: '',
      email: '',
      password: '',
      password_confirmation: ''
    }
  },
  methods: {
    cadastrar () {
      axios.post(`http://127.0.0.1:8000/api/cadastro`, {
        name: this.name,
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation,
      })
        .then(response => {
          if (response.data.token) {
            sessionStorage.setItem('usuario', JSON.stringify(response.data))
            this.$router.push('/')
          } else if (response.data.status === false) {
            alert('Erro no cadastro!');
          } else {
            let erros = '';
            for (let erro of Object.values(response.data)) {
              erros += erro + " ";
            }
            alert(erros);
          }
        })
        .catch(e => {
          alert(e);
        })
    }
  }
}
</script>

<style>
.mr-4 {
  margin-right: 4px;
}
</style>