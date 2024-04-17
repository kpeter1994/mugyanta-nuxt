<script setup lang="ts">

const props = defineProps({
  title: String,
  image: String,
  description: String,
  date: String,
  link: String
});

const convertDate = (date: string) => {
  return new Date(date).toLocaleDateString('hu-HU', {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  });
}

</script>

<template>
<div>
  <GlassCardComponent class="max-w-sm">
    <div class="aspect-video overflow-hidden bg-red-500 rounded">
      <img loading="lazy" class="w-full h-full object-cover" :src="props.image" :alt="props.title">
    </div>
    <div class="flex flex-col gap-1.5">
      <NuxtLink :to="props.link" class="font-serif text-2xl text-bronze-light mt-2 hover:text-bronze-lighter transition-all hover:underline">{{props.title}}</NuxtLink>
      <p class="text-sm line-clamp-3">{{props.description}}</p>
      <time :datetime="props.date" class="text-xs">{{convertDate(props.date)}}</time>

      <div class="flex flex-col">
      <div class="flex items-center gap-3">
        <img loading="lazy" src="../assets/image/sztajkosz-petrosz-profil.webp" alt="Sztajkosz Petrosz kivitelező" title="Sztajkosz Petrosz kivitelező" class="w-12 h-12 rounded-full"/>
        <div class="flex flex-col gap-1">
          <span class="font-bold">Sztajkosz Petrosz</span>
          <span class="opacity-60">kivitelező</span>
        </div>

      </div>

    </div>
    </div>

  </GlassCardComponent>
</div>
</template>

<style scoped>

</style>