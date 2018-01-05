import Vue from 'vue';
import Router from 'vue-router';

import Home from '../views/Home.vue';
import Blog from '../views/Blog.vue';
import Post from '../views/Post.vue';
import Projects from '../views/Projects.vue';
import About from '../views/About.vue';
import Contact from '../views/Contact.vue';
import Error404 from '../views/404.vue';

Vue.use(Router);

export default new Router({
    mode: 'history',
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
            component: Post
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
