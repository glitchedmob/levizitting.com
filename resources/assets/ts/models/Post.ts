export class Post {
	constructor(
		public id: number,
		public slug: string,
		public title: string,
		public description: string,
		public image: boolean | string,
		public date: number
	) {}

}