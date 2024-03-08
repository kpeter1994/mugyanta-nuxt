// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  runtimeConfig: {
      public: {
            appUrl: process.env.NUXT_PUBLIC_APP_URL ?? 'http://localhost:3000',
            apiBaseUrl: process.env.NUXT_PUBLIC_API_URL ?? 'http://localhost:8000'
      }
  },
  devtools: { enabled: true },
  css: ['~/assets/css/tailwind.css'],
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    },
  },
  target: 'static',
  plugins: [
      '~/plugins/fontawesome.js',
    { src: '~/plugins/aos', mode: 'client' }
  ],

})
