<script setup lang="ts">

import GlassCardComponent from "~/components/GlassCardComponent.vue";

useHead({
  title: 'Lakosági és ipari műgyantapadlók készítése',
  htmlAttrs: {
    lang: 'hu',
  },
  meta: [
    {
      name: "description",
      content: 'Műgyanta padlórendszerek gyors és megbízható kivitelezése lakossági és ipari használatra egyaránt',
    },
    {
      name: "charset",
      content: "UTF-8",
    }
  ],
  link: [
    { rel: 'icon', type: 'image/ico', href: '/favicon.ico' },
    { rel: 'apple-touch-icon', sizes: '32x32', href: '/apple-touch-icon.svg' },
  ]
});
useSchemaOrg({
  '@context': 'https://schema.org',
  '@type': 'Product',
  name: 'Műgyanta Padló',
  url: 'https://dev.createweb.hu/',
  logo: 'https://mugyantapadlo.hu/logo.svg',
  agregateRating: {
    '@type': 'AggregateRating',
    "ratingValue": "4.8",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "14"
  },
  sameAs: [
    'https://www.facebook.com/padlo.mugyanta.1',
    'https://www.instagram.com/p/CjCyp6DIg4e/',
  ],
});
</script>

<template>
  <div>

    <SocialComponent class="hidden xl:flex"></SocialComponent>


    <div class="flex flex-col lg:flex-row">
      <div class="lg:w-1/2 flex justify-center items-center order-2 lg:order-1">
        <div class="max-w-3xl p-2">
          <h1 class="lg:text-6xl  uppercase opacity-80 mb-1.5 lg:mb-6 text-center lg:text-left font-serif text-4xl lg:text-[80px] tracking-wider leading-[110%] font-bold ">Ipari műgyanta padló rendszerek</h1>
          <p class="lg:text-lg 2xl:text-xl opacity-70 text-center lg:text-left">Műgyanta padló rendszerek gyors és megbízható kivitelezése lakossági és ipari használatra egyaránt.</p>
          <div ref="primaryButton" class="mt-6 flex flex-col xl:flex-row gap-3">
            <NuxtLink to="#kapcsolat">
              <ButtonComponent class="mt-6 w-full lg:w-auto">Ajánlatot kérek</ButtonComponent>
            </NuxtLink>
          </div>
        </div>

      </div>
      <div class="order-1 lg:order-2 lg:block w-full lg:w-1/2 rounded-l-[2rem] overflow-hidden">
<!--        <img loading="lazy" class="w-full h-full object-cover" src="../assets/image/mugyanta-padlo-keszitese.webp" alt="mügyanta padló készítés">-->
        <NuxtImg
            src="/image/mugyanta-padlo-keszitese.webp"
            alt="mügyanta padló készítés"
            sizes="xs:480px sm:640px md:768px lg:960px"
            class="w-full h-full object-cover"/>
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
          <NuxtImg loading="lazy"
                   sizes="sm: 340px lg: 360px "
                   src="/image/sztajkosz-petrosz.webp"
                   alt="Szajkosz Petrosz kivitelező"
                   class="w-full h-full object-cover rounded"/>
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
          <NuxtImg sizes="sm:460px lg:730px" loading="lazy" src="/image/pince.webp" alt="műgyanta burkolat" class="w-full"/>
        </div>
      </div>

      <div class="flex justify-center">
        <NuxtLink to="#kapcsolat">
          <ButtonComponent class="mt-6 w-full lg:w-auto">Ajánlatot kérek</ButtonComponent>
        </NuxtLink>
      </div>

    </SectionComponent>

    <section class="py-6 lg:py-28">
      <div class="max-w-7xl mx-auto px-4">
        <h2 class="font-serif text-4xl mb-12 text-center">FELHASZNÁLÁSI TERÜLETEK</h2>
        <div class="flex justify-center flex-wrap gap-6">
          <div data-aos="fade-up">
            <NuxtImg sizes="sm: 250px" loading="lazy" src="/image/felhasznalas/uzem-csarnok.webp" alt="üzem csarnok" class="w-[250px]"/>
            <p class="text-center text-lg font-bold mt-3">Üzemcsarnokok</p>
          </div>
          <div data-aos="fade-up">
            <NuxtImg sizes="sm: 250px" loading="lazy" src="/image/felhasznalas/bemutato-terem.webp" alt="Bemutató termek, üzlethelyiségek"/>
            <p class="text-center text-lg font-bold mt-3">Bemutató termek, <br> üzlethelyiségek</p>
          </div>
          <div data-aos="fade-up">
            <NuxtImg sizes="sm: 250px" loading="lazy" src="/image/felhasznalas/elelmiszeripari-terulet.webp" alt="Élelmiszeripari területek" />
            <p class="text-center text-lg font-bold mt-3">Élelmiszeripari területek</p>
          </div>
          <div data-aos="fade-up">
            <NuxtImg sizes="sm: 250px" loading="lazy" src="/image/felhasznalas/garazs.webp" alt="Garázs, teremgarázs"/>
            <p class="text-center text-lg font-bold mt-3">Garázs, teremgarázs</p>
          </div>
          <div data-aos="fade-up">
            <NuxtImg sizes="sm: 250px" loading="lazy" src="/image/felhasznalas/muhely.webp" alt="Műhelyek"/>
            <p class="text-center text-lg font-bold mt-3">Műhelyek</p>
          </div>
          <div data-aos="fade-up">
            <NuxtImg sizes="sm: 250px" loading="lazy" src="/image/felhasznalas/labor.webp" alt="Laboratóriumok"/>
            <p class="text-center text-lg font-bold mt-3">Laboratóriumok</p>
          </div>
          <div data-aos="fade-up">
            <NuxtImg sizes="sm: 250px" loading="lazy" src="/image/felhasznalas/lakossagi-helyseg.webp" alt="Lakossági helyiségek"/>
            <p class="text-center text-lg font-bold mt-3">Lakossági helyiségek</p>
          </div>

        </div>
      </div>
    </section>

    <SectionComponent title="ipari">
      <div class="lg:grid grid-cols-12 grid-rows-1">
        <div class="col-start-2 col-end-8 row-start-1 ">
          <NuxtImg sizes="sm: 460px lg: 730px" loading="lazy" src="/image/blog/mugynata-padlo.webp" title="IPARI PADLÓ RENDSZEREK" alt="IPARI PADLÓ RENDSZEREK" class="w-full rounded"/>
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
        <NuxtLink to="#kapcsolat">
          <ButtonComponent class="mt-6 w-full lg:w-auto">Ajánlatot kérek</ButtonComponent>
        </NuxtLink>
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
          <NuxtImg sizes="sm: 460px lg: 730px" loading="lazy" src="/image/lakosagi-kep.webp" title="lakossági műgyanta" alt="lakossági műgyanta" class="w-full lg:rounded"/>
        </div>
      </div>

      <div class="flex justify-center">
        <NuxtLink to="#kapcsolat">
          <ButtonComponent class="mt-6 w-full lg:w-auto">Ajánlatot kérek</ButtonComponent>
        </NuxtLink>
      </div>

    </SectionComponent>
    <SectionComponent title="referenciák">
      <h2 class="font-serif text-4xl uppercase text-center mb-12">referenciák</h2>
      <GallerylComponent></GallerylComponent>
    </SectionComponent>

<!--    <SectionComponent id="blog" title="blog">-->
<!--      <div class="flex justify-center gap-3 flex-wrap">-->
<!--        <BlogCardComponent-->
<!--            title="Teszt bejegyzés"-->
<!--            description="Teszt bejegyzés leírása"-->
<!--            date="2022-03-01"-->
<!--            link="/mugyantapadlo-elonyei"-->
<!--            image="/blog/mugyanta-padlo-elonyei.webp">-->
<!--        </BlogCardComponent>-->

<!--        <BlogCardComponent-->
<!--            title="Teszt bejegyzés"-->
<!--            description="Teszt bejegyzés leírása"-->
<!--            date="2022-03-01"-->
<!--            link="/mugyantapadlo-elonyei"-->
<!--            image="/blog/mugyanta-padlo-elonyei.webp">-->
<!--        </BlogCardComponent>-->

<!--      </div>-->
<!--    </SectionComponent>-->


    <SectionComponent title="kapcsolat">

      <FormComponent></FormComponent>

    </SectionComponent>



  </div>

</template>

<style scoped>

</style>