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

	@Component({})
	export default class BlogSidebar extends Vue {
		public popularPosts = [
			{ id: 1, slug: 'post', title: 'Post 1'},
			{ id: 2, slug: 'post', title: 'Post 2'},
			{ id: 3, slug: 'post', title: 'Post 3'},
			{ id: 4, slug: 'post', title: 'Post 4'},
			{ id: 5, slug: 'post', title: 'Post 5'},
		];

		public recentPosts = [
			{ id: 1, slug: 'post', title: 'Post 1'},
			{ id: 2, slug: 'post', title: 'Post 2'},
			{ id: 3, slug: 'post', title: 'Post 3'},
			{ id: 4, slug: 'post', title: 'Post 4'},
			{ id: 5, slug: 'post', title: 'Post 5'},
		];
	}
</script>s

