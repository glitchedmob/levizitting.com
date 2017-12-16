
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

mix.sourceMaps()
	.version()
	.ts('resources/assets/ts/main.ts', 'public/js')
	.extract(['axios', 'prismjs', 'vue', 'vue-router', 'vue-class-component', 'vuetify', 'vue-meta'])
	.stylus('resources/assets/stylus/vendor.styl', 'public/css');
