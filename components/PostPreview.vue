<template>
    <div class="post-preview">
        <h2 class="h3">
            <NuxtLink :to="post.slug">{{ post.title }}</NuxtLink>
        </h2>
        <p class="date">Published {{ humanDate(post.date) }}</p>
        <img v-if="post.image" :src="post.image" :alt="post.title" >
        <p v-if="post.description" class="desc">{{ post.description }}</p>
    </div>
</template>

<script setup lang="ts">
import type { BlogPost } from '~/models/BlogPost';
import { humanDate } from '~/filters/date-filters';

interface Props {
    post: BlogPost;
}

defineProps<Props>();
</script>

<style lang="scss" scoped>
.post-preview {
    margin: 2rem 0;

    img {
        width: 100%;
    }
}
</style>
