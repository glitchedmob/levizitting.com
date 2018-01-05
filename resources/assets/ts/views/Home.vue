<template>
	<v-container fluid class="home-header">
		<v-layout class="home" justify-center align-center>
			<v-container grid-list text-xs-center>
				<v-layout row wrap class="home-card elevation-8" align-center>
					<v-flex xs12 md6>
						<img src="../../images/profile-2.jpg" alt="Levi Zitting Profile Image" class="profile-img" :height="imageHeight">
						<h2 class="name">Levi Zitting</h2>
					</v-flex>
					<v-flex xs12 md6 class="description">
						<p>I am a programmer and creator</p>
						<p>
							Welcome to my website.<br>
							While you're here check out some of the stuff I've been working on
						</p>
						<v-btn color="secondary" append :to="{ name: 'blog' }">Blog</v-btn>
						<v-btn color="secondary" append :to="{ name: 'projects' }">Projects</v-btn>
					</v-flex>
				</v-layout>
			</v-container>
		</v-layout>
	</v-container>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

@Component({})
export default class Home extends Vue {

	get imageHeight () {
		switch (this.$vuetify.breakpoint.name) {
			case 'xs': return '150px';
			case 'sm': return '300px';
			case 'md': return '300px';
			case 'lg': return '300px';
			case 'xl': return '400px';
		}
	}
}
</script>

<style lang="stylus" scoped>
.home-header
	min-height calc(100vh - 64px)
	background-image url('../../images/atlanta.jpg')
	background-size cover

.home
	min-height calc(100vh - 64px)

.home-card
	background #FFF
	padding 20px

.profile-img
	border-radius 100%

.name
	font-weight 100
	font-size 2.5rem

.description
	font-weight 200
	font-size 2rem
</style>