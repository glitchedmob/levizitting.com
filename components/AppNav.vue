<template>
  <div class="navigation">
    <h1 class="title">Levi Zitting</h1>
    <nav class="nav">
      <nuxt-link to="/" class="nav-item">Home</nuxt-link>
      <nuxt-link to="/blog" class="nav-item">Blog</nuxt-link>
      <nuxt-link to="/projects" class="nav-item">Projects</nuxt-link>
      <nuxt-link to="/speaking" class="nav-item">Speaking</nuxt-link>
      <nuxt-link to="/contact" class="nav-item">Contact</nuxt-link>
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

  .nav
    display flex
    justify-content space-between

  .nav-item
    transition all 300ms ease
    font-size typography-size-6
    color colors-text
    text-decoration none
    border-bottom 2px solid transparent
    padding 0 0 5px 0

    &.active-exact
      border-bottom 2px solid white
</style>
