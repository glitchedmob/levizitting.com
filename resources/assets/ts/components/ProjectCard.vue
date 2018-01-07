<template>
	<v-card height="450px">
		<v-layout column fill-height justify-content-space-between>
			<v-flex>
				<v-card-media :src="`/images/projects/${project.image}`" height="250px"></v-card-media>
			</v-flex>
			<v-flex>
				<v-card-text>
					<div>
						<h3 class="headline mb-0">{{ project.title }}</h3>
						<div>{{ project.description }}</div>
					</div>
				</v-card-text>
			</v-flex>
			<v-flex d-flex align-end>
				<v-card-actions>
					<v-btn
						v-for="(link, index) in links"
						:key="index"
						:href="link.link"
						target="_blank"
						flat color="secondary" >{{ link.title }}</v-btn>
				</v-card-actions>
			</v-flex>
		</v-layout>
	</v-card>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import { Project } from "../models/Project";

@Component({
	props: ['project']
})
export default class ProjectCard extends Vue {
	public project: Project;

	public links = JSON.parse(this.project.links);
}
</script>