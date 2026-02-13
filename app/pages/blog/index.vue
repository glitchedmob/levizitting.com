<template>
    <div class="w-full">
        <template v-if="posts && posts.length !== 0">
            <PostPreview v-for="(post, i) in posts" :key="i" :post="post" />
        </template>
        <div v-else class="mt-8 text-center">
            <p class="text-3xl font-medium md:text-2xl">No blog posts :(</p>
        </div>
    </div>
</template>

<script setup lang="ts">
import type { BlogPost } from '~/models/BlogPost';

useSeoMeta({
    title: 'Blog',
});

const { data: posts } = await useAsyncData<BlogPost[]>('blog-posts', async () => {
    // Use import.meta.glob to load all blog posts at build time
    const modules = import.meta.glob('~/content/blog/posts/*.json');
    const loadedPosts: BlogPost[] = [];

    for (const path in modules) {
        const moduleFn = modules[path];
        if (!moduleFn) continue;
        const module = await moduleFn();
        const post = (module as { default: BlogPost }).default;
        const slug = path
            .replace('/content/blog/posts/', '')
            .replace('.json', '');

        loadedPosts.push({
            ...post,
            slug: `/blog/${slug}`,
        });
    }

    return loadedPosts
        .filter((post) => post.published)
        .sort(
            (a, b) =>
                new Date(b.date).getTime() - new Date(a.date).getTime(),
        );
});
</script>
