<template>
  <div class="blog-post main-content" v-if="post">
    <img :src="post.image" :alt="post.title" v-if="post.image">
    <h3>{{ post.title }}</h3>
    <p class="date">Published {{ post.date | humanDate }}</p>
    <div class="body">
      <vue-markdown>
        {{ post.body }}
      </vue-markdown>
    </div>
  </div>
</template>

<script lang="ts">
import {
  Component,
  Vue
} from "nuxt-property-decorator";
import VueMarkdown from 'vue-markdown';

import { humanDate } from '../../filters/date-filters'

@Component({
  components: {
    VueMarkdown
  },
  filters: {
    humanDate
  }
})
export default class extends Vue {
  async asyncData({ params }) {
    let post = await import('~/content/blog/posts/' + params.slug + '.json');
    return { post };
  }
}
</script>

<style lang="stylus" scoped>
  .blog-post
    margin 2rem 0

    img
      width 100%
      margin 0 0 1rem 0

  .body
    margin 1rem 0 0 0

    & /deep/
      line-height 1.8rem
</style>
