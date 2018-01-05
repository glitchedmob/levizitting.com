<template>
	<div>
		<page-jumbotron>
			<h1 class="display-4">Projects</h1>
		</page-jumbotron>
		<v-container grid-list-lg>
			<v-layout wrap>
				<v-flex v-for="project in projects" :key="project.id" xs12 md6>
					<project-card :project="project"></project-card>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import {Project} from "../models/Project";
import projects from '../testData/projects';

import PageJumbotron from '../components/PageJumbotron.vue';
import ProjectCard from '../components/ProjectCard.vue';

@Component({
	components: {
		PageJumbotron,
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

