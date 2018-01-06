<template>
	<v-container grid-list-lg>
		<v-layout row wrap>
			<v-flex xs12 md8>
				<v-card>
					<div class="post-image" v-if="post.image">
						<img :src="post.image" :alt="post.title">
					</div>
					<v-card-title primary-title>
						<div>
							<h2 class="headline mb-0">{{ post.title }}</h2>
							<div>Published on: {{ post.date }}</div>
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

import * as Prism from '../../lib/prism/prism'


import BlogSidebar from '../components/BlogSidebar.vue';

@Component({
	components: {
		BlogSidebar
	}
})
export default class Post extends Vue {
	public post = {
		title: 'Post 1',
		image: 'http://via.placeholder.com/800x400',
		date: 'Nov 3, 2015',
		body: `
			<h2>Heyo</h2>
			<ul>
				<li>hello 1</li>
				<li>hello 1</li>
				<li>hello 1</li>
				<li>hello 1</li>
			</ul>

			<code>Hello nerd</code>

			<pre><code class="language-typescript" lang="typescript">
interface User {
  firstName: string;
  lastName: string;
  age: number;
}

const bob: User = {
  firstName: 'Bob',
  lastName: 'Johnson',
  age: 25
}
</code></pre>

			<p>I'm the main body hooray</p>
		`
	};

	public mounted() {
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

			a
				font-family Roboto
				background-color #009688
				color #FFF
				padding 5px 10px
				border-radius 2px
				box-shadow 0px 3px 1px -2px rgba(0,0,0,0.2), 0px 2px 2px 0px rgba(0,0,0,0.14), 0px 1px 5px 0px rgba(0,0,0,0.12)
</style>