<template>
    <div>
        <div class="container">
            <div class="above-footer">
                <AppNav />
                <main>
                    <NuxtPage />
                </main>
            </div>
            <AppFooter />
        </div>
        <div id="speaking-iframe-container" style="display: none" />
    </div>
</template>

<style lang="scss" scoped>
.page-enter-active,
.page-leave-active {
    transition: all 250ms ease;
}

.page-enter-from,
.page-leave-to {
    opacity: 0;
}

.page-enter-from {
    transform: translateX(100px);
}

.page-leave-to {
    transform: translateX(-100px);
}

.above-footer {
    min-height: 100vh;
}
</style>
