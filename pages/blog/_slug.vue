<template>
  <article class="blog-post main-content" v-if="post">
    <img :src="post.image" :alt="post.title" v-if="post.image">
    <h3>{{ post.title }}</h3>
    <p class="date">Published {{ post.date | humanDate }}</p>
    <div class="body">
      <vue-markdown>
        {{ post.body }}
      </vue-markdown>
    </div>
  </article>
</template>

<script lang="ts">
import {
  Component,
  Vue
} from "nuxt-property-decorator";
import VueMarkdown from 'vue-markdown';

import { humanDate } from '../../filters/date-filters';
import { BlogPost } from '../../models/BlogPost';

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
    let post: BlogPost = await import('~/content/blog/posts/' + params.slug + '.json');
    return { post };
  }

  public head() {
    return {
      title: `Blog | ${this.$data.post.title}`,
      meta: [
        { property: 'og:type', content: 'article' },
        { property: 'og:title', content: `Levi Zitting | ${this.$data.post.title}` },
        this.$data.post.image ? { property: 'og:image', content: this.$data.post.image } : {},
        this.$data.post.description ? { property: 'og:description', content: this.$data.post.description } : {},
      ]
    }
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

      img
        width auto
        max-width 100%
        margin 0 auto

      pre
        overflow-x auto

</style>
