
import {defineNuxtPlugin} from "#app";
import PrimeVue from 'primevue/config';
import ToastService from 'primevue/toastservice';
import 'primevue/resources/themes/saga-blue/theme.css' // Téma
import 'primevue/resources/primevue.min.css'; // Core CSS
import 'primeicons/primeicons.css';



export default defineNuxtPlugin(nuxtApp => {
    nuxtApp.vueApp.use(PrimeVue);
    nuxtApp.vueApp.use(ToastService);
});