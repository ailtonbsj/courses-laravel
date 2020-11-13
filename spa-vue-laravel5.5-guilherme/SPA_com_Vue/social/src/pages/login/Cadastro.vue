<template>
  <login-template>
    <span slot="menuesquerdo">
      <img src="@/assets/landing.svg" alt="Landing" class="responsive-img" />
    </span>
    <span slot="principal">
      <h2>Cadastro</h2>
        <input type="text" placeholder="Nome" />
        <input type="text" placeholder="E-mail" />
        <input type="password" placeholder="Senha" />
        <input type="password" placeholder="Confirmar Senha" />
        <button class="btn mr-4">Enviar</button>
        <router-link to="/login" class="btn orange">Já tenho conta</router-link>
    </span>
  </login-template>
</template>

<script>
import LoginTemplate from '../../templates/LoginTemplate'
export default {
  components: { LoginTemplate },
  data() {
    return {
    }
  }
}
</script>

<style>
.mr-4 {
  margin-right: 4px;
}
</style>