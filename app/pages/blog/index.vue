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
useSeoMeta({
    title: 'Blog',
});

const { data: posts } = await useAsyncData('blog-posts', async () => {
    const collection = await queryCollection('blog')
        .where('published', '=', true)
        .order('date', 'DESC')
        .all();

    return collection.map((post) => ({
        ...post,
        slug: post.path,
    }));
});
</script>
