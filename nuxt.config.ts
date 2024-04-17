// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    runtimeConfig: {
        public: {
            appUrl: process.env.NUXT_PUBLIC_APP_URL ?? 'http://localhost:3000',
            apiBaseUrl: process.env.NUXT_PUBLIC_API_URL ?? 'http://localhost:8000'
        },
    },
    devtools: {enabled: true},
    css: [
        '~/assets/css/tailwind.css',
    ],
    modules: ["@nuxtjs/tailwindcss", "nuxt-primevue", "@nuxt/image", "@nuxtjs/seo", "@nuxtjs/gtm"],

    primevue: {
        components: {
            include: ['Toast']
        }
    },
    image: {
        format: ['webp'],
    },
    site: {
        url: process.env.NUXT_PUBLIC_APP_URL ?? 'http://localhost:3000',
        name: 'Lakosági és ipari műgyantapadlók kivitelezése',
        description: 'Műgyanta padlórendszerek gyors és megbízható kivitelezése lakossági és ipari használatra egyaránt.',
        defaultLocale: 'hu',
    },
    gtm: {
        id: 'GTM-MF2ZL2VH'
    },
    target: 'static',
    plugins: [
        '~/plugins/fontawesome.js',
        {src: '~/plugins/aos', mode: 'client'},
    ],

})