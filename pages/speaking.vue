<template>
    <div class="speaking main-content">
        <div v-for="(talk, i) in talks" :key="i" class="talk">
            <h2 class="h3">
                <a :href="talk.url" target="_blank">{{ talk.title }}</a>
            </h2>
            <div class="video">
                <iframe :src="talk.url" frameborder="0"/>
            </div>
        </div>
        <h4 class="reach-out">
            Interested in having me speak?<br >
            Reach out
        </h4>
    </div>
</template>

<script setup lang="ts">
import speakingData from '~/content/pages/speaking.json';

interface Talk {
    title: string;
    url: string;
}

useSeoMeta({
    title: 'Speaking',
});

const talks = speakingData.talks as Talk[];
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
