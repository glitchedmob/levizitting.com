<template>
    <div>
        <div class="mx-auto flex min-h-screen w-full max-w-[600px] flex-col px-6 md:px-0">
            <div class="flex-1">
                <AppNav />
                <main>
                    <NuxtPage />
                </main>
            </div>
            <AppFooter />
        </div>
        <div id="speaking-iframe-container" class="hidden" />
    </div>
</template>
