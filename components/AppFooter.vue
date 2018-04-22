<template>
  <footer class="footer">
    <div class="social">
      <a
        href="https://github.com/glitchedmob"
        target="_blank"
        class="socicon-github"
      ></a>
      <a
        href="https://twitter.com/levi_zitting"
        target="_blank"
        class="socicon-twitter"
      ></a>
      <a
        href="https://www.instagram.com/levi_zitting/"
        target="_blank"
        class="socicon-instagram"
      ></a>
      <a
        href="https://www.linkedin.com/in/levi-zitting/"
        target="_blank"
        class="socicon-linkedin"
      ></a>
      <a href="mailto:me@levizitting.com" class="socicon-mail"></a>
    </div>
  </footer>
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

.footer
  padding 2rem 0

.social
  display flex
  justify-content center
  align-content center

  a
    text-decoration none
    font-size 3rem
    margin 0 1rem

.socicon-mail
  position relative
  top .4rem

</style>
