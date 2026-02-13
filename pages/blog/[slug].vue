<template>
    <article v-if="post" class="blog-post main-content">
        <img v-if="post.image" :src="post.image" :alt="post.title" >
        <h1 class="h3">{{ post.title }}</h1>
        <p class="date">Published {{ humanDate(post.date) }}</p>
        <!-- eslint-disable-next-line vue/no-v-html -->
        <div ref="postBody" class="body" v-html="renderedBody"/>
    </article>
</template>

<script setup lang="ts">
import MarkdownIt from 'markdown-it';
import type { BlogPost } from '~/models/BlogPost';
import { humanDate } from '~/filters/date-filters';

const route = useRoute();

const { data: post } = await useAsyncData<BlogPost | null>(
    `blog-${route.params.slug}`,
    async () => {
        try {
            const slug = route.params.slug as string;
            const module = await import(`~/content/blog/posts/${slug}.json`);
            return module.default as BlogPost;
        } catch {
            return null;
        }
    },
);

const renderedBody = computed(() => {
    if (!post.value?.body) return '';
    const md = new MarkdownIt({
        html: true,
        linkify: true,
        typographer: true,
    });
    return md.render(post.value.body);
});

useHead(() => {
    if (!post.value) return {};

    const meta = [
        { property: 'og:type', content: 'article' },
        {
            hid: 'og:title',
            property: 'og:title',
            content: `Levi Zitting | ${post.value.title}`,
        },
    ];

    if (post.value.image) {
        meta.push({
            hid: 'og:image',
            property: 'og:image',
            content: post.value.image,
        });
    }

    if (post.value.description) {
        meta.push({
            hid: 'og:description',
            property: 'og:description',
            content: post.value.description,
        });
    }

    return {
        title: `Blog | ${post.value.title}`,
        meta,
    };
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
