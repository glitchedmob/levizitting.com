<template>
    <div class="speaking main-content">
        <Head>
            <Link rel="preconnect" href="https://www.youtube-nocookie.com" />
            <Link rel="preconnect" href="https://www.google.com" />
            <Link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous" />
            <Link rel="preconnect" href="https://i.ytimg.com" />
        </Head>
        <div v-for="(talk, index) in speakingData.talks" :key="talk.url" class="talk" :data-video-url="talk.url">
            <h2 class="h3">
                <a :href="talk.url" target="_blank">{{ talk.title }}</a>
            </h2>
            <div class="video" :data-iframe-index="index">
                <iframe
                    :src="getEmbedUrl(talk.url)"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    loading="lazy"
                />
            </div>
        </div>
        <h4 class="reach-out">
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

<style lang="scss" scoped>
.talk {
    margin: 2rem 0;
}

.video {
    margin-top: 1rem;
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative;
    height: 0;

    iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
}

.reach-out {
    text-align: center;
}
</style>
