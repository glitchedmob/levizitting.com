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
        <p class="mb-4">Published {{ humanDate(blogPost.date) }}</p>
        <!-- eslint-disable-next-line vue/no-v-html -->
        <div class="post-content mt-4" v-html="renderedBody" />
    </article>
</template>

<script setup lang="ts">
import MarkdownIt from 'markdown-it';
import type { BlogPost } from '~/models/BlogPost';
import { humanDate } from '~/filters/date-filters';

const route = useRoute();

const { data: post } = await useAsyncData<BlogPost>(
    `blog-${route.params.slug}`,
    async () => {
        const slug = route.params.slug as string;
        const module = await import(`~/content/blog/posts/${slug}.json`);
        return module.default as BlogPost;
    },
);

if (!post.value) {
    throw createError({ statusCode: 404, statusMessage: 'Post not found' });
}

const blogPost = post.value;

const renderedBody = computed(() => {
    const md = new MarkdownIt({
        html: true,
        linkify: true,
        typographer: true,
    });
    return md.render(blogPost.body);
});

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

.post-content {
    @apply leading-7;
}

.post-content:deep(h1),
.post-content:deep(h2),
.post-content:deep(h3),
.post-content:deep(h4),
.post-content:deep(h5),
.post-content:deep(h6) {
    @apply mt-6 mb-3 font-medium;
}

.post-content:deep(h1) {
    @apply text-3xl leading-tight;
}

.post-content:deep(h2) {
    @apply text-2xl leading-snug;
}

.post-content:deep(h3) {
    @apply text-xl leading-snug;
}

.post-content:deep(h4) {
    @apply text-lg leading-snug;
}

.post-content:deep(p) {
    @apply mb-4;
}

.post-content:deep(img) {
    @apply mx-auto block h-auto max-w-full;
}

.post-content:deep(a) {
    @apply text-text underline transition-all duration-250 ease-in-out;
}

.post-content:deep(a:hover) {
    @apply text-text-muted;
}

.post-content:deep(ul),
.post-content:deep(ol) {
    @apply mb-4 list-inside pl-6;
}

.post-content:deep(ul) {
    @apply list-disc;
}

.post-content:deep(ol) {
    @apply list-decimal;
}

.post-content:deep(li) {
    @apply mb-1;
}

.post-content:deep(blockquote) {
    @apply border-text-muted my-4 border-l-4 pl-4 italic;
}

.post-content:deep(pre) {
    @apply mb-4 overflow-x-auto rounded-md bg-white/10 p-4;
}

.post-content:deep(code) {
    @apply rounded bg-white/10 px-1 py-0.5 font-mono;
}

.post-content:deep(pre code) {
    @apply bg-transparent p-0;
}
</style>
