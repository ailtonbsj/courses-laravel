<template>
  <span>
    <div v-if="img" class="card-image">
      <img :src="img" alt="sample" />
      <span class="card-title">{{ titulo }}</span>
    </div>

    <div v-if="txt" class="card-content">
      <p>
        {{ txt }}
      </p>
    </div>
  </span>
</template>

<script>
export default {
  props: ['img', 'titulo', 'txt']
}
</script>

<style>
</style>