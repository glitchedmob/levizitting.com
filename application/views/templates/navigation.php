<?php
	function create_tabs($tab_list, $active_tab) {
		foreach ($tab_list as $tab) {
			if($active_tab === $tab) {
				?>
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo site_url(strtolower($tab)); ?>"><?php echo $tab; ?></a>
				</li>
				<?php
			}
			else {
				?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url(strtolower($tab)); ?>"><?php echo $tab; ?></a>
				</li>
				<?php
			}
		}
	}
?>
<body>
	<nav class="navbar navbar-fixed-top navbar-dark bg-primary">
		<!-- Collapse button-->
		<button class="navbar-toggler hidden-sm-up" data-target="#collapseEx2" data-toggle="collapse" type="button"><i class="fa fa-bars"></i></button>
		<div class="container">
			<!-- Collapse content-->
			<div class="collapse navbar-toggleable-xs" id="collapseEx2">
				<!-- Navbar Brand--><a class="navbar-brand" href="<?php echo site_url("home"); ?>">Levi<span class="brand-last-name">Zitting</span></a>
				<div class="collapse navbar-toggleable-xs" id="collapseEx2">
					<ul class="nav navbar-nav">
						<?php create_tabs($tabs_left, $active_tab); ?>
					</ul>
					<ul class="nav navbar-nav float-xs-right">
						<?php create_tabs($tabs_right, $active_tab); ?>
					</ul>
				</div>
			</div>
		</div>
	</nav>