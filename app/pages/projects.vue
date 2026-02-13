<template>
    <div class="w-full">
        <ProjectItem
            v-for="(project, index) in projects"
            :key="index"
            :project="project"
        />
    </div>
</template>

<script setup lang="ts">
useSeoMeta({
    title: 'Projects',
});

const { data: projects } = await useAsyncData('projects', () =>
    queryCollection('projects')
        .where('publishedDate', 'IS NOT NULL')
        .order('publishedDate', 'DESC')
        .all(),
);
</script>
