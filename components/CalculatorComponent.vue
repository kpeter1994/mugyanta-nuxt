<script lang="ts" setup>
import { ref, watch, computed } from 'vue';

type FloorType = 'Csúszásmentes padló' | 'Önterülő padló' | 'Kétrétegű funkcionális bevonat' | 'Dekor padló';


const type = ref<string>('Csúszásmentes padló');
const nm2 = ref<number>(0);
const fullCost = ref<number>(0);
const materialCost = ref<number>(0);
const workCost = ref <number>(0);
const discount = ref<number>(0);

const typeMap: Record<FloorType, number> = {
  'Csúszásmentes padló': 6800,
  'Önterülő padló': 7800,
  'Kétrétegű funkcionális bevonat': 12000,
  'Dekor padló' : 25000
};

watch([type, nm2], () => {

  materialCost.value =  nm2.value * typeMap[type.value as FloorType];

  console.log(materialCost.value);




  if (nm2.value > 0 && nm2.value <= 500) {
    discount.value = nm2.value * (3 * nm2.value);
    workCost.value = nm2.value * 8000 - discount.value;
  }
  if (nm2.value > 500) {
    discount.value = 750000 + (nm2.value - 500) * (4 * nm2.value);
    workCost.value = nm2.value * 8000 - discount.value;
  }
  if (nm2.value > 1000) {
    discount.value = 750000 + (nm2.value - 500) * (4 * 500);
    workCost.value = nm2.value * 8000 - discount.value;
  }

  fullCost.value = materialCost.value + workCost.value;
});

const formatFullCost = computed(() => (cost: number) => {
  return cost.toLocaleString('hu-HU');
});

</script>

<template>
  <div class="p-6 bg-gray-800 rounded">
    <div class="mb-3">
      <p>Anyag plusz munka költség: </p>
      <span class="block text-5xl lg:text-7xl font-bold mb-1">{{ formatFullCost(fullCost) }} Ft </span>
      <div v-if="discount > 0">
        <div>Kedvezmény:</div>
        <span class="text-3xl lg:text-5xl text-green-300 font-bold">{{formatFullCost(discount)}} Ft</span>
      </div>
      <p class="mt-1.5">+ kiszállási költség</p>
    </div>
    <div class="flex gap-3">
      <div class="w-1/2">
        <label class="block" for="">Típus</label>
        <select v-model="type" class="bg-gray-600 p-1.5 rounded w-full">
          <option>Csúszásmentes padló</option>
          <option>Önterülő padló</option>
          <option>Kétrétegű funkcionális bevonat</option>
          <option>Dekor padló</option>
        </select>
      </div>

      <div class="w-1/2">
        <label class="block" for="">Hány nm2</label>
        <input v-model="nm2" class="bg-gray-600 p-1.5 rounded w-full" type="number">
      </div>


    </div>
    <div class="mt-3">
      <p class="mb-1">Ez a számítás nem minősül kötelező érvényű ajánlattételnek. A pontos összegek megismeréséhez kérjük, vegye fel velünk a kapcsolatot egy személyre szabott ajánlatért.</p>
      <NuxtLink to="#kapcsolat">
        <ButtonComponent>Ajánlaoto kérek</ButtonComponent>
      </NuxtLink>

    </div>


  </div>
</template>

<style scoped></style>
