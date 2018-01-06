
var mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel application. By default, we are compiling the Sass
| file for the application as well as bundling up all the JS files.
|
*/

mix.options({
	processCssUrls: false
});

mix.
	webpackConfig({
		output: {
			chunkFilename: mix.inProduction() ? 'js/chunks/[name].[chunkhash].js' : 'js/chunks/[name].js'
		}
	})
	.sourceMaps()
	.version()
	.ts('resources/assets/ts/main.ts', 'public/js')
	.extract(['axios', 'vue', 'vue-router', 'vue-class-component', 'vuetify', 'vue-meta', 'vuex-class'])
	.stylus('resources/assets/stylus/vendor.styl', 'public/css');
