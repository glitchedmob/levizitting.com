<template>
    <div class="mt-8">
        <h2 class="mb-2 text-3xl font-medium">{{ project.title }}</h2>
        <img v-if="project.image" :src="project.image" :alt="project.title" class="w-full">
        <p class="mb-2">{{ project.description }}</p>
        <div>
            <a
                v-for="(link, i) in project.links"
                :key="i"
                :href="link.url"
                target="_blank"
                class="mr-2 text-text underline transition-all duration-[250ms] ease-in-out hover:text-text-muted"
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
