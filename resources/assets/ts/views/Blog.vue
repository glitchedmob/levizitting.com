<template>
	<v-container>
		<v-layout>
			<v-flex>
				<list-post v-for="post in posts" :post="post" :key="post.id" class="post"></list-post>
			</v-flex>
			<v-flex></v-flex>
		</v-layout>
	</v-container>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import posts from '../testData/posts';
import { Post } from "../models/Post";

import ListPost from '../components/ListPost.vue'

@Component({
	components: {
		ListPost
	}
})
export default class Blog extends Vue {
	public posts: Post[] = posts;
}
</script>

<style lang="stylus" scoped>
.post
	margin-bottom 20px
</style>

