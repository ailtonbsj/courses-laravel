<template>
  <div>
    <header>
      <nav-bar cor="green darken-1" logo="Social">
        <li>
          <router-link to="/">{{ usuario.name }}</router-link>
        </li>
        <li><a @click="logout()">Sair</a></li>
        <li><router-link to="/cadastro">Cadastre-se</router-link></li>
      </nav-bar>
    </header>
    <main>
      <div class="container valign-wrapper">
        <div class="row">
          <div class="col s4">
            <Card>
              <slot name="menuesquerdo" />
            </Card>
          </div>
          <div class="col s8">
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
import Card from "../components/layout/Card"

export default {
  components: { NavBar, Footer, Card },
  data () {
    return {
      usuario: {
        name: ''
      }
    }
  },
  methods: {
    logout () {
      sessionStorage.clear()
      this.usuario = { name: '' }
    }
  },
  created () {
    if (sessionStorage.getItem('usuario')) {
      this.usuario = JSON.parse(sessionStorage.getItem('usuario'))
    } else this.$router.push('/login')

  },
  watch: {
    usuario (val) {
      if (!val.name) this.$router.push('/login')
    }
  },
}
</script>

<style>
</style>
