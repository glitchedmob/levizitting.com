<template>
    <div class="text-center">
        <h1 class="mb-10 mt-8 text-4xl font-medium md:text-6xl">Levi Zitting</h1>
        <nav class="flex flex-wrap justify-between">
            <NuxtLink
                to="/"
                class="border-b-2 border-transparent pb-2 text-xl text-text transition-all duration-300 ease-in-out hover:text-text-muted"
                :class="{ 'border-white': $route.path === '/' }"
            >
                Home
            </NuxtLink>
            <NuxtLink
                to="/blog"
                class="border-b-2 border-transparent pb-2 text-xl text-text transition-all duration-300 ease-in-out hover:text-text-muted"
                :class="{ 'border-white': $route.path.startsWith('/blog') }"
            >
                Blog
            </NuxtLink>
            <NuxtLink
                to="/projects"
                class="border-b-2 border-transparent pb-2 text-xl text-text transition-all duration-300 ease-in-out hover:text-text-muted"
                :class="{ 'border-white': $route.path === '/projects' }"
            >
                Projects
            </NuxtLink>
            <NuxtLink
                to="/speaking"
                class="border-b-2 border-transparent pb-2 text-xl text-text transition-all duration-300 ease-in-out hover:text-text-muted"
                :class="{ 'border-white': $route.path === '/speaking' }"
            >
                Speaking
            </NuxtLink>
        </nav>
    </div>
</template>
