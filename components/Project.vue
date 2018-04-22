<template>
  <div class="project">
    <h3>{{ project.title }}</h3>
    <img :src="project.image" :alt="project.title" v-if="project.image">
    <p>{{ project.description }}</p>
    <div class="links">
      <a
        v-for="(link, i) in project.links"
        :key="i"
        :href="link.url"
        class="link"
      >
        {{ link.title }}
      </a>
    </div>
  </div>
</template>

<script lang="ts">
import {
  Component,
  Prop,
  Vue
} from "nuxt-property-decorator"

import { Project } from '../models/Project'

@Component({})
export default class extends Vue {
  @Prop() public project: Project
}
</script>

<style lang="stylus" scoped>
  .project
    margin-top 2rem

    img
      width 100%

    a
      margin 0 .5rem 0 0
</style>
