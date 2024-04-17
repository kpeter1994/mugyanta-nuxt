<script lang="ts" setup>
import Sidebar from 'primevue/sidebar';

const visibleRight = ref(false);
</script>

<template>
  <div>

    <div class="flex gap-2 justify-content-center">

      <Button icon="pi pi-arrow-left" @click="visibleRight = true" >
        <font-awesome-icon :icon="['fas', 'bars']" />
      </Button>

    </div>


    <Sidebar v-model:visible="visibleRight"  class="bg-gray-800 text-white" position="right">
      <template #header>
        <NuxtLink to="/" class="flex gap-1.5">
          <img src="../assets/image/logo.svg" class="h-8" alt="">
          <span class="font-sans font-extrabold uppercase text-sm">Műgyanta <br> Padló</span>
        </NuxtLink>
      </template>
      <slot></slot>
    </Sidebar>


  </div>
</template>

<style scoped></style>
