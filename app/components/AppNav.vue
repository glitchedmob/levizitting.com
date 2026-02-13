<template>
    <div class="text-center">
        <h1 class="mt-8 mb-10 text-4xl font-medium md:text-6xl">
            Levi Zitting
        </h1>
        <nav class="flex flex-wrap justify-between">
            <NuxtLink
                to="/"
                class="text-text hover:text-text-muted border-b-2 border-transparent pb-2 text-xl transition-all duration-300 ease-in-out"
                :class="{ 'border-white': $route.path === '/' }"
            >
                Home
            </NuxtLink>
            <NuxtLink
                to="/blog"
                class="text-text hover:text-text-muted border-b-2 border-transparent pb-2 text-xl transition-all duration-300 ease-in-out"
                :class="{ 'border-white': $route.path.startsWith('/blog') }"
            >
                Blog
            </NuxtLink>
            <NuxtLink
                to="/projects"
                class="text-text hover:text-text-muted border-b-2 border-transparent pb-2 text-xl transition-all duration-300 ease-in-out"
                :class="{ 'border-white': $route.path === '/projects' }"
            >
                Projects
            </NuxtLink>
            <NuxtLink
                to="/speaking"
                class="text-text hover:text-text-muted border-b-2 border-transparent pb-2 text-xl transition-all duration-300 ease-in-out"
                :class="{ 'border-white': $route.path === '/speaking' }"
            >
                Speaking
            </NuxtLink>
        </nav>
    </div>
</template>
