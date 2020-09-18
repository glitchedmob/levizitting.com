<template>
    <div class="post-preview">
        <h3>
            <nuxt-link :to="post.slug">{{ post.title }}</nuxt-link>
        </h3>
        <p class="date">Published {{ post.date | humanDate }}</p>
        <img :src="post.image" :alt="post.title" v-if="post.image">
        <p class="desc" v-if="post.description">{{ post.description }}</p>
    </div>
</template>

<script lang="ts">
import Vue, { PropType } from 'vue';

import { humanDate } from '~/filters/date-filters';
import { BlogPost } from '~/models/BlogPost';

export default Vue.extend({
    props: {
        post: Object as PropType<BlogPost>,
    },
    filters: {
        humanDate,
    },
});
</script>

<style lang="scss" scoped>
.post-preview {
    margin: 2rem 0;

    img {
        width: 100%;
    }
}
</style>
