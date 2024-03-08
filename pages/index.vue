<script setup lang="ts">

import GlassCardComponent from "~/components/GlassCardComponent.vue";


</script>

<template>
  <div class="bg-gray-900 bg-gradient-img text-white">
    <div class="w-[90%] lg:w-[80%] mx-auto">
      <div class="w-full h-[60vh] rounded-b-3xl overflow-hidden">
        <img class="w-full h-full object-cover" src="../assets/image/mugyanta-padlo-keszitese.jpg" alt="">
      </div>

      <div class="flex flex-col lg:flex-row py-14">
        <p class="font-serif text-4xl lg:text-[80px] tracking-wider leading-[110%] font-bold mb-3 text-center lg:text-left">Ipari műgyanta padló rendszerek</p>
        <div class="lg:px-12" >
          <p class="text-lg text-center lg:text-left">Műgyanta padló rendszerek gyors és megbízható kivitelezése lakossági és ipari használatra egyaránt.</p>
          <ButtonComponent class="mt-6 w-full lg:w-auto"><NuxtLink to="#kapcsolat">Ajánlatot kérek</NuxtLink></ButtonComponent>
        </div>
      </div>

    </div>
    <SectionComponent title="bemutatkozás">
      <div class="flex flex-col lg:flex-row justify-center">
        <div class="max-w-lg">
          <h2 class="font-serif text-4xl mb-3">NÉHÁNY MONDATBAN RÓLUNK</h2>
          <p class="text-lg leading-relaxed mb-3"  data-aos="fade-up">Kezdetben Floortech-bau Bt. néven működtünk, családi vállalkozásként. Több tízezer négyzetméternyi műgyanta padló megrendelésnek tettünk eleget, az ipar, és a lakossági megrendelések számos területén. Cégünk számára központi érték volt a pontosság és megbízhatóság, valamint a korrekt, szakmai tudásunkra alapozott kivitelezés. Ezeket az értékeket továbbra is előtérbe helyezve 2018 óta egyéni vállalkozóként folytatom tevékenységünket.</p>
          <p class="text-lg leading-relaxed mb-3" data-aos="fade-up">Kiemelten fontos számunkra a hosszú távú kapcsolatok kialakítása, amelynek alapja a kölcsönös elégedettség és az ügyfelekkel fenntartott megfelelő kommunikáció.</p>
          <span class="text-right block">Sztajkosz Petrosz</span>
          <span class="text-right block">kivitelező</span>
        </div>
        <div class="max-w-sm p-6 mx-auto lg:mx-0">
          <img class="w-full h-full object-cover rounded" src="../assets/image/sztajkosz-petrosz.webp" alt="Szajkosz Petrosz kivitelező">
        </div>

      </div>
    </SectionComponent>
    <SectionComponent title="előnyök">
      <div class="lg:grid grid-cols-12 grid-rows-1">
        <GlassCardComponent class="col-start-2 col-end-7 row-start-1">
          <h2 class="font-serif text-4xl mb-3">MELYEK A MŰGYANTAPADLÓ <br> <span class="text-bronze">ELŐNYEI?</span></h2>
          <ul class="text-lg lg:text-xl list-disc list-inside leading-relaxed lg:leading-10">
            <li data-aos="fade-up">Hézagmentes</li>
            <li data-aos="fade-up">Homogén</li>
            <li data-aos="fade-up">Csúszásmentes</li>
            <li data-aos="fade-up">Pormentes</li>
            <li data-aos="fade-up">Magas szintű mechanikai ellenálló képesség</li>
            <li data-aos="fade-up">Vízzáró bevonat</li>
            <li data-aos="fade-up">Ellenálló a vegyi anyagokkal szemben</li>
            <li data-aos="fade-up">Esztétikus és tartós</li>
            <li data-aos="fade-up">Könnyen takarítható</li>
            <li data-aos="fade-up">Könnyedén felújítható</li>
            <li data-aos="fade-up">Sokféle színben</li>
            <li data-aos="fade-up">Gyors kivitelezés</li>
          </ul>

        </GlassCardComponent>
        <div class="col-start-6 col-end-13 row-start-1 flex items-center">
          <img class="w-full" src="../assets/image/pince2.png" title="műgyanta burkolat" alt="műgyanta burkolat">
        </div>
      </div>

      <div class="flex justify-center">
        <ButtonComponent class="mt-6 w-full lg:w-auto">Ajánlatot kérek</ButtonComponent>
      </div>

    </SectionComponent>

    <section class="py-6 lg:py-28">
      <div class="max-w-7xl mx-auto px-4">
        <h2 class="font-serif text-4xl mb-12 text-center">FELHASZNÁLÁSI TERÜLETEK</h2>
        <div class="flex justify-center flex-wrap gap-6">
          <div data-aos="fade-up">
            <img class="w-[250px]" src="../assets/image/felhasznalas/uzem-csarnok.webp" alt="üzem csarnok">
            <p class="text-center text-lg font-bold mt-3">Üzemcsarnokok</p>
          </div>
          <div data-aos="fade-up">
            <img class="w-[250px]" src="../assets/image/felhasznalas/bemutato-terem.webp" alt="Bemutató termek, üzlethelyiségek">
            <p class="text-center text-lg font-bold mt-3">Bemutató termek, <br> üzlethelyiségek</p>
          </div>
          <div data-aos="fade-up">
            <img class="w-[250px]" src="../assets/image/felhasznalas/elelmiszeripari-terulet.webp" alt="Élelmiszeripari területek">
            <p class="text-center text-lg font-bold mt-3">Élelmiszeripari területek</p>
          </div>
          <div data-aos="fade-up">
            <img class="w-[250px]" src="../assets/image/felhasznalas/garazs.webp" alt="Garázs, teremgarázs">
            <p class="text-center text-lg font-bold mt-3">Garázs, teremgarázs</p>
          </div>
          <div data-aos="fade-up">
            <img class="w-[250px]" src="../assets/image/felhasznalas/muhely.webp" alt="Műhelyek">
            <p class="text-center text-lg font-bold mt-3">Műhelyek</p>
          </div>
          <div data-aos="fade-up">
            <img class="w-[250px]" src="../assets/image/felhasznalas/labor.webp" alt="Laboratóriumok">
            <p class="text-center text-lg font-bold mt-3">Laboratóriumok</p>
          </div>
          <div data-aos="fade-up">
            <img class="w-[250px]" src="../assets/image/felhasznalas/lakossagi-helyseg.webp" alt="Lakossági helyiségek">
            <p class="text-center text-lg font-bold mt-3">Lakossági helyiségek</p>
          </div>

        </div>
      </div>
    </section>

    <SectionComponent title="ipari">
      <div class="lg:grid grid-cols-12 grid-rows-1">
        <div class="col-start-2 col-end-8 row-start-1 ">
          <img class="w-full rounded" src="../assets/image/blog/mugynata-padlo.webp" title="IPARI PADLÓ RENDSZEREK" alt="IPARI PADLÓ RENDSZEREK">
        </div>
        <div class="col-start-7 col-end-13 row-start-1 flex items-center">
          <GlassCardComponent class="w-full">
            <h2 class="font-serif text-4xl mb-3">IPARI PADLÓ RENDSZEREK</h2>
            <ul class="text-lg lg:text-xl list-disc list-inside leading-relaxed lg:leading-10">
              <li data-aos="fade-up">Beton impregnálás</li>
              <li data-aos="fade-up">Funkcionális vékonybevonat</li>
              <li data-aos="fade-up">Csúszásmentes ipari padló</li>
              <li data-aos="fade-up">Öntött műgyanta padló, tükrös felület</li>
              <li data-aos="fade-up">Antisztatikus ipari padló</li>
              <li data-aos="fade-up">Fokozottan vegyszerálló bevonatok</li>
            </ul>
          </GlassCardComponent>
        </div>
      </div>
      <div class="flex justify-center">
        <ButtonComponent class="mt-6 w-full lg:w-auto">Ajánlatot kérek</ButtonComponent>
      </div>
    </SectionComponent>

    <SectionComponent title="lakossági">
      <div class="lg:grid grid-cols-12 grid-rows-1">
        <div class="col-start-2 col-end-7 row-start-1 flex items-center">
          <GlassCardComponent >
            <h2 class="font-serif text-4xl mb-3">LAKOSSÁGI PADLÓ RENDSZEREK</h2>
            <ul class="text-lg lg:text-xl list-disc list-inside leading-relaxed lg:leading-10">
              <li data-aos="fade-up">Csúszásmentes bevonatok garázsokba és műhelyekbe</li>
              <li data-aos="fade-up">Öntött tükör padló lakások belső terébe és üzlethelyiségekben</li>
              <li data-aos="fade-up">Speciális kültéri bevonatok, UV és időjárás álló, kiemelt repedés áthidalással teraszokra</li>
              <li data-aos="fade-up">Kőszőnyeg, medencék köré</li>
            </ul>

          </GlassCardComponent>
        </div>

        <div class="col-start-6 col-end-13 row-start-1 flex items-center">
          <img class="w-full lg:rounded" src="../assets/image/lakosagi-kep.webp" title="lakossági műgyanta" alt="lakossági műgyanta">
        </div>
      </div>

      <div class="flex justify-center">
        <ButtonComponent class="mt-6 w-full lg:w-auto">Ajánlatot kérek</ButtonComponent>
      </div>

    </SectionComponent>
    <SectionComponent title="referenciák">
      <h2 class="font-serif text-4xl uppercase text-center mb-12">referenciák</h2>
      <GallerylComponent></GallerylComponent>
    </SectionComponent>


    <FormComponent></FormComponent>


  </div>

</template>

<style scoped>

</style>