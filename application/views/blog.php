<div class="container">
	<div class="row blog-move-down">
		<div class="col-md-4 push-md-8">
			<div class="card">
				<div class="card-block">
					<h4 class="card-title">Recent Posts</h4>
					<ul>
						<li>
							<a href="">Post 1</a>
						</li>
						<li>
							<a href="">Post 2</a>
						</li>
						<li>
							<a href="">Post 3</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php
			$first_post = "pull-md-4";
			foreach ($blog_posts as $blog_post) {
				?>
				<div class="col-md-8 <?php echo $first_post; ?>">
					<div class="card">
						<img class="img-fluid" src="<?php echo $blog_post["image"]; ?>" alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title"><?php echo $blog_post["title"]; ?></h4>
							<p>
								<span class="author">By: <?php echo $blog_post["author"]; ?></span><br>
								<span class="created-date">Created: <?php echo $blog_post["created_date"]; ?></span><br>
								<span class="Categories">Categories: <?php echo $blog_post["categories"]; ?></span>
							</p>
							<p class="card-text"><?php echo $blog_post["text"]; ?></p>
							<a href="<?php echo site_url("blog/".$blog_post["slug"]); ?>" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
				<?php
				if ($first_post != NULL) {
					$first_post = NULL;
				}
			}
		?>
	</div>
</div>