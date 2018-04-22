<template>
  <div class="speaking main-content">
    <div class="talk" v-for="(talk, i) in talks" :key="i">
      <h3>
        <a :href="talk.url" target="_blank">{{ talk.title }}</a>
      </h3>
      <div class="video">
        <iframe :src="talk.url" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import {
  Component,
  Vue
} from "nuxt-property-decorator"

import * as speakingPage from '../content/pages/speaking.json';

interface Talk {
  title: string,
  url: string
}

@Component({})
export default class extends Vue {
  public talks: Talk[] = speakingPage.talks;
}
</script>

<style lang="stylus" scoped>
  .talk
    margin 2rem 0

  .video
    margin-top 1rem
    overflow hidden
    padding-bottom 56.25%
    position relative
    height 0

    iframe
      left 0
      top 0
      height 100%
      width 100%
      position absolute
</style>
