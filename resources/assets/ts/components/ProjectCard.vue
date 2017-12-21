<template>
	<v-card>
		<v-card-media :src="project.image" height="200px"></v-card-media>
		<v-card-title>
			<div>
				<h3 class="headline mb-0">{{ project.name }}</h3>
				<div>{{ project.description }}</div>
			</div>
		</v-card-title>
		<v-card-actions>
			<v-btn
				v-for="(link, index) in project.links"
				:key="index"
				:href="link.href"
				target="_blank"
				flat color="secondary" >{{ link.text }}</v-btn>
		</v-card-actions>
	</v-card>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import { Project } from "../models/Project";

@Component({
	props: {
		project: Project
	}
})
export default class ProjectCard extends Vue {

}
</script>