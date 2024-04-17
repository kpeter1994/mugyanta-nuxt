<script setup lang="ts">
import InputComponent from "~/components/InputComponent.vue";
import {ref} from 'vue';


const form = ref({
  name: '',
  phone: '',
  email: '',
  size: '',
  image: '',
  surface: '',
  city: '',
  message: '',
});

const config = useRuntimeConfig();
const loading = ref(false);
const errors = ref({});
const message = ref('');

const toast = useToast();


async function sendRequest() {

  loading.value = true;
  errors.value = {};

  await useApiFetch('/sanctum/csrf-cookie')

  const { pending, data, error} = await useApiFetch('/api/send-mail', {
    method: 'POST',
    body: form.value
  });

  watch(pending, (newPending) => {
    if (!newPending) {
      loading.value = false;
    }
  });

  if (error.value) {
    errors.value = error.value.data?.errors ?? {};
    console.log('Hiba történt:', errors.value);
    toast.add({severity:'error', summary: 'Hiba', detail: 'Hiba történt az ajánlatkérés küldése közben', life: 10000});
  } else {
    toast.add({severity:'success', summary: 'Siker', detail: 'Az e-mail sikeresen elküldve! Hamarosan elküldöm önnek az ajánlatomat', life: 10000});
  }

  loading.value = false;

  return { data, error};
}


const onAdvancedUpload = async (event: any) => {

  await useApiFetch('/sanctum/csrf-cookie')

  const formData = new FormData();

  if (event.files.length > 0) {
    formData.append('image', event.files[0]);
  }

  const uploadResponse  = await useApiFetch('/api/upload', {
    method: 'POST',
    body: formData,
    headers: {
      'Accept': 'application/json',
    },
  })

  if (uploadResponse.data.value && (uploadResponse.data.value as any).path) {
    form.value.image = (uploadResponse.data.value as any).path;
  } else {
    console.error('Nem sikerült kinyerni a kép elérési útját a válaszból.');
  }

}


</script>

<template>
  <section id="kapcsolat" class="pb-24 px-4">
    <Toast/>

    <div class="max-w-7xl mx-auto">
      <h2 class="font-serif text-4xl mb-3 text-center" data-aos="fade-up">KÉRJ AJÁNLATOT</h2>
      <p class="max-w-md text-center mx-auto mb-12" data-aos="fade-up">Kérjen ajánlatot, vagy vegye fel velünk a
        kapcsolatot a lenit elérhetőségek valamelyikén! ( <i>Ha ajánlatot kér a *-al jelőlt mezők kitöltése kötelező</i>
        )</p>
      <div class="flex flex-col lg:flex-row">
        <div class="lg:w-4/12 mb-6">
          <h2 class="text-lg mb-3">Elérhetőségek:</h2>
          <ul>
            <li class="text-bronze-light hover:text-white">
              <font-awesome-icon class="mr-1.5 opacity-70" :icon="['fas', 'envelope']"/>
              <a href="">mugyantapadlo2020@gmail.com</a></li>
            <li class="text-bronze-light hover:text-white">
              <font-awesome-icon class="mr-1.5 opacity-70" :icon="['fas', 'phone']"/>
              <a href="">+36 (20) 36 09 474</a></li>
          </ul>
        </div>

        <div class="lg:w-8/12 flex">
          <div v-if="loading" class="w-full py-12 justify-center items-center" >
            <ProgressSpinner class="block" />
          </div>

          <form v-if="!loading" @submit.prevent="sendRequest" class="flex flex-col lg:grid grid-cols-3 grid-rows-4 gap-3 w-full">

            <InputComponent type="text" :error="errors.name" name="name" v-model="form.name" class="row-start-1 row-end-2" label="Név"/>
            <InputComponent type="text" :error="errors.phone" name="phone" v-model="form.phone" class="row-start-2 row-end-3" label="Telefonszám"/>
            <InputComponent type="text" :error="errors.size" name="size" v-model="form.size" class="row-start-3 row-end-4" label="Mekkora(nm)"/>


            <div class="hidden lg:block col-start-1 col-end-3 row-start-4 row-end-5" >
              <ImageUploadComponent v-model="form.image"></ImageUploadComponent>
<!--              <FileUpload class="w-full text-gray-100 bg-gradient-to-t from-gray-800 to-gray-500"  mode="basic" name="image[]"  choose-label="Kép feltöltése a felületről" accept="image/*" :maxFileSize="10000000" customUpload @uploader="onAdvancedUpload" />-->
            </div>


            <InputComponent type="text" :error="errors.email" name="email" v-model="form.email" class="col-start-2 row-start-1 row-end-2" label="Email"/>
            <InputComponent type="text" :error="errors.surface" name="surface" v-model="form.surface" class="col-start-2 row-start-2 row-end-3" label="Milyen felület?"/>
            <InputComponent type="text" :error="errors.city" name="city" v-model="form.city" class="col-start-2 row-start-3 row-end-4" label="Település"/>
            <div class="col-start-3 col-end-4 row-start-1 row-end-5 relative">
              <textarea
                  placeholder=" "
                  class="w-full h-[200px] block rounded-lg px-2.5 pb-2.5 pt-5 text-sm text-gray-100 bg-gradient-to-t from-gray-800 to-gray-500 border-0 border-b-2 border-transparent appearance-none focus:outline-none focus:ring-0 focus:border-bronze peer"
                  v-model="form.message"/>
              <label for="floating_filled"
                     class="pointer-events-none absolute text-base text-gray-100 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Egyéb
                megjegyzés</label>
            </div>
            <div class="lg:hidden">
              <ImageUploadComponent v-model="form.image"></ImageUploadComponent>
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