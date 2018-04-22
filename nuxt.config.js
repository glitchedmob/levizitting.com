const glob = require('glob');
const path = require('path');
const markdown = require('markdown').markdown
const pkg = require('./package');


const dynamicRoutes = getDynamicPaths({
  '/blog': 'blog/posts/*.json'
});

module.exports = {
  mode: 'universal',

  router: {
    linkExactActiveClass: 'active-exact',
    linkActiveClass: 'active'
  },

  /*
  ** Headers of the page
  */
  head: {
    title: 'Levi Zitting | Programmer and Creator',
    titleTemplate: (titleChunk) => (
      titleChunk ? `Levi Zitting | ${titleChunk}` : 'Levi Zitting | Programmer and Creator'
    ),
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: pkg.description },
      { name: 'theme-color', content: '#263238' },
      { property: 'og:title', content: 'Levi Zitting | Programmer and Creator' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
      { rel: 'stylesheet', href: 'https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?9ukd8d' }
    ]
  },

  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#FFFFFF' },

  /*
  ** Global CSS
  */
  css: [
    '~/assets/stylus/main.styl'
  ],

  /*
  ** Plugins to load before mounting the App
  */
  plugins: [],

  /*
  ** Nuxt.js modules
  */
  modules: [
    '~/modules/typescript.js',
    '@nuxtjs/sitemap',
    '@nuxtjs/feed',
    ['@nuxtjs/google-analytics', {
      id: 'UA-79851879-2'
    }]
  ],

  generate: {
    routes: dynamicRoutes
  },

  sitemap: {
    hostname: 'https://levizitting.com',
    generate: true,
    routes: dynamicRoutes
  },

  feed: {
    path: '/feed.xml',
    create: createFeed,
    cacheTime: 1000 * 60 * 15,
    type: 'rss2'
  },

  /*
  ** Build configuration
  */
  build: {
    extractCSS: true,
    /*
    ** You can extend webpack config here
    */
    extend(config, ctx) {

    }
  }
}

function getDynamicPaths(urlFilepathTable) {
  return [].concat(
    ...Object.keys(urlFilepathTable).map(url => {
      var filepathGlob = urlFilepathTable[url];
      return glob
        .sync(filepathGlob, { cwd: 'content' })
        .map(filepath => `${url}/${path.basename(filepath, '.json')}`);
    })
  );
}

function createFeed(feed) {
    feed.options = {
      title: 'Levi Zitting Blog',
      link: 'https://levizitting.com/blog',
      description: 'A blog about code'
    }

    glob.sync('./content/blog/posts/*.json').forEach(file => {
      const post = require(path.resolve(file));
      if (post.published) {
        const url = `https://levizitting.com/blog/${file.replace('.json', '').replace('./content/blog/posts/', '')}`;
        feed.addItem({
          title: post.title,
          id: url,
          link: url,
          description: post.description ? post.description : 'No description',
          content: markdown.toHTML(post.body)
        })
      }
    });
}
