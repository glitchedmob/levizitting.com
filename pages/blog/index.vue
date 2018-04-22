<template>
  <div class="blog main-content">
    <template v-if="posts.length != 0">
      <post-preview
        v-for="(post, i) in posts"
        :key="i"
        :post="post"
      />
    </template>
    <div v-else class="no-posts">
      <h3>No blog posts :(</h3>
    </div>
  </div>
</template>

<script lang="ts">
import {
  Component,
  Vue
} from "nuxt-property-decorator"

import { BlogPost } from '../../models/BlogPost';
import PostPreview from '../../components/PostPreview.vue';

let posts: BlogPost[] = [];

// Try catch to prevent error when no blog posts exists
try {
  const context = require.context('../../content/blog/posts', false, /\.json$/);
  posts = context
    .keys()
    .map(key => ({
      ...context(key),
      // Add slug property at import time
      slug: `/blog/${key.replace('.json', '').replace('./', '')}`
    }))
    // Only show published posts
    .filter((post: BlogPost) => post.published);
} catch(e) { }

@Component({
  components: {
    PostPreview
  }
})
export default class extends Vue {
  public posts: BlogPost[] = posts;

  public head() {
    return {
      title: 'Blog'
    }
  }
}
</script>

<style lang="stylus" scoped>
  .no-posts
    text-align center
    margin-top 2rem
</style>
