<script setup lang="ts">
import InputComponent from "~/components/InputComponent.vue";
import axios from "axios";

const form = ref({
  name: '',
  phone: '',
  email: '',
  size: '',
  surface: '',
  city: '',
  message: '',
});

const config = useRuntimeConfig();

axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;


const data = ref({});

async function sendRequest() {

  await axios.get('http://localhost:8000/sanctum/csrf-cookie');
  await axios.post('http://localhost:8000/api/send-mail', form.value)
      .then(response => {
        data.value = response.data;
        console.log(data.value);
      }).catch(error => {
        console.log(error.response.data);
      })

}


</script>

<template>
  <section id="kapcsolat" class="pb-24">
    <div class="max-w-7xl mx-auto">
      <h2 class="font-serif text-4xl mb-3 text-center" data-aos="fade-up">KÉRJ AJÁNLATOT</h2>
      <p class="max-w-md text-center mx-auto mb-12" data-aos="fade-up">Kérjen ajánlatot, vagy vegye fel velünk a
        kapcsolatot a lenit elérhetőségek valamelyikén! ( <i>Ha ajánlatot kér a *-al jelőlt mezők kitöltése kötelező</i>
        )</p>
      <div class="flex flex-col lg:flex-row">
        <div class="lg:w-4/12 mb-6">
          <h2 class="text-lg mb-3">Elérhetőségek:</h2>
          <ul>
            <li class="text-bronze hover:text-white">
              <font-awesome-icon class="mr-1.5 opacity-70" :icon="['fas', 'envelope']"/>
              <a href="">mugyantapadlo2020@gmail.com</a></li>
            <li class="text-bronze hover:text-white">
              <font-awesome-icon class="mr-1.5 opacity-70" :icon="['fas', 'phone']"/>
              <a href="">+36 (20) 36 09 474</a></li>
          </ul>
        </div>

        <div class="lg:w-8/12 flex">
          <form @submit.prevent="sendRequest" class="flex flex-col lg:grid grid-cols-3 grid-rows-4 gap-3 w-full">
            <InputComponent name="name" v-model="form.name" class="row-start-1 row-end-2" label="Név"/>
            <InputComponent name="phone" v-model="form.phone" class="row-start-2 row-end-3" label="Telefonszám"/>
            <InputComponent name="size" v-model="form.size" class="row-start-3 row-end-4" label="Mekkora(nm)"/>
            <InputComponent name="iamge" class="col-start-1 col-end-3 row-start-4 row-end-5"
                            label="Tötlsön fel egy képet a felületről"/>
            <InputComponent name="email" v-model="form.email" class="col-start-2 row-start-1 row-end-2" label="Email"/>
            <InputComponent name="surface" v-model="form.surface" class="col-start-2 row-start-2 row-end-3" label="Milyen felület?"/>
            <InputComponent name="city" v-model="form.city" class="col-start-2 row-start-3 row-end-4" label="Település"/>
            <div class="col-start-3 col-end-4 row-start-1 row-end-5 relative">
              <textarea
                  class="w-full h-full block rounded-lg px-2.5 pb-2.5 pt-5 text-sm text-gray-100 bg-gradient-to-t from-gray-800 to-gray-500 border-0 border-b-2 border-transparent appearance-none focus:outline-none focus:ring-0 focus:border-bronze peer"
                  v-model="form.message"/>
              <label for="floating_filled"
                     class="pointer-events-none absolute text-base text-gray-100 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Egyéb
                megjegyzés</label>
            </div>
            <div class="w-full col-start-1 col-end-4 flex flex-col lg:flex-row justify-between">
              <div class="flex items-center gap-1.5 mb-6">
                <input required type="checkbox" id="gdpr" class="mr-1.5">
                <label class="text-sm" for="gdpr">Elolvastam és elfogadom az
                  <NuxtLink to="adatkezelesi" class="text-bronze underline">Adatvédelmi tájékoztatót. *</NuxtLink>
                </label>
              </div>
              <ButtonComponent type="submit">Küldés
                <font-awesome-icon :icon="['fas', 'arrow-right']"/>
              </ButtonComponent>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

</template>

<style scoped>

</style>