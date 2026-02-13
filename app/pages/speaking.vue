<template>
    <div class="w-full">
        <Head>
            <Link rel="preconnect" href="https://www.youtube-nocookie.com" />
            <Link rel="preconnect" href="https://www.google.com" />
            <Link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous" />
            <Link rel="preconnect" href="https://i.ytimg.com" />
        </Head>
        <div
            v-for="(talk, index) in speakingData.talks"
            :key="talk.url"
            class="my-8"
            :data-video-url="talk.url"
        >
            <h2 class="mb-4 text-2xl font-medium md:text-3xl">
                <a
                    :href="talk.url"
                    target="_blank"
                    class="text-text underline transition-all duration-[250ms] ease-in-out hover:text-text-muted"
                >
                    {{ talk.title }}
                </a>
            </h2>
            <div class="video-container mt-6" :data-iframe-index="index">
                <iframe
                    :src="getEmbedUrl(talk.url)"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    loading="lazy"
                />
            </div>
        </div>
        <h4 class="text-center text-2xl font-medium md:text-xl">
            Interested in having me speak?<br>
            Reach out
        </h4>
    </div>
</template>

<script setup lang="ts">
import { onMounted } from 'vue';
import { onBeforeRouteLeave } from 'vue-router';
import speakingData from '~/content/pages/speaking.json';

declare global {
    interface Element {
        moveBefore(node: Node, child: Node | null): void;
    }
}

useSeoMeta({
    title: 'Speaking'
});

function getEmbedUrl(url: string): string {
    if (!url.includes('youtube.com')) return url;
    const id = new URL(url).searchParams.get('v');
    return id ? `https://www.youtube-nocookie.com/embed/${id}` : url;
}

// Preserve iframe state across navigation. Vue destroys iframes on unmount, causing
// videos to reload. We stash them in a persistent container before leaving, then
// restore them on return. No-op if moveBefore API isn't available.

function restoreCachedIframes() {
    if (typeof Element.prototype.moveBefore !== 'function') return;

    const container = document.getElementById('speaking-iframe-container');
    if (!container) return;

    const slots = document.querySelectorAll<HTMLDivElement>('[data-iframe-index]');
    const talks = speakingData.talks;

    // Move cached iframes from container back to their slots
    slots.forEach((slot, index) => {
        const talk = talks[index];
        if (!talk) return;

        const cached = container.querySelector(`iframe[data-video-url="${talk.url}"]`);
        if (cached) {
            slot.innerHTML = '';
            slot.moveBefore(cached, null);
        }
    });

    // Clean up any remaining orphaned iframes in container
    container.querySelectorAll('iframe').forEach(iframe => iframe.remove());
}

function cacheIframesToContainer() {
    if (typeof Element.prototype.moveBefore !== 'function') return;

    const container = document.getElementById('speaking-iframe-container');
    if (!container) return;

    const slots = document.querySelectorAll<HTMLDivElement>('[data-iframe-index]');
    const talks = speakingData.talks;

    // Move iframes from slots to the hidden container
    slots.forEach((slot, index) => {
        const talk = talks[index];
        const iframe = slot.querySelector('iframe');
        if (iframe && talk) {
            iframe.setAttribute('data-video-url', talk.url);
            container.moveBefore(iframe, null);
        }
    });
}

onMounted(() => {
    restoreCachedIframes();
});

onBeforeRouteLeave(() => {
    cacheIframesToContainer();
});
</script>

<style scoped>
@reference "../assets/css/main.css";

.video-container {
    @apply relative h-0 overflow-hidden;
    padding-bottom: 56.25%;
}

.video-container iframe {
    @apply absolute top-0 left-0 h-full w-full;
}
</style>
