<template>
    <div class="projects main-content">
        <app-project
            v-for="(project, i) in projects"
            :key="i"
            :project="project"
        />
    </div>
</template>

<script lang="ts">
import Vue from 'vue';

import AppProject from '../components/Project.vue';
import { Project } from '~/models/Project';

const context = require.context('../content/projects/', false, /\.json$/);
const projects = context.keys().map((key) => ({ ...context(key) } as Project));

export default Vue.extend({
    components: {
        AppProject,
    },
    data: () => ({
        projects,
    }),
    head: () => ({
        title: 'Projects',
    }),
});
</script>
