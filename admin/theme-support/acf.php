<?php
//-----------------------------------  // Dent ACF //-----------------------------------//
add_action('acf/init', 'register_acf_block_types');
function register_acf_block_types() {

	if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'				=> 'hero',
            'title'				=> __('Hero'),
            'description'		=> __('A Full Width Hero Banner'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'align' 			=> 'full',
            'category'			=> 'layout',
            'icon'				=> 'format-image',
            'keywords'			=> array( 'hero' ),
            'supports' 			=> array( 'align' => array( 'full', 'wide' ),),
            'mode' 				=> 'edit',
    ));
        acf_register_block(array(
            'name'				=> 'Trauma-Training',
            'title'				=> __('Trauma-Training'),
            'description'		=> __('A Full Width Trauma Training Banner'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'align' 			=> 'full',
            'category'			=> 'layout',
            'icon'				=> 'format-image',
            'keywords'			=> array( 'Trauma', 'Training' ),
            'supports' 			=> array( 'align' => array( 'full', 'wide' ),),
            'mode' 				=> 'edit',
    ));
       
}}




// Save ACF Fields Constantly
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/admin/acf-json';
    // return
    return $path;
}
// Sync ACF Fields on Live
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    // append path
    $paths[] = get_stylesheet_directory() . '/admin/acf-json';
    // return
    return $paths;    
}

?>