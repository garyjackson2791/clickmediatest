<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title><?php wp_title(''); ?></title>
			<meta name="HandheldFriendly" content="True">
			<meta name="MobileOptimized" content="320">
			<meta name="viewport" content="width=device-width, initial-scale=1"/>
			<?php /*<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">*/ ?>
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
			<?php wp_head(); ?>
			<?php // drop Google Analytics Here ?>
			<?php // end analytics ?>


	</head>

	<body <?php body_class(); ?>>
		<header class="site-header">
			<div class="container">
				<div class="inner">
					<div class="row align-items-center justify-content-space">
						<div class="col-auto">
							<a class="logo" href="<?php echo home_url(); ?>" rel="nofollow">
								<img src="<?php image('clicky-media-logo.png') ?>" alt="<?php bloginfo( 'name' ); ?> Logo">
							</a>
						</div>
						<div class="col d-flex align-items-center justify-content-end">
							<nav>
								<?php wp_nav_menu(array(
									'menu' => __( 'The Main Menu', 'bonestheme' ),
									'theme_location' 	=> 'main-nav',
									'menu_class'		=> 'main-nav',
									'container'			=> false
								)); ?>
							</nav>

							<div class="menu-toggle">
								<div class="hamburger">
									<span></span>
									<span></span>
									<span></span>
								</div>
								<div class="cross">
									<span></span>
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
