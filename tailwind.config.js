/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/**/*.{js,vue,ts}",
    "./layouts/**/*.vue",
    "./pages/**/*.vue",
    "./plugins/**/*.{js,ts}",
    "./app.vue",
    "./error.vue",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Lexend", "sans-serif"],
        serif: ["Oswald", "serif"],
      },
      backgroundImage: {
        "hero-bg": "url('/img/hero.jpg')",
        "gradient-img": "url('/assets/image/gradient.svg')",
      },
      colors: {
        'bronze': '#AA8E6E',
        'bronze-light': '#e6c095',
        'bronze-lighter': '#f2ae61',

        'gray-100': '#F4F4F6',
        'gray-200': '#D7DADF',
        'gray-300': '#BBC0C9',
        'gray-400': '#9FA5B2',
        'gray-500': '#828B9B',
        'gray-600': '#687182',
        'gray-700': '#525866',
        'gray-800': '#3B404A',
        'gray-900': '#24272D',
      }
    },
  },
  plugins: [],
}