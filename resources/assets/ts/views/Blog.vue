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
							:length="Math.ceil(totalPosts / 5)"
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
import { State, Mutation } from 'vuex-class';
import axios from 'axios';

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
	public posts: Post[] = [];

	@State public totalPosts: number;
	@Mutation public updateTotalPosts: Function;
	@State public popularPosts: any[];
	@State public recentPosts: any[];
	@Mutation public updatePopularPosts: Function;
	@Mutation public updateRecentPosts: Function;

	public page = 1;

	public created() {
		if(this.$route.query['page']) {
			this.page = parseInt(this.$route.query['page']);
		}

		axios.get(this.buildUrl()).then(response => {
			this.updateTotalPosts(response.data.posts.total);

			this.posts = response.data.posts.data as Post[];

			if(response.data.popular) {
				this.updatePopularPosts(response.data.popular);
			}

			if(response.data.recent) {
				this.updateRecentPosts(response.data.recent);
			}
		})

	}

	private buildUrl(): string {

		let url = `/api/blog?page=${this.page}&`;

		if(this.popularPosts.length === 0) {
			url += 'popular=true&';
		}

		if(this.recentPosts.length === 0) {
			url += 'recent=true&';
		}

		return url;
	}

	public handlePaginate(payload: number) {
		// Vue Router has no current to push a new route without causing a rerender
		// using straight HTML5 push state works though
		window.history.replaceState({}, '', `${this.$route.path}?page=${payload}`);

		axios.get(`/api/blog?page=${this.page}`).then(response => {
			this.posts = response.data.posts.data as Post[];
		})

	}
}
</script>

<style lang="stylus" scoped>
.post
	margin-bottom 20px

.display-4
	text-align center
</style>

