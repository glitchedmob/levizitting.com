import { defineNuxtConfig } from 'nuxt/config';

export default defineNuxtConfig({
    site: {
        url: 'https://www.levizitting.com',
    },

    app: {
        head: {
            titleTemplate: 'Levi Zitting | %s',
            meta: [
                { charset: 'utf-8' },
                { name: 'viewport', content: 'width=device-width, initial-scale=1' },
                { name: 'description', content: 'A blog about code' },
                { name: 'theme-color', content: '#263238' },
                { property: 'og:title', content: 'Levi Zitting | Software Developer' },
            ],
            link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
        },
    },

    css: ['~/assets/scss/main.scss'],

    modules: ['@nuxt/eslint', '@nuxtjs/sitemap', 'nuxt-gtag'],

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
});
