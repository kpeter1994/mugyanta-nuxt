<script setup lang="ts">

</script>

<template>
  <header class="w-full text-white flex items-center py-1.5 px-6  justify-between ">

    <NuxtLink to="/" class="flex gap-1.5">
      <img src="../assets/image/logo.svg" class="h-10" alt="">
      <span class="font-sans font-extrabold uppercase">Műgyanta <br> Padló</span>
    </NuxtLink>


    <nav class="px-3 hidden lg:flex relative">
      <ul class="inline-flex">
        <li class="py-2 px-3 hover:text-bronze-light"><NuxtLink to="/">Főoldal</NuxtLink></li>
        <li class="py-2 px-3 hover:text-bronze-light"><NuxtLink to="/mugyantapadlo-elonyei">Mügyanta padló előnyei</NuxtLink></li>
        <li class="py-2 px-3 hover:text-bronze-light"><NuxtLink to="/mugyantapadlo-arak">Árkalkulátor</NuxtLink></li>
        <li class="py-2 px-3 hover:text-bronze-light"><NuxtLink to="#kapcsolat">Kapcsolat</NuxtLink></li>
      </ul>
    </nav>

    <SidebarComponent class="lg:hidden" >
      <ul class="">
        <li class="py-2 px-3 hover:text-bronze-light"><NuxtLink to="/">Főoldal</NuxtLink></li>
        <li class="py-2 px-3 hover:text-bronze-light"><NuxtLink to="/mugyantapadlo-elonyei">Mügyanta padló előnyei</NuxtLink></li>
        <li class="py-2 px-3 hover:text-bronze-light"><NuxtLink to="/mugyantapadlo-arak">Árkalkulátor</NuxtLink></li>
        <li class="py-2 px-3 hover:text-bronze-light"><NuxtLink to="#kapcsolat">Kapcsolat</NuxtLink></li>
      </ul>

    </SidebarComponent>
  </header>

</template>

<style scoped>

</style>