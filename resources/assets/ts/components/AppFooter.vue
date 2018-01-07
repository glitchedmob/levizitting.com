<template>
	<v-footer dark color="primary700" class="pa-3" height="-1">
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

