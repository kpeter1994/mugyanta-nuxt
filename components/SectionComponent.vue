<script setup lang="ts">
const props = defineProps<{
  title: string
}>()
</script>

<template>
<section class="py-6 lg:py-28">
  <div class="max-w-7xl mx-auto px-4">
    <span class="text-4xl 2xl:text-[128px] font-bold opacity-10 mb-6 lg:mb-36 block">{{props.title}}</span>
    <slot></slot>
  </div>
</section>
</template>

<style scoped>

</style>