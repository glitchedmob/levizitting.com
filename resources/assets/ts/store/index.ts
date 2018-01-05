import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
	state: {
		drawer: false
	},

	mutations: {
		setAppDrawer(state, payload) {
			state.drawer = payload;
		},

		toggleAppDrawer(state) {
			state.drawer = !state.drawer;
		}
	}
});