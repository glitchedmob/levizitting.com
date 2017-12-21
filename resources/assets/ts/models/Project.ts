export class Project {
	constructor(
		public id: number,
		public name: string,
		public description: string,
		public image: string,
		public links: ({text: string, href: string})[]
	) {}
}