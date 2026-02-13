<template>
    <div>
        <div class="mx-auto flex min-h-screen w-full max-w-[600px] flex-col px-6 md:px-0">
            <AppNav />
            <main class="flex flex-1 flex-col">
                <NuxtPage />
            </main>
            <AppFooter class="mt-6" />
        </div>
        <div id="speaking-iframe-container" class="hidden" />
    </div>
</template>
