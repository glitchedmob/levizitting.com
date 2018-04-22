<template>
  <div class="post-preview">
    <h3>
      <nuxt-link :to="post.slug">{{ post.title }}</nuxt-link>
    </h3>
    <img :src="post.image" :alt="post.title" v-if="post.image">
    <p class="date">Published {{ post.date | humanDate }}</p>
    <p class="desc" v-if="post.description">{{ post.description }}</p>
    <nuxt-link class="button" :to="post.slug">Read More</nuxt-link>
  </div>
</template>

<script lang="ts">
import {
  Component,
  Prop,
  Vue
} from "nuxt-property-decorator"

import { humanDate } from '../filters/date-filters'
import { BlogPost } from '../models/BlogPost';

@Component({
  filters: {
    humanDate
  }
})
export default class extends Vue {
  @Prop() post: BlogPost;
}
</script>

<style lang="stylus" scoped>
.post-preview
  margin 2rem 0

  img
    width 100%
</style>
