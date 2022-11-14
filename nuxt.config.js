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
        __dangerouslyDisableSanitizers: ['script'],
        titleTemplate: (titleChunk) =>
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
        script: [
            {
                innerHTML:
                    '!function(){var t=window.firstparty=window.firstparty||[];if(!t.initialize){if(t.invoked)return void(window.console&&console.error&&console.error("Firstparty snippet included twice."));t.invoked=!0,t.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on","addSourceMiddleware","addIntegrationMiddleware","setAnonymousId","addDestinationMiddleware"],t.factory=function(r){return function(){var e=Array.prototype.slice.call(arguments);return e.unshift(r),t.push(e),t}};for(var r=0;r<t.methods.length;r++){var e=t.methods[r];t[e]=t.factory(e)}t.load=function(r,e,i){t._writeKey=r,t._host=e,t._firstpartyOptions=i;var a="/js/firstparty.min.js";void 0!==i&&void 0!==i.libraryPath&&(a=i.libraryPath);var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src="https://"+e+a;var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(o,n)},t.SNIPPET_VERSION="0.1.0"}}();' +
                    'window.firstparty.load("pxowTSKD0P6ZoWjm", "fp.levizitting.com");' +
                    'window.firstparty.page();',
                type: 'text/javascript',
            },
        ],
    },

    // Global CSS (https://go.nuxtjs.dev/config-css)
    css: ['~/assets/scss/main.scss'],

    router: { middleware: ['tracking'] },

    // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
    plugins: [
        {
            src: './plugins/gtag',
            mode: 'client'
        },
    ],

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
    modules: ['@nuxtjs/sitemap', '@nuxtjs/feed', '@nuxtjs/pwa'],

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
