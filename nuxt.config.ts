import { defineNuxtConfig } from 'nuxt/config';

export default defineNuxtConfig({
    site: {
        url: 'https://www.levizitting.com',
        name: 'Levi Zitting',
        description: 'A blog about code',
    },

    css: ['~/assets/scss/main.scss'],

    modules: ['@nuxt/eslint', '@nuxtjs/sitemap', 'nuxt-gtag'],

    sitemap: {
        zeroRuntime: true,
    },

    gtag: {
        id: 'G-3JP4Q9JK72',
    },

    nitro: {
        preset: 'static',
        prerender: {
            routes: ['/feed.xml'],
            ignore: ['/tip-calculator/ios', '/tip-calculator/android'],
        },
    },

    typescript: {
        typeCheck: true,
    },

    compatibilityDate: '2025-02-13',

    sourcemap: {
        server: true,
        client: true,
    },
});
