<template>
	<div>
		<h1 class="display-4">Blog</h1>
		<v-container grid-list-lg>
			<v-layout row wrap>
				<v-flex xs12 md8>
					<list-post v-for="post in posts" :post="post" :key="post.id" class="post"></list-post>
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

import ListPost from '../components/ListPost.vue';
import Sidebar from '../components/Sidebar.vue';

@Component({
	components: {
		ListPost,
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

