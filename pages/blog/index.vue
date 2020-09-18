<template>
    <div class="blog main-content">
        <template v-if="posts.length !== 0">
            <post-preview
                v-for="(post, i) in posts"
                :key="i"
                :post="post"
            />
        </template>
        <div v-else class="no-posts">
            <h3>No blog posts :(</h3>
        </div>
    </div>
</template>

<script lang="ts">
import Vue from 'vue';

import { BlogPost } from '~/models/BlogPost';
import PostPreview from '~/components/PostPreview.vue';

let posts: BlogPost[] = [];

// Try catch to prevent error when no blog posts exists
try {
    const context = require.context('../../content/blog/posts', false, /\.json$/);
    posts = context
        .keys()
        .map((key): BlogPost => ({
            ...context(key),
            // Add slug property at import time
            slug: `/blog/${key.replace('.json', '').replace('./', '')}`,
        }))
        // Only show published posts
        .filter((post) => post.published)
        .sort((a, b) => (
            new Date(b.date).valueOf() - new Date(a.date).valueOf()
        ));
} catch (e) {
}


export default Vue.extend({
    components: {
        PostPreview,
    },
    data: () => ({
        posts,
    }),
    head: () => ({
        title: 'Blog',
    }),
});
</script>

<style lang="scss" scoped>
.no-posts {
    text-align: center;
    margin-top: 2rem;
}
</style>
