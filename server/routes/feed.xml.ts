import { Feed } from 'feed';
import { queryCollection } from '@nuxt/content/server';

export default defineEventHandler(async (event) => {
    const feed = new Feed({
        title: 'Levi Zitting Blog',
        description: 'A blog about code',
        id: 'https://www.levizitting.com/blog',
        link: 'https://www.levizitting.com/blog',
        language: 'en',
        image: 'https://www.levizitting.com/favicon.ico',
        favicon: 'https://www.levizitting.com/favicon.ico',
        copyright: `All rights reserved ${new Date().getFullYear()}, Levi Zitting`,
        feedLinks: {
            rss2: 'https://www.levizitting.com/feed.xml',
        },
    });

    const posts = await queryCollection(event, 'blog')
        .where('publishedDate', 'IS NOT NULL')
        .order('publishedDate', 'DESC')
        .all();

    for (const post of posts) {
        if (!post.publishedDate) continue;
        const url = `https://www.levizitting.com/blog${post.path}`;
        feed.addItem({
            title: post.title,
            id: url,
            link: url,
            description: post.description || 'No description',
            date: new Date(post.publishedDate),
        });
    }

    const rss = feed.rss2();

    setResponseHeader(event, 'Content-Type', 'application/rss+xml');
    return rss;
});
