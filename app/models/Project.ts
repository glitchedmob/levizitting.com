interface LinkInfo {
    title: string;
    url: string;
}

export interface Project {
    title: string;
    image?: string;
    description: string;
    links: LinkInfo[];
}
