import Vue from 'vue';
import Vuetify from 'vuetify';
import VueAnalytics from 'vue-analytics';
import Meta from 'vue-meta';

import App from './App.vue';
import router from './router';
import store from './store';
import { capitalize } from './filters/capitalize';
import theme from './theme';

Vue.use(Vuetify, {
	theme
});

Vue.use(VueAnalytics, {
	id: 'UA-79851879-2',
	router
});

Vue.use(Meta);

Vue.filter('capitalize', capitalize);

new Vue({
	el: '#app',
	router,
	store,
	render: (h: any) => h(App)
});
