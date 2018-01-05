<template>
	<v-jumbotron color="primary" dark height="300px">
		<v-container fill-height>
			<v-layout align-center>
				<v-flex text-xs-center>
					<slot></slot>
				</v-flex>
			</v-layout>
		</v-container>
	</v-jumbotron>
</template>
<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';

@Component({})
export default class PageJumbotron extends Vue {

}
</script>
<style lang="stylus" scoped>

</style>