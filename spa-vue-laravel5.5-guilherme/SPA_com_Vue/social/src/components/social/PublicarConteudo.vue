<template>
  <div class="row">
    <div class="input-field col s12">
      <textarea v-model="conteudo" id="textarea1" class="materialize-textarea"></textarea>
      <label for="textarea1">O que está acontecendo?</label>
    </div>
    <p>
      <button :disabled="conteudo ? false : true" class="btn waves-effect waves-light col s2 offset-s10">
        Publicar
      </button>
    </p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      conteudo: ''
    }
  }
}
</script>

<style>
</style>