<template>
  <div class="post-preview">
    <h3>
      <nuxt-link :to="post.slug">{{ post.title }}</nuxt-link>
    </h3>
    <img :src="post.image" :alt="post.title" v-if="post.image">
    <p class="date">{{ post.date }}</p>
    <p class="desc" v-if="post.description">{{ post.description }}</p>
  </div>
</template>

<script lang="ts">
import {
  Component,
  Prop,
  Vue
} from "nuxt-property-decorator"

import { BlogPost } from '../models/BlogPost';

@Component({})
export default class extends Vue {
  @Prop() post: BlogPost;
}
</script>

<style lang="stylus" scoped>

</style>
