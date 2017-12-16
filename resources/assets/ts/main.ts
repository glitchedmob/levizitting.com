import Vue from 'vue';

import Vuetify from 'vuetify';
import Meta from 'vue-meta';
import 'prismjs';

import App from './components/App.vue';
import router from './routes';

Vue.use(Vuetify);
Vue.use(Meta);

new Vue({
	el: '#app',
	router,
	render: (h: any) => h(App)
});