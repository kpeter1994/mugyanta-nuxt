import AOS from 'aos';
import 'aos/dist/aos.css';

export default defineNuxtPlugin(nuxtApp => {
    nuxtApp.vueApp.use({
        install(Vue) {
            Vue.config.globalProperties.$aos = new AOS.init({ disable: "phone", startEvent: 'DOMContentLoaded', });
        }
    });
});
