<template>
    <article v-if="post" class="blog-post main-content">
        <img v-if="post.image" :src="post.image" :alt="post.title" />
        <h1 class="h3">{{ post.title }}</h1>
        <p class="date">Published {{ post.date | humanDate }}</p>
        <div ref="postBody" class="body">
            <vue-markdown
                :anchor-attributes="{
                    target: '_blank',
                    rel: 'noopener noreferrer',
                }"
            >
                {{ post.body }}
            </vue-markdown>
        </div>
    </article>
</template>

<script lang="ts">
import Vue from 'vue';
import { Context } from '@nuxt/types';
import VueMarkdown from 'vue-markdown';

import { humanDate } from '~/filters/date-filters';
import { BlogPost } from '~/models/BlogPost';

export default Vue.extend({
    components: {
        VueMarkdown,
    },
    filters: {
        humanDate,
    },
    async asyncData({ params }: Context): Promise<{ post: BlogPost }> {
        const module = await import(
            '~/content/blog/posts/' + params.slug + '.json'
        );
        const post = module.default as BlogPost;
        return { post };
    },
    head() {
        const post: BlogPost = this.$data.post;

        const meta = [
            { property: 'og:type', content: 'article' },
            {
                hid: 'og:title',
                property: 'og:title',
                content: `Levi Zitting | ${post.title}`,
            },
        ];

        if (post.image) {
            meta.push({
                hid: 'og:image',
                property: 'og:image',
                content: post.image,
            });
        }

        if (post.description) {
            meta.push({
                hid: 'og:description',
                property: 'og:description',
                content: post.description,
            });
        }

        return {
            title: `Blog | ${post.title}`,
            meta,
        };
    },
});
</script>

<style lang="scss" scoped>
.blog-post {
    margin: 2rem 0;

    img {
        width: 100%;
        margin: 0 0 1rem 0;
    }
}

.body {
    margin: 1rem 0 0 0;

    & ::v-deep {
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
