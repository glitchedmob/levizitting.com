<template>
    <div class="project">
        <h2 class="h3">{{ project.title }}</h2>
        <img v-if="project.image" :src="project.image" :alt="project.title" >
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

<script setup lang="ts">
import type { Project } from '~/models/Project';

interface Props {
    project: Project;
}

defineProps<Props>();
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
