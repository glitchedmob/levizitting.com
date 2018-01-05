<template>
	<v-app>
		<app-drawer :pages="pages" :drawer="drawer"></app-drawer>
		<app-toolbar :pages="pages" @open="drawer = !drawer"></app-toolbar>
		<v-content>
			<v-slide-x-transition>
				<router-view></router-view>
			</v-slide-x-transition>
		</v-content>
		<app-footer></app-footer>
	</v-app>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import AppDrawer from './components/AppDrawer.vue';
import AppToolbar from './components/AppToolbar.vue';
import AppFooter from './components/AppFooter.vue';

@Component({
	components: {
		AppToolbar,
		AppFooter,
		AppDrawer
	}
})
export default class App extends Vue {
	public drawer = false;

	public pages = ['home', 'blog', 'projects', 'about', 'contact'];
}
</script>
