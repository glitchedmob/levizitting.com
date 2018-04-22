<template>
  <div class="projects main-content">
    <app-project
      v-for="(project, i) in projects"
      :key="i"
      :project="project"
    />
  </div>
</template>

<script lang="ts">
import {
  Component,
  Vue
} from "nuxt-property-decorator"

import AppProject from '../components/Project.vue';
import { Project } from '../models/Project';

const context = require.context('../content/projects/', false, /\.json$/);
const projects = context.keys().map(key => ({ ...context(key) }))

@Component({
  components: {
    AppProject
  }
})
export default class extends Vue {
  public projects: Project[] = projects;
}
</script>

<style lang="stylus" scoped>
</style>
