<?php
//-----------------------------------  // Rugged ACF Options //-----------------------------------//

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Global Settings',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'global-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Homepage',
		'menu_title'	=> 'Homepage',
		'parent_slug'	=> 'global-general-settings',
	));
}
