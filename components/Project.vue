<template>
    <div class="project">
        <h2 class="h3">{{ project.title }}</h2>
        <img v-if="project.image" :src="project.image" :alt="project.title" />
        <p>{{ project.description }}</p>
        <div class="links">
            <a
                v-for="(link, i) in project.links"
                :key="i"
                :href="link.url"
                target="_blank"
                class="link"
            >
                {{ link.title }}
            </a>
        </div>
    </div>
</template>

<script lang="ts">
import Vue, { PropType } from 'vue';

import { Project } from '~/models/Project';

export default Vue.extend({
    props: {
        project: {
            type: Object as PropType<Project>,
            required: true,
        },
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
