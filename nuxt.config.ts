import { defineNuxtConfig } from 'nuxt/config';
import path from 'path';
import fs from 'fs';

// Helper to get dynamic routes for sitemap
function getDynamicRoutes(): string[] {
    const blogDir = path.resolve('content/blog/posts');
    const routes: string[] = [];

    if (fs.existsSync(blogDir)) {
        const files = fs.readdirSync(blogDir);
        for (const file of files) {
            if (file.endsWith('.json')) {
                const slug = file.replace('.json', '');
                routes.push(`/blog/${slug}`);
            }
        }
    }

    return routes;
}

export default defineNuxtConfig({
    ssr: true,

    site: {
        url: 'https://www.levizitting.com',
    },

    app: {
        head: {
            titleTemplate: (titleChunk?: string) =>
                titleChunk
                    ? `Levi Zitting | ${titleChunk}`
                    : 'Levi Zitting | Software Developer',
            meta: [
                { charset: 'utf-8' },
                {
                    name: 'viewport',
                    content: 'width=device-width, initial-scale=1',
                },
                {
                    hid: 'description',
                    name: 'description',
                    content: 'A blog about code',
                },
                { name: 'theme-color', content: '#263238' },
                {
                    hid: 'og:title',
                    property: 'og:title',
                    content: 'Levi Zitting | Software Developer',
                },
            ],
            link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
        },
    },

    css: ['~/assets/scss/main.scss'],

    modules: ['@nuxt/eslint', '@nuxtjs/sitemap', 'nuxt-gtag'],

    gtag: {
        id: 'G-3JP4Q9JK72',
    },

    sitemap: {
        hostname: 'https://www.levizitting.com',
        routes: getDynamicRoutes(),
        cacheMaxAgeSeconds: 3600,
    },

    nitro: {
        preset: 'static',
        prerender: {
            routes: [...getDynamicRoutes(), '/feed.xml'],
            ignore: ['/tip-calculator/ios', '/tip-calculator/android'],
        },
    },

    compatibilityDate: '2025-02-13',
});
