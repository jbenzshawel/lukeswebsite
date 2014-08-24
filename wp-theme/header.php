<!doctype html>
<html class="no-javascript" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Luke's Website</title>
	<!--styles-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
	<script src="<?php bloginfo('template_url'); ?>/javascripts/vendor/modernizr.js"></script>
</head>
<body>
	<header>
		<div class="row">
			<div class="large-12 columns">
				<h1>Luke's Website</h1>
			</div>
		</div>
		<nav class="top-bar" data-topbar>
			<div class="row mobile-nav">
				<ul class="title-area right">
					<li class="toggle-topbar"><a href="#"><span><i class="fa fa-bars fa-2x"></i></span></a></li>
				</ul>
			</div>
			<section class="top-bar-section">
				<div class="row">
					<!-- social media icons -->
					<ul class="right">
						<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
						<li><a href="#"><i class="fa fa-twitter"></i> </a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i> </a></li>
					</ul>

					<!-- nav links -->
					<ul class="left">
						<?php
							$nav_menu_params = array(
								'theme_location' => 'nav-menu',
								'container' =>false,
                                'menu_class' => '',
                                'echo' => true,
                                'before' => '',
                                'after' => '',
                                'link_before' => '',
                                'link_after' => '',
                                'depth' => 0,
                                'items_wrap' => '%3$s',);

							wp_nav_menu($nav_menu_params); 
						?>
					</ul>
				</div>
			</section>
		</nav>
	</header>