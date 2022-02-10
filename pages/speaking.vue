<template>
    <div class="speaking main-content">
        <div v-for="(talk, i) in talks" :key="i" class="talk">
            <h3>
                <a :href="talk.url" target="_blank">{{ talk.title }}</a>
            </h3>
            <div class="video">
                <iframe :src="talk.url" frameborder="0"></iframe>
            </div>
        </div>
        <h4 class="reach-out">
            Interested in having me speak?<br />
            Reach out
        </h4>
    </div>
</template>

<script lang="ts">
import Vue from 'vue';

import * as speakingPage from '../content/pages/speaking.json';

interface Talk {
    title: string;
    url: string;
}

export default Vue.extend({
    data: () => ({
        talks: speakingPage.talks as Talk[],
    }),
    head: () => ({
        title: 'Speaking',
    }),
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
