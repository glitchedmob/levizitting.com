<template>
  <div class="navigation">
    <h1 class="title">Levi Zitting</h1>
    <nav class="nav">
      <nuxt-link to="/" class="nav-item home-link">Home</nuxt-link>
      <nuxt-link to="/blog" class="nav-item blog-link">Blog</nuxt-link>
      <nuxt-link to="/projects" class="nav-item projets-link">Projects</nuxt-link>
      <nuxt-link to="/speaking" class="nav-item speaking-link">Speaking</nuxt-link>
    </nav>
  </div>
</template>

<script lang="ts">
import {
  Component,
  Vue
} from "nuxt-property-decorator"

@Component({})
export default class extends Vue {

}
</script>

<style lang="stylus" scoped>
  @import '../assets/stylus/config.styl'

  .title
    text-align center
    margin 2rem 0 2.5rem 0

  .nav
    display flex
    justify-content space-between
    flex-wrap wrap

  .nav-item
    transition all 300ms ease-in-out
    font-size typography-size-6
    color colors-text
    text-decoration none
    border-bottom 2px solid transparent
    padding 0 0 .5rem 0

    &.blog-link.active,
    &.active-exact
      border-bottom 2px solid #FFF
</style>
