<template>
  <div class="project">
    <h3>{{ project.title }}</h3>
    <img :src="project.image" :alt="project.title">
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

import { Project } from '../models/Project.ts'

@Component({})
export default class extends Vue {
  @Prop() public project: Project
}
</script>

<style lang="stylus" scoped>
</style>
