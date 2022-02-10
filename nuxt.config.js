import path from 'path';
import glob from 'glob';
import { markdown } from 'markdown';

const dynamicRoutes = getDynamicPaths({
    '/blog': 'blog/posts/*.json',
});

export default {
    // Target: https://go.nuxtjs.dev/config-target
    target: 'static',

    // Global page headers: https://go.nuxtjs.dev/config-head
    head: {
        titleTemplate: (titleChunk) =>
            titleChunk
                ? `Levi Zitting | ${titleChunk}`
                : 'Levi Zitting | Programmer and Creator',
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
                content: 'Levi Zitting | Programmer and Creator',
            },
        ],
        link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
    },

    // Global CSS (https://go.nuxtjs.dev/config-css)
    css: ['~/assets/scss/main.scss'],

    // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
    plugins: [],

    // Auto import components: https://go.nuxtjs.dev/config-components
    components: true,

    // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
    buildModules: [
        // https://go.nuxtjs.dev/typescript
        '@nuxt/typescript-build',
        // https://go.nuxtjs.dev/stylelint
        '@nuxtjs/stylelint-module',
    ],

    // Modules: https://go.nuxtjs.dev/config-modules
    modules: [
        '@nuxtjs/sitemap',
        '@nuxtjs/feed',
        '@nuxtjs/pwa',
        [
            '@nuxtjs/google-analytics',
            {
                id: 'UA-79851879-2',
            },
        ],
    ],

    // PWA module configuration: https://go.nuxtjs.dev/pwa
    pwa: {
        manifest: {
            lang: 'en',
        },
    },

    sitemap: {
        hostname: 'https://www.levizitting.com',
        routes: dynamicRoutes,
    },

    feed: {
        path: '/feed.xml',
        create: createFeed,
        cacheTime: 1000 * 60 * 15,
        type: 'rss2',
    },

    // Build Configuration: https://go.nuxtjs.dev/config-build
    build: {},
};

function getDynamicPaths(urlFilepathTable) {
    return Object.keys(urlFilepathTable)
        .map((url) => {
            const filepathGlob = urlFilepathTable[url];
            return glob
                .sync(filepathGlob, { cwd: 'content' })
                .map(
                    (filepath) => `${url}/${path.basename(filepath, '.json')}`
                );
        })
        .flat();
}

function createFeed(feed) {
    feed.options = {
        title: 'Levi Zitting Blog',
        link: 'https://www.levizitting.com/blog',
        description: 'A blog about code',
    };

    glob.sync('./content/blog/posts/*.json').forEach((file) => {
        const post = require(path.resolve(file));
        if (post.published) {
            const slug = file
                .replace('.json', '')
                .replace('./content/blog/posts/', '');
            const url = `https://www.levizitting.com/blog/${slug}`;
            feed.addItem({
                title: post.title,
                id: url,
                link: url,
                description: post.description
                    ? post.description
                    : 'No description',
                content: markdown.toHTML(post.body),
            });
        }
    });
}
