<script setup lang="ts">

const file = ref<File | null>(null);
const imageEmpty = ref(true);
const toast = useToast();
const emits = defineEmits(['update:modelValue'])




async function uploadImage() {
  if (!file.value) return

  await useApiFetch('/sanctum/csrf-cookie');

  const formData = new FormData();
  formData.append('image', file.value as File);

  await useApiFetch('/api/upload', {
    method: 'POST',
    body: formData,
    headers: {
      'Accept': 'application/json',
    }
  }).then(
    (response) => {
      if (response.data.value && (response.data.value as any).path) {
        emits('update:modelValue', (response.data.value as any).path);
        toast.add({severity:'success', summary: 'Siker', detail: 'A képet sikerült csatolni az ürlaphoz', life: 10000});
        imageEmpty.value = true;
        file.value = null;
      }
    }
  )



}

function onFileChange(event: Event) {
  const input = event.target as HTMLInputElement;
  if (input.files?.length) {
    file.value = input.files[0];
    imageEmpty.value = false;
    uploadImage()
  }
}
</script>

<template>
  <div class="flex flex-col">

    <label for="">Csatolj képet a felületről</label>

    <div class="flex items-center">
      <input name="image" type="file" @change="onFileChange">
<!--      <Button v-if="!imageEmpty" @click="uploadImage" class="bg-gray-600 px-2 py-1 text-sm" label="Csatol"/>-->
    </div>

  </div>

</template>

<style scoped>

</style>