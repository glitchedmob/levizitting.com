<template>
	<div>
		<page-jumbotron>
			<h1 class="display-4">Contact</h1>
		</page-jumbotron>

		<v-container fluid>
			<v-layout>
				<v-flex xs12 md8 offset-md2>
					<div class="elevation-3 pa-5">

						<h2 class="display-1 text-xs-center opening">Trying to get a hold of me? Feel free to shoot me an email. Unless you're sending spam, I hate that stuff</h2>

						<p class="text-xs-center email my-5">
							<v-icon x-large>mail</v-icon>
							: <a href="mailto:me@levizitting.com">me@levizitting.com</a>
						</p>

						<h2 class="display-1 my-3 text-xs-center">Contact forms more of your thing?</h2>

						<v-form>
							<v-container fluid grid-list-xl>
								<v-layout wrap>
									<v-flex xs12 md6>
										<v-text-field label="Name" required color="secondary" v-model="form.name"></v-text-field>
									</v-flex>
									<v-flex xs12 md6>
										<v-text-field label="Email" required color="secondary" v-model="form.email"></v-text-field>
									</v-flex>
									<v-flex xs12>
										<v-text-field label="Subject" required color="secondary" v-model="form.subject"></v-text-field>
									</v-flex>
									<v-flex xs12>
										<v-text-field label="Message" multi-line required color="secondary" v-model="form.message"></v-text-field>
									</v-flex>
									<v-flex xs12 class="text-xs-right">
										<v-btn class="text-xs-right" color="secondary" @click="submit">Submit</v-btn>
									</v-flex>
								</v-layout>
							</v-container>
						</v-form>

						<v-snackbar bottom left :timeout="3000" v-model="successToast">
							Message received! I'll get back to you ASAP
							<v-btn flat color="secondary" @click.native="successToast = false">Close</v-btn>
						</v-snackbar>

						<v-snackbar bottom left :timeout="8000" v-model="serverErrorToast" multi-line>
							Oh no. Looks like there's a bug here. Care to shoot me an email and tell me what happened?
							<v-btn flat color="secondary" href="mailto:me@levizitting.com">Email</v-btn>
							<v-btn flat color="error" @click.native="serverErrorToast = false">Close</v-btn>
						</v-snackbar>

					</div>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script lang="ts">
import Vue from 'vue';
import Component from 'vue-class-component';
import axios from 'axios';

import PageJumbotron from '../components/PageJumbotron.vue';


@Component({
	components: {
		PageJumbotron
	}
})
export default class Contact extends Vue {

	public form = {
		name: '',
		email: '',
		subject: '',
		message: ''
	};

	public successToast = false;
	public serverErrorToast = false;

	public submit() {
		axios.post('/api/contact', this.form).then(response => {
			if(response.status >= 300) {
				this.serverErrorToast = true;
			} else {
				this.successToast = true;
			}
		})
	}
}
</script>

<style lang="stylus" scoped>
	.opening
		font-weight 200

	.email
		font-size 40px
</style>