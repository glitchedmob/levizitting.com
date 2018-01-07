<template>
	<div>
		<page-jumbotron>
			<h1 class="display-4">Blog</h1>
		</page-jumbotron>
		<v-container grid-list-lg>
			<v-layout row wrap>
				<v-flex xs12 md8>
					<post-preview
						v-for="post in posts"
						:post="post"
						:key="post.id"
						class="post"></post-preview>
					<div class="d-block text-xs-center">
						<v-pagination
							:length="totalPosts / 5"
							v-model="page"
							color="secondary"
							:total-visible="7"
							@input="handlePaginate"
							class="text-xs-center" />
					</div>
				</v-flex>
				<v-flex xs12 md4>
					<blog-sidebar />
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import posts from '../testData/posts';
import { Post } from "../models/Post";

import PageJumbotron from '../components/PageJumbotron.vue';
import PostPreview from '../components/PostPreview.vue';
import BlogSidebar from '../components/BlogSidebar.vue';

@Component({
	components: {
		PostPreview,
		BlogSidebar,
		PageJumbotron
	}
})
export default class Blog extends Vue {
	public posts: Post[];

	public totalPosts = 20;

	public page = 1;

	public created() {
		if(this.$route.query['page']) {
			this.page = parseInt(this.$route.query['page']);
		}
	}

	public handlePaginate(payload: number) {
		// Vue Router has no current to push a new route without causing a rerender
		// using straight HTML5 push state works though
		window.history.replaceState({}, '', `${this.$route.path}?page=${payload}`);

		this.posts = posts;
	}
}
</script>

<style lang="stylus" scoped>
.post
	margin-bottom 20px

.display-4
	text-align center
</style>

