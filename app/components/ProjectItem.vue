<template>
    <div class="mt-8">
        <h2 class="mb-2 text-2xl font-medium md:text-3xl">
            {{ project.title }}
        </h2>
        <img
            v-if="project.image"
            :src="project.image"
            :alt="project.title"
            class="w-full"
        />
        <p class="mb-2">{{ project.description }}</p>
        <div>
            <a
                v-for="(link, i) in project.links"
                :key="i"
                :href="link.url"
                target="_blank"
                class="text-text hover:text-text-muted mr-2 underline transition-all duration-250 ease-in-out"
            >
                {{ link.title }}
            </a>
        </div>
    </div>
</template>

<script setup lang="ts">
import type { Collections } from '@nuxt/content';

interface Props {
    project: Collections['projects'];
}

defineProps<Props>();
</script>
