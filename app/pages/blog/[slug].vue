<template>
    <article class="mt-8 w-full">
        <img
            v-if="blogPost.image"
            :src="blogPost.image"
            :alt="blogPost.title"
            class="mb-4 w-full"
        />
        <h1 class="mb-2 text-2xl font-medium md:text-3xl">
            {{ blogPost.title }}
        </h1>
        <p v-if="blogPost.publishedDate" class="mb-4">
            Published {{ humanDate(blogPost.publishedDate) }}
        </p>
        <ContentRenderer :value="blogPost" class="post-content mt-4" />
    </article>
</template>

<script setup lang="ts">
import { humanDate } from '~/filters/date-filters';

const route = useRoute();

const { data: post } = await useAsyncData(
    `blog-${route.params.slug}`,
    async () =>
        await queryCollection('blog')
            .path(`/blog/${route.params.slug}`)
            .first(),
);

if (!post.value) {
    throw createError({ statusCode: 404, statusMessage: 'Post not found' });
}

const blogPost = post.value;

useSeoMeta({
    title: `Blog | ${blogPost.title}`,
    description: blogPost.description,
    ogType: 'article',
    ogTitle: blogPost.title,
    ogDescription: blogPost.description,
    ogImage: blogPost.image,
});
</script>

<style scoped>
@reference "../../assets/css/main.css";

:deep(.post-content) {
    @apply leading-7;
}

:deep(.post-content h1),
:deep(.post-content h2),
:deep(.post-content h3),
:deep(.post-content h4),
:deep(.post-content h5),
:deep(.post-content h6) {
    @apply mt-6 mb-3 font-medium;
}

:deep(.post-content h1) {
    @apply text-3xl leading-tight;
}

:deep(.post-content h2) {
    @apply text-2xl leading-snug;
}

:deep(.post-content h3) {
    @apply text-xl leading-snug;
}

:deep(.post-content h4) {
    @apply text-lg leading-snug;
}

:deep(.post-content p) {
    @apply mb-4;
}

:deep(.post-content img) {
    @apply mx-auto block h-auto max-w-full;
}

:deep(.post-content a) {
    @apply text-text underline transition-all duration-250 ease-in-out;
}

:deep(.post-content a:hover) {
    @apply text-text-muted;
}

:deep(.post-content ul),
:deep(.post-content ol) {
    @apply mb-4 list-inside pl-6;
}

:deep(.post-content ul) {
    @apply list-disc;
}

:deep(.post-content ol) {
    @apply list-decimal;
}

:deep(.post-content li) {
    @apply mb-1;
}

:deep(.post-content blockquote) {
    @apply border-text-muted my-4 border-l-4 pl-4 italic;
}

:deep(.post-content pre) {
    @apply mb-4 overflow-x-auto rounded-md bg-white/10 p-4;
}

:deep(.post-content code) {
    @apply rounded bg-white/10 px-1 py-0.5 font-mono;
}

:deep(.post-content pre code) {
    @apply bg-transparent p-0;
}
</style>
