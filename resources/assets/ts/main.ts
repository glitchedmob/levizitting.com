import Vue from 'vue';

import App from './components/App.vue';
import router from './routes';

new Vue({
	el: '#app',
	router,
	render: (h: any) => h(App)
});