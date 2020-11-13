<template>
  <site-template>
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
  components: { SiteTemplate, CardConteudo, CardDetalhe, PublicarConteudo }
}
</script>

<style>
</style>