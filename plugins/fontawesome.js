// Importáljuk a szükséges csomagokat és ikonokat
import { library } from '@fortawesome/fontawesome-svg-core';
import {
    faUserSecret,
    faHouse,
    faLandmark,
    faHouseCrack,
    faSection,
    faHandHoldingDollar,
    faMoneyBillTrendUp,
    faChevronRight,
    faChevronLeft,
    faPhone,
    faCircleXmark,
    faEnvelope,
    faArrowRight,
    faCircleCheck
} from '@fortawesome/free-solid-svg-icons'; // Példa ikon
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { defineNuxtPlugin } from '#app';

// Ikonok hozzáadása a library-hez
library.add(
    faUserSecret,
    faHouse,
    faLandmark,
    faHouseCrack,
    faSection,
    faMoneyBillTrendUp,
    faCircleCheck,
    faChevronRight,
    faChevronLeft,
    faPhone,
    faEnvelope,
    faCircleXmark,
    faArrowRight,
    faHandHoldingDollar);


// Plugin definiálása
export default defineNuxtPlugin(nuxtApp => {
    // FontAwesomeIcon globális komponensként való regisztrálása
    nuxtApp.vueApp.component('FontAwesomeIcon', FontAwesomeIcon);
});
