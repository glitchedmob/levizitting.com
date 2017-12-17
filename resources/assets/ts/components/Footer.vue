<template>
	<v-footer dark color="primary" app>
		<div>© {{ new Date().getFullYear() }}</div>
	</v-footer>
</template>

<script lang="ts">
	import Vue from 'vue';
	import Component from 'vue-class-component';

	@Component({})
	export default class SiteFooter extends Vue {
	}
</script>

