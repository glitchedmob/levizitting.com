var glob = require('glob');
var path = require('path');
const pkg = require('./package');

var dynamicRoutes = getDynamicPaths({
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
    title: 'Levi Zitting | Programmer and Creator ',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: pkg.description }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
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
    '~/modules/typescript.js'
  ],

  generate: {
    routes: dynamicRoutes
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
