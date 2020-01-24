<?php
/* ------------------------------------------------------------------------- *
 * 	Rugged
 *  Mega Navigation		Version		 1.0.0
/* ------------------------------------------------------------------------- */	

?>

<nav id="jcs-lateral-nav">
	<!-- menu -->
	<div class="closing-time clearfix text-center">
		<a id="jcs-menu-trigger-close" href="#0" class="is-clicked closing-tim">
			<span class="jcs-menu-text"></span><span class="jcs-menu-icon"></span>
		</a>
	</div>



	<div class="jcs-navigation">
	<?php  wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'jcs-navigation', 'menu_id' => 'main-nav') );  ?>

		

		
	</div>


</nav>