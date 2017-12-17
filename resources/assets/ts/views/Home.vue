<template>
	<v-container fluid class="home-header">

	</v-container>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

@Component({})
export default class Home extends Vue {
	
}
</script>

<style lang="stylus" scoped>
.home-header
	min-height 100vh
	background-image url('../../images/atlanta.jpg')
	background-size cover
</style>