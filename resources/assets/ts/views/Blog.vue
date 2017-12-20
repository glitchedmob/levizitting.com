<template>
	<div>
		<h1 class="display-4">Blog</h1>
		<v-container grid-list-lg>
			<v-layout row wrap>
				<v-flex xs12 md8>
					<post-preview v-for="post in posts" :post="post" :key="post.id" class="post"></post-preview>
				</v-flex>
				<v-flex xs12 md4>
					<sidebar></sidebar>
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

import PostPreview from '../components/PostPreview.vue';
import Sidebar from '../components/Sidebar.vue';

@Component({
	components: {
		PostPreview,
		Sidebar
	}
})
export default class Blog extends Vue {
	public posts: Post[] = posts;
}
</script>

<style lang="stylus" scoped>
.post
	margin-bottom 20px

.display-4
	margin 65px 0 10px 0
	text-align center
</style>

