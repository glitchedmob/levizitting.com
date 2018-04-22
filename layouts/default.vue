<template>
  <div class="container">
    <app-nav />
    <main>
      <transition name="page">
        <nuxt />
      </transition>
    </main>
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

