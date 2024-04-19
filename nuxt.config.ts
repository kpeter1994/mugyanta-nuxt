// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    runtimeConfig: {
        public: {
            appUrl: process.env.NUXT_PUBLIC_APP_URL ?? 'http://localhost:3000',
            apiBaseUrl: process.env.NUXT_PUBLIC_API_URL ?? 'http://localhost:8000',
            gtmId: process.env.NUXT_PUBLIC_GTM_ID ?? 'GTM-XXXXXXX',
            gtmEnabled: process.env.NUXT_PUBLIC_GTM_ENABLED ?? true,
            gtmDebug: process.env.NUXT_PUBLIC_GTM_DEBUG ?? true,
        },
    },
    devtools: {enabled: true},
    css: [
        '~/assets/css/tailwind.css',
    ],
    modules: ["@nuxtjs/tailwindcss", "nuxt-primevue", "@nuxt/image", "@nuxtjs/seo"],

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
    target: 'static',
    plugins: [
        '~/plugins/fontawesome.js',
        {src: '~/plugins/aos', mode: 'client'},
    ],

})