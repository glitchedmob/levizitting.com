<template>
  <div class="container">
    <app-nav />
    <transition name="page">
      <nuxt />
    </transition>
  </div>
</template>

<script lang="ts">
import {
  Component,
  Vue
} from "nuxt-property-decorator"

import AppNav from '../components/AppNav.vue';

@Component({
  components: {
    AppNav
  }
})
export default class extends Vue {

}
</script>


<style lang="stylus" scoped>

</style>

