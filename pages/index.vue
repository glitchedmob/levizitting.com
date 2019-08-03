<template>
  <div class="home main-content">
    <h2 class="text">Thanks for stopping by</h2>
    <img :src="profileImg" alt="Levi Zitting profile image" class="profile">
    <p class="img-desc">This is me</p>
    <h4 class="text">I code and sometimes write about it</h4>
    <div class="text">
      <h4>I live in Springfield MO</h4>
      <h4>where I work at <a href="https://emergencme.com" target="_blank">EmergencMe</a></h4>
    </div>
  </div>
</template>

<script lang="ts">
import {
  Component,
  Vue
} from "nuxt-property-decorator"

import * as profileImg from '../assets/images/levi-zitting.jpg'

@Component({})
export default class extends Vue {
  public profileImg = profileImg
}
</script>

<style lang="stylus" scoped>

  .home
    text-align center

  .text
    margin 2rem 0 2.5rem 0

  img.profile
    display block
    width 50%
    margin 0 auto
    border-radius 100%

  .img-desc
    margin-top 1rem

</style>
