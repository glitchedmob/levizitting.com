<template>
	<div>
		<page-jumbotron>
			<h1 class="display-4">About</h1>
		</page-jumbotron>
		<v-container fluid>
			<v-layout>
				<v-flex xs12 md8 offset-md2>
					<div class="elevation-3">
						<v-card height="50vh" flat tile color="primary" dark>
							<v-container fluid fill-height>
								<v-layout align-center>
									<v-flex text-xs-center>
										<img src="../../images/profile.jpg" alt="" class="profile-img">
										<h2 class="display-3">Levi Zitting</h2>
									</v-flex>
								</v-layout>
							</v-container>
						</v-card>
						<div class="main-content pa-4">
							<p class="mt-4">
								Hello, my name is Levi Zitting. I'm an excited, young professional, trying to become excellent in the craft of software development. I first started writing code over 5 years ago, and ever since then I've been learning as much as I possibly can about the industry. Although I'm extremely interested in just about every aspect of computer programming, I've decided to first focus on the web development space. The web is where so many of us spend vast amounts of time, so why not help others have an amazing experience using it.
							</p>

							<h3 class="display-3 text-xs-center mt-3">What can I do?</h3>
							<hr>

							<h4 class="display-2 my-2">Skills</h4>
							<v-container grid-list-xl>
								<v-layout wrap>

									<v-flex xs12 md6>
										<h5 class="title">HTML</h5>
										<v-progress-linear value="100" color="secondary"></v-progress-linear>
										<h5 class="title">CSS</h5>
										<v-progress-linear value="100" color="secondary"></v-progress-linear>
										<h5 class="title">Sass/Scss</h5>
										<v-progress-linear value="92" color="secondary"></v-progress-linear>
										<h5 class="title">Stylus</h5>
										<v-progress-linear value="91" color="secondary"></v-progress-linear>
										<h5 class="title">JavaScript</h5>
										<v-progress-linear value="90" color="secondary"></v-progress-linear>
										<h5 class="title">TypeScript</h5>
										<v-progress-linear value="85" color="secondary"></v-progress-linear>
									</v-flex>

									<v-flex xs12 md6>
										<h5 class="title">VueJS</h5>
										<v-progress-linear value="83" color="secondary"></v-progress-linear>
										<h5 class="title">Angular</h5>
										<v-progress-linear value="80" color="secondary"></v-progress-linear>
										<h5 class="title">PHP</h5>
										<v-progress-linear value="80" color="secondary"></v-progress-linear>
										<h5 class="title">MySQL</h5>
										<v-progress-linear value="78" color="secondary"></v-progress-linear>
										<h5 class="title">Laravel</h5>
										<v-progress-linear value="75" color="secondary"></v-progress-linear>
										<h5 class="title">Node.js</h5>
										<v-progress-linear value="60" color="secondary"></v-progress-linear>
									</v-flex>

								</v-layout>
							</v-container>

							<h4 class="display-2 my-2">Tools</h4>
							<v-container grid-list-xl>
								<v-layout wrap>

									<v-flex xs12 md6>
										<h5 class="title">Git</h5>
										<v-progress-linear value="90" color="secondary"></v-progress-linear>
										<h5 class="title">GitHub</h5>
										<v-progress-linear value="89" color="secondary"></v-progress-linear>
										<h5 class="title">BitBucket</h5>
										<v-progress-linear value="87" color="secondary"></v-progress-linear>
										<h5 class="title">Visual Studio Code</h5>
										<v-progress-linear value="85" color="secondary"></v-progress-linear>
										<h5 class="title">PHPStorm</h5>
										<v-progress-linear value="85" color="secondary"></v-progress-linear>
									</v-flex>

									<v-flex xs12 md6>
										<h5 class="title">Webpack</h5>
										<v-progress-linear value="85" color="secondary"></v-progress-linear>
										<h5 class="title">Gulp</h5>
										<v-progress-linear value="80" color="secondary"></v-progress-linear>
										<h5 class="title">Linux Command Line</h5>
										<v-progress-linear value="75" color="secondary"></v-progress-linear>
										<h5 class="title">Powershell</h5>
										<v-progress-linear value="65" color="secondary"></v-progress-linear>
									</v-flex>

								</v-layout>
							</v-container>

							<h3 class="display-3 text-xs-center mt-3">What Others Have Said</h3>
							<hr>

							<v-layout align-center wrap class="mt-4">
								<v-flex xs12 md4>
									<img src="../../images/dougbradshaw.jpg" alt="Douglas Bradshaw Profile Image" class="others-profile-img elevation-5">
								</v-flex>
								<v-flex xs12 md8>
									<blockquote class="blockquote">"Levi is very talented. Any project I gave him I had confidence that it would get done in the manner that I wanted. My customers loved him, he was kind and patient with the public."</blockquote>
									<p>Douglas Bradshaw - CEO of Click Computers Inc.</p>
								</v-flex>
							</v-layout>
							<v-layout align-center wrap class="mt-4">
								<v-flex xs12 md4>
									<img src="../../images/josephssempala.jpg" alt="Joseph Ssempala Profile Image" class="others-profile-img elevation-5">
								</v-flex>
								<v-flex xs12 md8>
									<blockquote class="blockquote">"We found Levi to be very knowledgeable, professional and co-operative throughout the course of each project. Additionally, after completions, he has been exceptionally responsive in addressing any minor issues associated with the projects. We look forward to working with him more in future."</blockquote>
									<p>Joseph Ssempala - CEO of Ssemco Technologies</p>
								</v-flex>
							</v-layout>

						</div>
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

<style lang="stylus" scoped>

	.profile-img
		max-height 250px
		border 6px solid #FFF
		border-radius 100%

	.main-content
		p
			font-size 18px


	hr
		border none
		border-bottom 4px solid #333
		width 70%
		display block
		margin 5px auto

	.others-profile-img
		border-radius 100%
		max-height 300px
		display block
		margin 0 auto

</style>

