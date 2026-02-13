import { defineCollection, defineContentConfig, z } from '@nuxt/content';

export default defineContentConfig({
    collections: {
        blog: defineCollection({
            type: 'page',
            source: 'blog/*.md',
            schema: z.object({
                title: z.string(),
                description: z.string().optional(),
                image: z.string().optional(),
                publishedDate: z.string().optional(),
            }),
        }),
        talks: defineCollection({
            type: 'data',
            source: 'talks/*.md',
            schema: z.object({
                title: z.string(),
                url: z.string(),
                publishedDate: z.string().optional(),
                description: z.string().optional(),
            }),
        }),
        projects: defineCollection({
            type: 'data',
            source: 'projects/*.md',
            schema: z.object({
                title: z.string(),
                image: z.string().optional(),
                description: z.string(),
                publishedDate: z.string().optional(),
                links: z.array(
                    z.object({
                        title: z.string(),
                        url: z.string(),
                    }),
                ),
            }),
        }),
    },
});
