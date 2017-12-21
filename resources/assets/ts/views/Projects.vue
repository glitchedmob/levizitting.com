<template>
	<v-container grid-list-lg>
		<h1 class="display-4 mt-5 mb-3" text-xs-center>Projects</h1>
		<v-layout wrap>
			<v-flex v-for="project in projects" :key="project.id" xs12 md6>
				<project-card :project="project"></project-card>
			</v-flex>
		</v-layout>
	</v-container>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import {Project} from "../models/Project";
import projects from '../testData/projects';

import ProjectCard from '../components/ProjectCard.vue';

@Component({
	components: {
		ProjectCard
	}
})
export default class Projects extends Vue {
	public projects: Project[];

	public created() {
		this.projects = projects;
	}
}
</script>

<style lang="stylus" scoped>
.display-4
	text-align center
</style>

