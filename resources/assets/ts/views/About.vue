<template>
	<div>
		<page-jumbotron>
			<h1 class="display-4">About</h1>
		</page-jumbotron>
		<v-container fluid>
			<v-layout>
				<v-flex xs12 md8 offset-md2>
					<div class="elevation-3 mt-5 pa-3">
						<h1>Hello</h1>
						<h1>Hello</h1>
						<h1>Hello</h1>
						<h1>Hello</h1>
						<h1>Hello</h1>
					</div>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

import PageJumbotron from '../components/PageJumbotron.vue';

@Component({
	components: {
		PageJumbotron
	}
})
export default class About extends Vue	 {

}
</script>

