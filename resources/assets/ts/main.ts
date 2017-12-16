import Vue from 'vue';

import Vuetify from 'vuetify';
import 'prismjs';

import App from './components/App.vue';
import router from './routes';

Vue.use(Vuetify);

new Vue({
	el: '#app',
	router,
	render: (h: any) => h(App)
});