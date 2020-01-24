<?php
/* ------------------------------------------------------------------------- *
 * 	Jacksoncyberspace 
 *  Search Form		Version		 1.0.0
/* ------------------------------------------------------------------------- */	
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id=" " class="search-field search-query form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
<!-- 	<button type="submit" class="search-submit">Search</span></button> -->
</form>


