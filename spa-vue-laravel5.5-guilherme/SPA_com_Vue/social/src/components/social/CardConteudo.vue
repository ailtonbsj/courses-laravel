<template>
  <div class="row">
    <div class="card darken-1">
      <div class="card-content">
        <div class="row valign-wrapper">
          <div class="col s1">
            <img :src="perfil" :alt="nome" class="circle responsive-img" />
            <!-- notice the "circle" class -->
          </div>
          <div class="col s11">
            <span class="black-text">
              <strong>{{ nome }}</strong> - <small>{{ data }}</small>
            </span>
          </div>
        </div>

        <slot />
      </div>
      <div class="card-action">
        <p>
          <i class="material-icons">favorite_borders</i>
          <i class="material-icons">insert_comment</i>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['perfil', 'nome', 'data']
}
</script>

<style>
</style>