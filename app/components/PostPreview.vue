<template>
    <div class="my-8">
        <h2 class="mb-2 text-2xl font-normal md:text-3xl">
            <NuxtLink
                :to="post.slug"
                class="text-text hover:text-text-muted underline transition-all duration-250 ease-in-out"
            >
                {{ post.title }}
            </NuxtLink>
        </h2>
        <p class="mb-2">Published {{ humanDate(post.date) }}</p>
        <img
            v-if="post.image"
            :src="post.image"
            :alt="post.title"
            class="w-full"
        />
        <p v-if="post.description" class="mt-2">{{ post.description }}</p>
    </div>
</template>

<script setup lang="ts">
import type { PageCollections } from '@nuxt/content';
import { humanDate } from '~/filters/date-filters';

type BlogPost = PageCollections['blog'] & { slug: string };

interface Props {
    post: BlogPost;
}

defineProps<Props>();
</script>
