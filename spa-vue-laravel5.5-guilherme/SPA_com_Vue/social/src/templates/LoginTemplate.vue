<template>
  <div>
    <header>
      <nav-bar cor="green darken-1" logo="Social">
        <li><router-link to="/">Home</router-link></li>
        <li><router-link to="/login">Entrar</router-link></li>
        <li><router-link to="/cadastro">Cadastre-se</router-link></li>
      </nav-bar>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <div class="col s8">
            <slot name="menuesquerdo"></slot>
          </div>
          <div class="col s4">
            <slot name="principal" />
          </div>
        </div>
      </div>
    </main>
    <Footer logo="Social" descricao="Descricao">
      <ul>
        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
      </ul>
    </Footer>
  </div>
</template>

<script>
import NavBar from "../components/layout/NavBar"
import Footer from "../components/layout/Footer"

export default {
  components: { NavBar, Footer }
}
</script>

<style>
</style>
