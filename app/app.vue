<template>
    <NuxtLayout>
        <NuxtPage />
    </NuxtLayout>
</template>

<script setup lang="ts">
useSeoMeta({
    titleTemplate: (title) =>
        title ? `Levi Zitting | ${title}` : 'Levi Zitting | Software Developer',
    description: 'A blog about code',
    ogSiteName: 'Levi Zitting',
    ogType: 'website',
});

useHead({
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
    meta: [{ name: 'theme-color', content: '#263238' }],
});
</script>
