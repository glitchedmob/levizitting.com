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
	public projects: null | Project[] = null;

	public created() {
		axios.get('/api/projects').then(response => {
			this.projects = response.data;
		})
	}
}
</script>

<style lang="stylus" scoped>
.display-4
	text-align center
</style>

