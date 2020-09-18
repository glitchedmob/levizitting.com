<template>
  <div class="container">
    <div class="above-footer">
      <app-nav />
      <main>
        <transition name="page" mode="out-in">
          <nuxt :key="$route.path"/>
        </transition>
      </main>
    </div>

    <app-footer />
  </div>
</template>

<script lang="ts">
import Vue from 'vue';

import AppNav from '~/components/AppNav.vue';
import AppFooter from '~/components/AppFooter.vue';


export default Vue.extend({
    components: {
        AppNav,
        AppFooter,
    }
});
</script>


<style lang="scss" scoped>
    .page-enter-active,
    .page-leave-active {
        transition: all 250ms ease;
    }

    .page-enter,
    .page-leave-to {
        opacity: 0;
    }

    .page-enter {
        transform: translateX(100px);
    }

    .page-leave-to {
        transform: translateX(-100px);
    }

    .above-footer {
        min-height: 100vh;
    }
</style>

