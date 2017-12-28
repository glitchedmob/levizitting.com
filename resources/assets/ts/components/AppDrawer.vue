<template>
	<v-navigation-drawer
		app
		class="hidden-md-and-up"
		:value="drawer"
		fixed
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
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

@Component({
	props: ['pages', 'drawer']
})
export default class AppDrawer extends Vue {
	pages: string[];
	drawer: boolean;
}
</script>