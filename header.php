<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace
 *  Header		Version		 1.0.0
/* ------------------------------------------------------------------------- */	
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/ee80e09dde.js"></script>

	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/images/favicon.ico" />

    <?php wp_head(); ?>

	<?php 
		$site_title = get_bloginfo( 'name' );
		// $report_an_incident = get_field('report_an_incident', 'option');
	?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class=""><!-- wrapper -->
	<header class="jcs-auto-hide-header">
		<div class="header-layout">
			<div class="columns header-not-popout">

			

				<div class="column is-5 header-menu mobile-hide">

					<?php wp_nav_menu( array( 
										'container'=> false,
										'theme_location' => 'top-left',
										'depth'             => 2,
										'menu_class' => 'top-left',
										'menu_id' => 'header-nav',
										
					)); ?>
				</div>

				<div class="column is-2 header-logo">
					<a href="/"><h1 class="header-logo-text"><span class="header-logo-rugged">Test<br></span> </h1></a>
				</div>
				<div class="column is-5 header-menu mobile-hide">
					<?php wp_nav_menu( array( 
										'container'=> false,
										'theme_location' => 'top-right',
										'depth'             => 2,
										'menu_class' => 'top-right',
										'menu_id' => 'header-nav',
										
					)); ?>
				</div>
				<i class="fas fa-bars column is-8 mobile-show hamburger-menu" id="cd-menu-trigger"></i>
			</div>
			<div class="popout-menu">
					<?php wp_nav_menu( array( 
									'container'=> false,
									'theme_location' => 'dropdown',
									'depth'             => 2,
									'menu_class' => 'popout',
					))
					?>
			</div>

		</div>
	</header>