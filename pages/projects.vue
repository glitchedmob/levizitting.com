<template>
    <div class="projects main-content">
        <ProjectItem v-for="(project, i) in projects" :key="i" :project="project" />
    </div>
</template>

<script setup lang="ts">
import type { Project } from '~/models/Project';

useHead({
    title: 'Projects',
});

const { data: projects } = await useAsyncData<Project[]>('projects', async () => {
    const modules = import.meta.glob('~/content/projects/*.json');
    const loadedProjects: Project[] = [];

    for (const path in modules) {
        const module = await modules[path]();
        loadedProjects.push((module as { default: Project }).default);
    }

    return loadedProjects;
});
</script>
