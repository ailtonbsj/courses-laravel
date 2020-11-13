<template>
  <login-template>
    <span slot="menuesquerdo">
      <img src="@/assets/landing.svg" alt="Landing" class="responsive-img" />
    </span>
    <span slot="principal">
      <h2>Login</h2>
      <input type="text" placeholder="E-mail" />
      <input type="password" placeholder="Senha" />
      <button class="btn mr-4">Entrar</button>
      <router-link to="/cadastro" class="btn orange mr-4">Cadastre-se</router-link>
    </span>
  </login-template>
</template>

<script>
import LoginTemplate from '../../templates/LoginTemplate'
export default {
  components: { LoginTemplate },
  data () {
    return {
      cadastro: false
    }
  }
}
</script>

<style>
.mr-4 {
  margin-right: 4px;
}
</style>