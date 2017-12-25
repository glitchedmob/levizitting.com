<template>
	<v-card>
		<div class="blog-image" v-if="post.image">
			<img :src="post.image" :alt="post.title">
		</div>
		<v-card-title primary-title>
			<div>
				<h2 class="headline mb-0">{{ post.title }}</h2>
				<div>Published on: {{ post.date }}</div>
			</div>
		</v-card-title>
		<v-card-text>{{ post.description }}</v-card-text>
		<v-card-actions>
			<v-btn
				flat
				color="secondary"
				append
	 			:to="{ name: 'post', params: { slug: post.slug }}">
				Read More
			</v-btn>
		</v-card-actions>
	</v-card>
</template>

<script lang="ts">
	import Vue from 'vue';
	import Component from 'vue-class-component';

	import { Post } from "../models/Post";

	@Component({
		props: {
			post: Post
		}
	})
	export default class PostPreview extends Vue {

	}
</script>

<style lang="stylus" scoped>
.blog-image
	max-height 600px
	width 100%
	overflow hidden

img
	transform translateX(-50%)
	margin-left 50%
</style>

