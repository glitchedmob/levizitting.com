<template>
    <article class="blog-post main-content">
        <img v-if="blogPost.image" :src="blogPost.image" :alt="blogPost.title" >
        <h1 class="h3">{{ blogPost.title }}</h1>
        <p class="date">Published {{ humanDate(blogPost.date) }}</p>
        <!-- eslint-disable-next-line vue/no-v-html -->
        <div ref="postBody" class="body" v-html="renderedBody"/>
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

<style lang="scss" scoped>
.blog-post {
    margin: 2rem 0;

    img {
        width: 100%;
        margin: 0 0 1rem;
    }
}

.body {
    margin: 1rem 0 0;

    :deep(*) {
        line-height: 1.8rem;

        img {
            width: auto;
            max-width: 100%;
            margin: 0 auto;
        }

        pre {
            overflow-x: auto;
        }
    }
}
</style>
