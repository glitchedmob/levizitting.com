import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
	state: {
		drawer: false,
		totalPosts: 0,
		recentPosts: [],
		popularPosts: []
	},

	mutations: {
		setAppDrawer(state, payload) {
			state.drawer = payload;
		},

		toggleAppDrawer(state) {
			state.drawer = !state.drawer;
		},

		updateTotalPosts(state, payload) {
			state.totalPosts = parseInt(payload);
		},

		updateRecentPosts(state, payload) {
			state.recentPosts = payload;
		},

		updatePopularPosts(state, payload) {
			state.popularPosts = payload;
		}
	}
});