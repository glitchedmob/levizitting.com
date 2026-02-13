import { defineCollection, defineContentConfig, z } from '@nuxt/content';

export default defineContentConfig({
    collections: {
        blog: defineCollection({
            type: 'page',
            source: 'blog/*.md',
            schema: z.object({
                published: z.boolean(),
                title: z.string(),
                description: z.string().optional(),
                image: z.string().optional(),
                date: z.string(),
            }),
        }),
    },
});
