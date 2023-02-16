// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
  modules: [
    '@nuxtjs/tailwindcss'
    ],
  
  app: {
    head: {
      title: 'Heavenly Suites',
      meta: [
        {name: 'description', content: 'Expierence Heaven'},
        {name: 'author', content: 'Sooi'}
      ],
      link: [
        {rel: 'stylesheet', href: 'https://fonts.googleapis.com/icon?family=Material+Icons'}
      ]
    }
  },
})