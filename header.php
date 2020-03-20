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
		$logo = get_field('header_logo','options');
		// $report_an_incident = get_field('report_an_incident', 'option');
	?>
</head>
	<div class="popout-background-target"></div>
	<div class="popout-menu">


		<div class="columns">
			<div class="column is-6 is-5-mobile is-inline-block">
				<div class="sub-menu-back-target "><i class="fas fa-arrow-left"></i></div>
			</div>
			<div class="column is-6 is-6-mobile is-inline-block"><i class="fas fa-bars menu-trigger menu-trigger-in-popout white-hover" id="menu-trigger"></i></div>
		</div>
		
		
		
		
		<div class="popout-menu-container">
			<?php wp_nav_menu( array( 
							'container'=> false,
							'theme_location' => 'dropdown',
							'depth'             => 2,
							'menu_class' => 'popout',
			));
			?>
		</div>
	</div>


<body <?php body_class(); ?>>
<div id="wrapper" class=""><!-- wrapper -->
	<header class="jcs-auto-hide-header">
		<div class="header-layout">
			<div class="columns header-not-popout">

				<div class="column is-4 is-8-mobile header-logo is-inline-block">
					<a href="/" class="header-logo-anchor"><img class="header-image" src="<?=$logo['url']?>"></a>
				

			
				
			</div><div class="column is-8 is-4-mobile is-inline-block"><div class="hamburger-menu"><i class="fas fa-bars menu-trigger white-hover" id="menu-trigger"></i></div></div>
			</div>
		

		</div>
	</header>
