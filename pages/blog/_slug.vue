<template>
  <div class="blog-post main-content">

  </div>
</template>

<script lang="ts">
import {
  Component,
  Vue
} from "nuxt-property-decorator";


@Component({})
export default class extends Vue {
  async asyncData({ params }) {
    let post = await import('~/content/blog/posts/' + params.slug + '.json');
    return post;
  }
}
</script>

<style lang="stylus" scoped>
  .blog-post
    margin 2rem 0
</style>
