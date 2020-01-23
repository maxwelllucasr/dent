<?php
/* ------------------------------------------------------------------------- *
 * 	Rugged
 *  Mega Navigation		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

?>

<nav id="vesst-lateral-nav">
	<!-- menu -->
	<div class="closing-time clearfix text-center">
		<a id="vesst-menu-trigger-close" href="#0" class="is-clicked closing-tim">
			<span class="vesst-menu-text"></span><span class="vesst-menu-icon"></span>
		</a>
	</div>



	<div class="vesst-navigation">
	<?php  wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'vesst-navigation', 'menu_id' => 'main-nav') );  ?>

		

		
	</div>

<div id="lateral-nav-bottom-legal">
	<!-- <hr>
	<a href="http://techadvisors.vesst.co/contact/">CONTACT US</a>
	<hr> -->
	 <!-- <div class="social-nav">
		<h4 class="bold">Social</h4>
		<?php  /*include( get_template_directory() . '/includes/content/theme/socialcons.php'); */?>
	</div>  -->
	<!-- legal footer is clipping into nav buttons in mobile -->
	<!-- <ul class="meta-meta">
		<li><a href="/legal/">Legal</a></li> 
		<li><a href="/privacy-policy/">Privacy Policy</a></li> 
		<li><a href="/site-map/">Site Map</a></li>
	</ul> vesst-single-item-wrapper -->
</div>
</nav>