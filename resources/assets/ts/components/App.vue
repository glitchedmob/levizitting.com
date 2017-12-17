<template>
	<v-app>
		<site-navbar></site-navbar>
		<router-view></router-view>
		<site-footer></site-footer>
	</v-app>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import SiteNavbar from './Navbar.vue';
import SiteFooter from './Footer.vue';

@Component({
	components: {
		SiteNavbar,
		SiteFooter,
	}
})
export default class App extends Vue {
}
</script>

