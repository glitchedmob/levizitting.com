export class Post {
	constructor(
		public id: number,
		public title: string,
		public slug: string,
		public body: string,
		public image: boolean | string,
		public created_at: string
	) {}
}
