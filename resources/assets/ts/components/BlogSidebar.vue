<template>
	<v-card>
		<v-card-title>
			<h3 class="headline">Popular Posts</h3>
		</v-card-title>
		<v-list>
			<v-list-tile
				v-for="post in popularPosts"
				:key="post.id"
				append
				:to="{ name: 'post', params: { slug: post.slug } }">
				{{ post.title }}
			</v-list-tile>
		</v-list>
		<v-card-title>
			<h3 class="headline">Recent Posts</h3>
		</v-card-title>
		<v-list>
			<v-list-tile
				v-for="post in recentPosts"
				:key="post.id"
				append
				:to="{ name: 'post', params: { slug: post.slug } }">
				{{ post.title }}
			</v-list-tile>
		</v-list>
	</v-card>
</template>

<script lang="ts">
	import Vue from 'vue';
	import Component from 'vue-class-component';

	import { State } from 'vuex-class';

	@Component({})
	export default class BlogSidebar extends Vue {
		@State public popularPosts: any[];
		@State public recentPosts: any[];
	}
</script>s

