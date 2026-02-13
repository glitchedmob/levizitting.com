import { defineNuxtConfig } from 'nuxt/config';
import tailwindcss from '@tailwindcss/vite';
import type { ViteConfig } from '@nuxt/schema';

export default defineNuxtConfig({
    app: {
        pageTransition: { name: 'page', mode: 'out-in' },
    },

    site: {
        url: 'https://www.levizitting.com',
        name: 'Levi Zitting',
        description: 'A blog about code',
    },

    css: ['~/assets/css/main.css'],

    modules: ['@nuxt/eslint', '@nuxtjs/sitemap', 'nuxt-gtag'],

    vite: {
        // Cast to Nuxt's expected Plugin type from ViteConfig
        // This is needed because @tailwindcss/vite returns Vite's Plugin type
        // which is structurally incompatible with Nuxt's bundled version.
        // See: https://github.com/nuxt/nuxt/issues/34306
        plugins: [tailwindcss() as NonNullable<ViteConfig['plugins']>[number]],
    },

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
