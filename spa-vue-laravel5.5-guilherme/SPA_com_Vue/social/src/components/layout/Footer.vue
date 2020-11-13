<template>
  <footer class="page-footer  green darken-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">{{ logo }}</h5>
          <p class="grey-text text-lighten-4">
            {{ descricao }}
          </p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
            <slot></slot>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2020 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  props: ['logo', 'descricao']
}
</script>

<style>
</style>