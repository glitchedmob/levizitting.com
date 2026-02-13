<template>
    <div class="blog main-content">
        <template v-if="posts.length !== 0">
            <PostPreview v-for="(post, i) in posts" :key="i" :post="post" />
        </template>
        <div v-else class="no-posts">
            <p class="h3">No blog posts :(</p>
        </div>
    </div>
</template>

<script setup lang="ts">
import type { BlogPost } from '~/models/BlogPost';

useHead({
    title: 'Blog',
});

const posts = ref<BlogPost[]>([]);

onMounted(async () => {
    try {
        // Use import.meta.glob to load all blog posts
        const modules = import.meta.glob('~/content/blog/posts/*.json');
        const loadedPosts: BlogPost[] = [];

        for (const path in modules) {
            const module = await modules[path]();
            const post = (module as { default: BlogPost }).default;
            const slug = path
                .replace('/content/blog/posts/', '')
                .replace('.json', '');

            loadedPosts.push({
                ...post,
                slug: `/blog/${slug}`,
            });
        }

        posts.value = loadedPosts
            .filter((post) => post.published)
            .sort(
                (a, b) =>
                    new Date(b.date).getTime() - new Date(a.date).getTime(),
            );
    } catch {
        // Silent fail - no posts will show
    }
});
</script>

<style lang="scss" scoped>
.no-posts {
    text-align: center;
    margin-top: 2rem;
}
</style>
