<template>
  <site-template>
    <span slot="menuesquerdo">
      <div class="card-panel grey lighten-5 z-depth-1">
        <div class="row valign-wrapper">
          <div class="col s4">
            <img
              :src="`http://localhost:8000/${usuario.image}`"
              alt="perfil"
              class="circle responsive-img"
            />
            <!-- notice the "circle" class -->
          </div>
          <div class="col s8">
            <span class="black-text">
              <h5>{{ usuario.name }}</h5>
            </span>
          </div>
        </div>
      </div>
    </span>
    <span slot="principal">
      <publicar-conteudo />
      <card-conteudo
        perfil="https://materializecss.com/images/yuna.jpg"
        nome="Maria Silva"
        data="13/01/18 13:30"
      >
        <card-detalhe
          img="https://materializecss.com/images/sample-1.jpg"
          titulo="Titulo"
          txt="Ola"
        />
      </card-conteudo>
    </span>
  </site-template>
</template>

<script>
import SiteTemplate from '../../templates/SiteTemplate'
import CardConteudo from '../../components/social/CardConteudo'
import CardDetalhe from '../../components/social/CardDetalhe'
import PublicarConteudo from '../../components/social/PublicarConteudo'

export default {
  components: { SiteTemplate, CardConteudo, CardDetalhe, PublicarConteudo },
  data() {
    return {
      usuario: { image: '' }
    }
  },
  created () {
    if (sessionStorage.getItem('usuario')) {
      this.usuario = JSON.parse(sessionStorage.getItem('usuario'))
    }
  }
}
</script>

<style>
</style>