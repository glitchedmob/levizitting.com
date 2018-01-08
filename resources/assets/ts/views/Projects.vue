<template>
	<div>
		<page-jumbotron>
			<h1 class="display-4">Projects</h1>
		</page-jumbotron>
		<v-container grid-list-xl>
			<v-layout wrap>
				<v-flex v-for="(project, index) in projects" :key="index" xs12 md6>
					<project-card :project="project"></project-card>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';
import { State, Mutation } from 'vuex-class';
import axios from 'axios';

import { Project } from "../models/Project";

import PageJumbotron from '../components/PageJumbotron.vue';
import ProjectCard from '../components/ProjectCard.vue';

@Component({
	components: {
		PageJumbotron,
		ProjectCard
	}
})
export default class Projects extends Vue {
	@State public projects: Project[];

	@Mutation public updateProjects: Function;

	public created() {
		if(this.projects.length === 0)
			axios.get('/api/projects').then(response => {
				this.updateProjects(response.data);
			});
	}
}
</script>

<style lang="stylus" scoped>
.display-4
	text-align center
</style>

