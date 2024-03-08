<script setup>
import {Swiper, SwiperSlide} from 'swiper/vue';
import {Navigation } from "swiper/modules";
import { ref, onMounted  } from 'vue';
import axios from "axios";

import 'swiper/css';
import 'swiper/css/navigation';


const images = ref([])
const modules = [Navigation];
const config = useRuntimeConfig();

onMounted(async () => {
  try {
    const response = await axios.get(config.public.apiBaseUrl +'/api/gallery');
    images.value = response.data;
  } catch (error) {
    console.error('Error fetching gallery images:', error);
  }
});


</script>

<template>
  <div class="flex flex-col lg:flex-row items-center">
    <div class="w-full">
      <swiper
          :navigation="{
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev'
            }"
          :modules="modules"
          :freeMode="true"
          slidesPerView="1"
          :breakpoints="{
            640: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            1240: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }"
          class="mySwiper">
        <swiper-slide v-for="image in images">
          <div class="flex justify-between items-center bg-black bg-opacity-40 backdrop-blur-2xl">
            <div class="w-full h-[550px] flex items-center justify-center">
              <img class="h-full object-contain" alt="galléria" :src="`gallery/${image}`">
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

</style>
