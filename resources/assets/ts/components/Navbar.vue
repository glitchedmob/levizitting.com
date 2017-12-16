<template>
	<v-toolbar dark color="primary">
		<v-toolbar-side-icon></v-toolbar-side-icon>
		<v-toolbar-title class="white--text">Title</v-toolbar-title>
		<v-spacer></v-spacer>
		<v-btn>
			<router-link to="/">Hello</router-link>
		</v-btn>
		<v-btn icon>
			<v-icon>apps</v-icon>
		</v-btn>
		<v-btn icon>
			<v-icon>refresh</v-icon>
		</v-btn>
		<v-btn icon>
			<v-icon>more_vert</v-icon>
		</v-btn>
	</v-toolbar>
</template>

<script lang="ts">
	import Vue from 'vue';
	import Component from 'vue-class-component';

	@Component({})
	export default class NavBar extends Vue {

	}
</script>

