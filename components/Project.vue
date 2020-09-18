<template>
    <div class="project">
        <h3>{{ project.title }}</h3>
        <img :src="project.image" :alt="project.title" v-if="project.image">
        <p>{{ project.description }}</p>
        <div class="links">
            <a
                v-for="(link, i) in project.links"
                :key="i"
                :href="link.url"
                target="_blank"
                class="link"
            >{{ link.title }}</a>
        </div>
    </div>
</template>

<script lang="ts">
import Vue, { PropType } from 'vue';

import { Project } from '~/models/Project';

export default Vue.extend({
    props: {
        project: Object as PropType<Project>,
    },
});
</script>

<style lang="scss" scoped>
.project {
    margin-top: 2rem;

    img {
        width: 100%;
    }

    a {
        margin: 0 0.5rem 0 0;
    }
}
</style>
