<template>
	<div>
		<v-navigation-drawer
			class="hidden-md-and-up"
			v-model="drawer"
			fixed
			app
			clipped
			hide-overlay>
			<v-list>
				<v-list-tile
					v-for="page in pages"
					:key="page"
					flat
					append
					:to="{ name: page }"
					exact>
					{{ page | capitalize }}
				</v-list-tile>
			</v-list>
		</v-navigation-drawer>
		<v-toolbar
			fixed
			dark
			color="primary"
			app
			clipped-left>
			<v-toolbar-side-icon
				class="hidden-md-and-up"
				@click.stop="drawer = !drawer">
			</v-toolbar-side-icon>
			<v-toolbar-title class="white--text">
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
	</div>
</template>

<script lang="ts">
	import Vue from 'vue';
	import Component from 'vue-class-component';

	import Logo from './Logo.vue'

	@Component({
		components: {
			Logo
		}
	})
	export default class SiteNavbar extends Vue {
		public drawer = false;

		public pages = ['home', 'blog', 'projects', 'about', 'contact'];
	}
</script>

