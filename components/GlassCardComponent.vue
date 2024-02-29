<script setup lang="ts">

</script>

<template>
<div class="p-8 glass-card lg:rounded">
  <slot></slot>
</div>
</template>

<style scoped>
.glass-card {
  display: flex;
  flex-direction: column;
  position: relative;
  z-index: 2;
  background: linear-gradient(131.68deg, rgba(255, 255, 255, 0.3) 13.37%, rgba(0, 0, 0, 0) 97.13%);
  box-shadow: 0 4px 24px -1px rgba(0, 0, 0, 0.25);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(20px);
}
</style>