<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>


	<div id="page-container">

		<div id="top-header" class="et_nav_text_color_light">
			<div class="container clearfix">

			
				<div id="et-info">
				
					<a href="mailto:inbox@simplon.co"><span id="et-info-email">inbox@simplon.co</span></a>
				
					<ul class="et-social-icons">

						<li class="et-social-icon et-social-facebook">
							<a href="https://www.facebook.com/Simplon.co" class="icon">
			<span>Facebook</span>
		</a>
	</li>
	<li class="et-social-icon et-social-twitter">
		<a href="https://twitter.com/simplonco" class="icon">
			<span>Twitter</span>
		</a>
	</li>
	<li class="et-social-icon et-social-google-plus">
		<a href="https://plus.google.com/112220818896268325269/about" class="icon">
			<span>Google</span>
		</a>
	</li>

</ul>				</div> <!-- #et-info -->

			
				<div id="et-secondary-menu">
				<div class="et_duplicate_social_icons">
								<ul class="et-social-icons">

	<li class="et-social-icon et-social-facebook">
		<a href="https://www.facebook.com/Simplon.co" class="icon">
			<span>Facebook</span>
		</a>
	</li>
	<li class="et-social-icon et-social-twitter">
		<a href="https://twitter.com/simplonco" class="icon">
			<span>Twitter</span>
		</a>
	</li>
	<li class="et-social-icon et-social-google-plus">
		<a href="https://plus.google.com/112220818896268325269/about" class="icon">
			<span>Google</span>
		</a>
	</li>

</ul>
							</div><a href="http://simplon.co/cart/" class="et-cart-info">
				<span>0 Items</span>
			</a>				</div> <!-- #et-secondary-menu -->

			</div> <!-- .container -->
		</div> <!-- #top-header -->













	<div class="container">

		<!--site-header -->
		<header class="site-header">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5>

			<nav class="site-nav">

				<?php

				$args = array(
					'theme_location' => 'primary'
				);

				?>

				<?php wp_nav_menu( $args ); ?>
			</nav>

		</header><!-- /site-header -->



