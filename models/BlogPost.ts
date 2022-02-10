export interface BlogPost {
    slug: string;
    published: boolean;
    title: string;
    description?: string;
    image: string;
    body: string;
    date: string;
}
