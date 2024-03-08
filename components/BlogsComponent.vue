<script setup>
import {Swiper, SwiperSlide} from 'swiper/vue';
import {Navigation, Pagination} from "swiper/modules";
import { ref, onMounted  } from 'vue';
import axios from "axios";

import 'swiper/css';
import 'swiper/css/navigation';


const images = ref([])
const modules = [ Navigation];

onMounted(async () => {
  try {
    const response = await axios.get('http://127.0.0.1:8000/gallery');
    images.value = response.data;
  } catch (error) {
    console.error('Error fetching gallery images:', error);
  }
});
console.log(images.value)

</script>

<template>
  <div class="flex flex-col lg:flex-row items-center">
    <div class="w-full">
      <swiper
          :navigation="{
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev'
            }"
          :pagination="{
              clickable: true,
          }"
          :modules="modules"
          slidesPerView="1"
          class="mySwiper">
        <swiper-slide v-for="image in images">
          <div class="max-w-4xl relative h-full p-12 mx-auto shadow-2xl flex justify-between items-center bg-white rounded-2xl bg-opacity-10 backdrop-blur-2xl">

            <div class="aspect-[1/1] h-[80%] bg-red-500 rounded-2xl overflow-hidden absolute  -left-[15%] shadow-2xl">
              <img class="h-full w-full object-cover " alt="galléria" :src="`gallery/${image}`">
            </div>
            
            <div class="ml-[20%]">
              <time>2024.02.26</time>
              <a class="text-2xl font-bold mb-3 block" href="">Lorem ipsum dolor sit amet.</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur distinctio dolores libero minus
              molestias odit, quas repudiandae voluptatem! Accusamus alias aliquid autem culpa debitis deleniti deserunt
              doloribus eos ipsum laboriosam magnam maiores optio perferendis praesentium quae quaerat, quasi quidem
              quis ratione reiciendis sapiente sed sequi suscipit tempore vel voluptatem voluptates?</p>
              <div class="mt-6">
                <NuxtLink to="/blog/mugyanta-arak" class="text-bronze font-semibold text-lg px-6 py-3 border border-bronze hover:bg-bronze hover:text-white">Elolvasom</NuxtLink>
              </div>
            </div>



          </div>
        </swiper-slide>

      </swiper>
    </div>
  </div>
  <div class="p-6 flex gap-3 relative z-10  justify-center lg:justify-end order-last lg:order-first">
    <button aria-label="Prev" class="swiper-prev bg-black rounded-full w-12 h-12 transition-all btn-shadow"><font-awesome-icon class="text-white" :icon="['fas', 'chevron-left']" /></button>
    <button aria-label="Next" class="swiper-next bg-black rounded-full w-12 h-12 transition-all btn-shadow"><font-awesome-icon class="text-white" :icon="['fas', 'chevron-right']" /></button>
  </div>

</template>

<style scoped>
.mySwiper {
  height: 400px; /* Példa magasság, állítsd be a szükséges értékre */
}


</style>
