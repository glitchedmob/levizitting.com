<template>
	<v-footer dark color="primary">
		<div>© {{ new Date().getFullYear() }}</div>
	</v-footer>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

@Component({})
export default class AppFooter extends Vue {

}
</script>

