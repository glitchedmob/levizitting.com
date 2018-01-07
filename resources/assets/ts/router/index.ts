import Vue from 'vue';
import Router from 'vue-router';

const Home = () => import('../views/Home.vue');
const Blog = () => import('../views/Blog.vue');
const BlogPost = () => import('../views/BlogPost.vue');
const Projects = () => import('../views/Projects.vue');
const About = () => import('../views/About.vue');
const Contact = () => import('../views/Contact.vue');
const Error404 = () => import('../views/404.vue');

Vue.use(Router);

export default new Router({
	mode: 'history',
	scrollBehavior(to, from, savedPosition) {
		return {x: 0, y: 0}
	},
	routes: [
		{
			path: '/',
			name: 'home',
			component: Home
		},
		{
			path: '/blog',
			name: 'blog',
			component: Blog
		},
		{
			path: '/blog/:slug',
			name: 'post',
			component: BlogPost
		},
		{
			path: '/projects',
			name: 'projects',
			component: Projects
		},
		{
			path: '/about',
			name: 'about',
			component: About
		},
		{
			path: '/contact',
			name: 'contact',
			component: Contact
		},
		{
			path: '/404',
			name: '404',
			component: Error404
		},
	]
});
