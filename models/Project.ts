export interface Project {
  title: string,
  image?: string,
  description: string,
  links: LinkInfo[]
}

interface LinkInfo {
  title: string,
  url: string
}
