<template>
	<v-toolbar
		app
		dark
		color="primary700"
		clipped-left>
		<v-toolbar-side-icon
			class="hidden-md-and-up"
			@click.stop="toggleAppDrawer">
		</v-toolbar-side-icon>
		<v-toolbar-title>
			<logo></logo>
		</v-toolbar-title>
		<v-spacer></v-spacer>
		<v-toolbar-items class="hidden-sm-and-down">
			<v-btn
				v-for="page in pages"
				:key="page"
				flat
				append
				:to="{ name: page }"
				exact>
				{{ page | capitalize }}
			</v-btn>
		</v-toolbar-items>
	</v-toolbar>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';
import { Mutation } from 'vuex-class';

import Logo from './Logo.vue'

@Component({
	props: ['pages'],
	components: {
		Logo
	}
})
export default class AppToolbar extends Vue {
	pages: string[];

	@Mutation public toggleAppDrawer: Function;

	// public toggleDrawer() {
	// 	debugger;
	// 	console.log('toggle');
	// }
}
</script>

