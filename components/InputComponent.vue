<script setup lang="ts">
import { defineProps, defineEmits } from 'vue'

const props = defineProps<{
  modelValue: string
  label: string
  type: {
    type: StringConstructor
    default: 'text'
  }
  name: string
}>()

const emits = defineEmits(['update:modelValue'])

const inputValue = ref(props.modelValue)

watch(inputValue, (newValue) => {
  emits('update:modelValue', newValue)
})

watch(() => props.modelValue, (newValue) => {
  inputValue.value = newValue
})

</script>

<template>
  <div class="relative w-full">
    <input :name="props.name"
           :id="props.name"
           :type="props.type"
            v-model="inputValue"
           class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-100 bg-gradient-to-t from-gray-800 to-gray-500 border-0 border-b-2 border-transparent appearance-none focus:outline-none focus:ring-0 focus:border-bronze peer"  />
    <label :for="props.name" class="absolute pointer-events-none text-base text-gray-100 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">{{props.label}} <sup >*</sup></label>
  </div>
</template>

<style scoped>

</style>