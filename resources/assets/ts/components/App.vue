<template>
	<v-app>
		<navbar></navbar>
		<router-view></router-view>
	</v-app>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import Navbar from './Navbar.vue';

@Component({
	components: {
		Navbar
	}
})
export default class App extends Vue {
}
</script>

