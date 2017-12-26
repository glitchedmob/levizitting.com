<template>
	<v-toolbar
		fixed
		dark
		color="primary"
		app
		clipped-left>
		<v-toolbar-side-icon
			class="hidden-md-and-up"
			@click.stop="emitDrawerOpen">
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
</template>

<script lang="ts">
	import Vue from 'vue';
	import Component from 'vue-class-component';

	import Logo from './Logo.vue'

	@Component({
		props: ['pages'],
		components: {
			Logo
		}
	})
	export default class AppToolbar extends Vue {
		pages: string[];

		public emitDrawerOpen() {
			this.$emit('open');
		}
	}
</script>

