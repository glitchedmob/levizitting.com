<template>
    <div class="navigation">
        <p class="h1 title">Levi Zitting</p>
        <nav class="nav">
            <NuxtLink to="/" class="nav-item home-link">Home</NuxtLink>
            <NuxtLink to="/blog" class="nav-item blog-link">Blog</NuxtLink>
            <NuxtLink to="/projects" class="nav-item projets-link">Projects</NuxtLink>
            <NuxtLink to="/speaking" class="nav-item speaking-link">Speaking</NuxtLink>
        </nav>
    </div>
</template>

<style lang="scss" scoped>
@use '~/assets/scss/config.scss' as *;
@use 'sass:map';

.title {
    text-align: center;
    margin: 2rem 0 2.5rem;
}

.nav {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.nav-item {
    transition: all 300ms ease-in-out;
    font-size: $typography-size-6;
    color: map.get($colors, text);
    text-decoration: none;
    border-bottom: 2px solid transparent;
    padding: 0 0 0.5rem;

    &.blog-link.router-link-active,
    &.router-link-exact-active {
        border-bottom: 2px solid #fff;
    }
}
</style>
