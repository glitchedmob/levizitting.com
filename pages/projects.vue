<template>
    <div class="projects main-content">
        <Project v-for="(project, i) in projects" :key="i" :project="project" />
    </div>
</template>

<script setup lang="ts">
import type { Project } from '~/models/Project';

useHead({
    title: 'Projects',
});

const projects = ref<Project[]>([]);

onMounted(async () => {
    const modules = import.meta.glob('~/content/projects/*.json');
    const loadedProjects: Project[] = [];

    for (const path in modules) {
        const module = await modules[path]();
        loadedProjects.push((module as { default: Project }).default);
    }

    projects.value = loadedProjects;
});
</script>
