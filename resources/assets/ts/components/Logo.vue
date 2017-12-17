<template>
	<div class="logo">
		<span class="first">Levi</span>
		<span class="last">Zitting</span>
	</div>
</template>

<script lang="ts">
	import Vue from 'vue';
	import Component from 'vue-class-component';


	@Component({})
	export default class Logo extends Vue {

	}
</script>

<style lang="stylus" scoped>
	.logo
		font-size 2.5rem

	.first
		font-weight 100
		margin-right -6px
</style>