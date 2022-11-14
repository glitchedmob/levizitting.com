import Vue from 'vue';
import VueGtag from 'vue-gtag';
import { Plugin } from '@nuxt/types';

const gtagPlugin: Plugin = ({ app }) => {
    Vue.use(
        VueGtag,
        {
            config: { id: 'G-3JP4Q9JK72' },
        },
        app.router
    );
};

export default gtagPlugin;
