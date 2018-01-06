<template>
	<v-navigation-drawer
		fixed
		temporary
		class="hidden-md-and-up"
		v-model="drawer"
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
	props: ['pages'],
})
export default class AppDrawer extends Vue {
	public pages: string[];

	get drawer() {
		return this.$store.state.drawer;
	}

	set drawer(val) {
		this.$store.commit('setAppDrawer', val);
	}
}
</script>