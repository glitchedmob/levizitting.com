<template>
	<v-container grid-list-lg>
		<v-layout row wrap>
			<v-flex xs12 md8>
				<v-card v-if="post !== null">
					<div class="post-image" v-if="post.image">
						<img :src="`/images/blog/${post.image}`" :alt="post.title">
					</div>
					<v-card-title primary-title>
						<div>
							<h2 class="headline mb-0">{{ post.title }}</h2>
							<div>Published on: {{ post.created_at }}</div>
						</div>
					</v-card-title>
					<div class="pa-4 post-body" v-html="post.body">

					</div>
				</v-card>
			</v-flex>
			<v-flex xs12 md4>
				<blog-sidebar />
			</v-flex>
		</v-layout>
	</v-container>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';
import { State, Mutation } from 'vuex-class';
import axios from 'axios';

import * as Prism from '../../lib/prism/prism'

import BlogSidebar from '../components/BlogSidebar.vue';
import { Post } from '../models/Post';

@Component({
	components: {
		BlogSidebar
	},

	watch: {
		'$route': 'getPost'
	}
})
export default class BlogPost extends Vue {
	public post: null | Post = null;

	@State public popularPosts: any[];
	@State public recentPosts: any[];
	@Mutation public updatePopularPosts: Function;
	@Mutation public updateRecentPosts: Function;

	public created() {
		this.getPost();
	}

	public getPost() {
		axios.get(this.buildUrl()).then(response => {
			console.log(response);

			this.post = response.data.post as Post;

			if(response.data.popular) {
				this.updatePopularPosts(response.data.popular);
			}

			if(response.data.recent) {
				this.updateRecentPosts(response.data.recent);
			}

			//this.highlight();
		})
	}


	private buildUrl(): string {
		// @Store let recentPosts;
		// @Store let popularPosts;

		let url = `/api/blog/${this.$route.params.slug}?`;

		if(this.popularPosts.length === 0) {
			url += 'popular=true&';
		}

		if(this.recentPosts.length === 0) {
			url += 'recent=true&';
		}

		return url;
	}

	public updated(): void {
		(Prism as any).highlightAll();
	}
 }

</script>

<style lang="stylus" scoped>
	.post-image
		max-height 600px
		width 100%
		overflow hidden

		img
			transform translateX(-50%)
			margin-left 50%

	.post-body
		ul
			margin-left 10px

</style>

<style lang="stylus">
	.post-body
		pre
			margin 5px 0

			& > code
				background transparent
				box-shadow none
				font-family: 'Roboto Mono', monospace;
				font-weight 400
				display block
				width 100%

		.toolbar
			background transparent
			box-shadow none

			a
				font-family Roboto
				background-color #009688
				color #FFF
				padding 5px 10px
				border-radius 2px
				box-shadow 0px 3px 1px -2px rgba(0,0,0,0.2), 0px 2px 2px 0px rgba(0,0,0,0.14), 0px 1px 5px 0px rgba(0,0,0,0.12)
</style>