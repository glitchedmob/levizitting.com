import { Feed } from 'feed';
import path from 'path';
import fs from 'fs';

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

    const blogDir = path.resolve('app/content/blog/posts');
    if (fs.existsSync(blogDir)) {
        const files = fs.readdirSync(blogDir);
        for (const file of files) {
            if (file.endsWith('.json')) {
                const filePath = path.join(blogDir, file);
                const content = fs.readFileSync(filePath, 'utf-8');
                const post = JSON.parse(content);

                if (post.published) {
                    const slug = file.replace('.json', '');
                    const url = `https://www.levizitting.com/blog/${slug}`;
                    feed.addItem({
                        title: post.title,
                        id: url,
                        link: url,
                        description: post.description || 'No description',
                        content: post.body,
                        date: new Date(post.date),
                    });
                }
            }
        }
    }

    const rss = feed.rss2();
    
    setResponseHeader(event, 'Content-Type', 'application/rss+xml');
    return rss;
});
