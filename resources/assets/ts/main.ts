import Vue from 'vue';
import Vuetify from 'vuetify';
import Meta from 'vue-meta';
import 'prismjs';

import App from './components/App.vue';
import router from './routes';
import capitalize from './filters/capitalize';
import theme from './theme';

Vue.use(Vuetify, {
	theme
});
Vue.use(Meta);

Vue.filter('capitalize', capitalize);

new Vue({
	el: '#app',
	router,
	render: (h: any) => h(App)
});