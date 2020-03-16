<?php



//-----------------------------------  // Load Scripts & Styles //-----------------------------------//

function jacksoncyberspace_scripts_styles() {

		//---------------------  // Stylesheets // ---------------------//	
		//wp_enqueue_style( 'jcs_style', get_stylesheet_uri() );
		
		wp_enqueue_style( 'jcs_css', get_template_directory_uri() . "/includes/css/dent.css" );
				
		//---------------------  // Scripts // ---------------------//

		//Register jQuery
		wp_enqueue_script('jquery', get_template_directory_uri() . '/includes/js/jquery.min.js', false, false, false);


		// wp_enqueue_script('theme_custom_js', get_template_directory_uri() . '/includes/js/theme-min.js', false, false, false);
		wp_enqueue_script('popout_js', get_template_directory_uri() . '/includes/js/popout.js', false, false, false);

		//fullcalendar
		wp_enqueue_script('core_main_js_calendar', get_template_directory_uri() . '/includes/calendar/core/main.js', false, false, false);
		wp_enqueue_script('daygrid_main_js_calendar', get_template_directory_uri() . '/includes/calendar/daygrid/main.js', false, false, false);
		wp_enqueue_style('core_main_css_calendar', get_template_directory_uri() . '/includes/calendar/core/main.css', false, false, false);
		wp_enqueue_style('daygrid_main_css_calendar', get_template_directory_uri() . '/includes/calendar/daygrid/main.css', false, false, false);
		wp_enqueue_script('calendar_init', get_template_directory_uri() . '/includes/js/calendar-init.js', false, false, false);






		// Register JS
		// wp_enqueue_style('event_cal_min', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css');
		// wp_enqueue_script('event_moment_js_min', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js');
		// wp_enqueue_script('event_cal_js_min', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js');

}		

add_action( 'wp_enqueue_scripts', 'jacksoncyberspace_scripts_styles' );



//-----------------------------------  // Custom Excerpt Limit //-----------------------------------//
function rw_trim_excerpt( $text='' )
{
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $excerpt_length = apply_filters('excerpt_length', 55);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    return wp_trim_words( $text, $excerpt_length, $excerpt_more );
}
add_filter('wp_trim_excerpt', 'rw_trim_excerpt');
//-----------------------------------  // Allow Shortcodes in Widgets //-----------------------------------//

add_filter('widget_text', 'do_shortcode');


//-----------------------------------  // Auto Feed Links //-----------------------------------//

add_theme_support( 'automatic-feed-links' );


//-----------------------------------  // Register Menus //-----------------------------------//

add_theme_support('menus');
register_nav_menus( array(
	'top-right' => __( 'Top Right Menu', 'top-right' ),
	'top-left' => __('Top Left Menu', 'top-left'),
	'footer' => __('Footer Menu' , 'footer'),
	'dropdown' => __('Dropdown' , 'dropdown')
) );


//-----------------------------------  // Content Width //-----------------------------------//

if ( ! isset( $content_width ) ) $content_width = 1200;


//-----------------------------------  // Add Image Sizes //-----------------------------------//

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 825, 510, true );// Default Thumb
set_post_thumbnail_size( 'reg-feature',1200, 500, true ); // reg

add_image_size('small_thumb', '640', '360', true);
add_image_size('reg-feature', '1000', '850', true);
add_image_size('big-feature', '1400', '686', false);
add_image_size('wide-feature', '1400', '300', false);

add_image_size('square', '800', '800', true);

//-----------------------------------  // Register Sidebar Widgets //-----------------------------------//

if ( function_exists('register_sidebars') )

register_sidebar(array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar-main',
		'description' => 'Main sidebar on the blog.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '<div class="text-fade"></div></div>'
));

register_sidebar(array(
		'name' => 'Post Sidebar',
		'id' => 'sidebar-single',
		'description' => 'Single post sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '<div class="text-fade"></div></div>'
));

//-----------------------------------  // Required Files  //-----------------------------------//

// SVG Support for Image Uploads.
//require get_template_directory() . '/admin/theme-support/svg.php';
// Custom Gravity Form Overrides
//require get_template_directory() . '/admin/theme-support/gravity-form.php';
// Custom wysiwig and other formats
//require get_template_directory() . '/admin/theme-support/formats.php';



// Base Breadcrumbs - It is recommended to us Yoast Breadcrumbs.
require get_template_directory() . '/admin/theme-support/breadcrumbs.php';
// Pagination
require get_template_directory() . '/admin/theme-support/pagination.php';
// ACF
require get_template_directory() . '/admin/theme-support/acf.php';
require get_template_directory() . '/admin/theme-support/acf-options.php';
require get_template_directory() . '/admin/theme-support/acf-gravity-forms.php';
flush_rewrite_rules( false );


add_theme_support( 'align-wide' );


//-----------------------------------  // Register Blocks ACF RENDER //-----------------------------------//

function my_acf_block_render_callback( $block ) {
		
		// convert name ("acf/testimonial") into path friendly slug ("testimonial")
		$slug = str_replace('acf/', '', $block['name']);
		
		// include a template part from within the "includes/blocks" folder
		if( file_exists( get_theme_file_path("/includes/blocks/content-{$slug}.php") ) ) {
				include( get_theme_file_path("/includes/blocks/content-{$slug}.php") );
		}
}



// * Loading editor styles for the block editor (Gutenberg)
// add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);
// function add_block_editor_assets(){
// 	wp_enqueue_style('block_editor_css', get_theme_file_uri( '/includes/css/gutenberg.css' ));
// }

// * Set Color Pallet(ACF)
function acf_input_admin_footer() { ?>
	<script type="text/javascript">
	(function($) {
	acf.add_filter('color_picker_args', function( args, $field ){
	args.palettes = ['#008ebd', '#071E42', '#2a3462' , '#7235F4', '#F22F46' ]
	return args;
	});
	 
	})(jQuery);
	</script>
	<?php
	 
}
	
add_action('acf/input/admin_footer', 'acf_input_admin_footer');


// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
//    return '… <a href="'. get_permalink($post->ID) . '" class="read_more">' . 'Read More' . '</a>';
   return '...';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Filter the excerpt length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function my_acf_google_map_api( $api ){
	// DEVELOPMENT KEY TODO CHANGE
	$api['key'] = 'AIzaSyAd03-X_vJxzM60UqPgRDGRBowoPA5Ndn0';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

//-----------------------------------  // Write Log  //-----------------------------------//

if ( ! function_exists('write_log')) {
	function write_log ( $log )  {
	   if ( is_array( $log ) || is_object( $log ) ) {
		  error_log( print_r( $log, true ) );
	   } else {
		  error_log( $log );
	   }
	}
}



//-----------------------------------  // Render Blocks //-----------------------------------//

add_filter( 'render_block', function( $block_content, $block ) {
    if (
        'core/paragraph' === $block['blockName'] ||
		'core/image' === $block['blockName'] ||
        'core/paragraph' === $block['blockName'] ||
        'core/heading' === $block['blockName'] ||
        'core/list' === $block['blockName'] ||
        'core/quote' === $block['blockName'] ||
        'core/cover-image' === $block['blockName'] ||
        'core/file' === $block['blockName'] ||
        'core/video' === $block['blockName'] ||
        'core/table' === $block['blockName'] ||
		'core/separator' === $block['blockName'] ||
		'core/audio' === $block['blockName'] ||
		'core/html' === $block['blockName'] ||
		'core/code' === $block['blockName'] ||
		'core/shortcode' === $block['blockName'] ||
		'core/embed' === $block['blockName'] ||
		'core/button' === $block['blockName'] ||
		'core/gallery' === $block['blockName']
      ) {
        $block_content = '<div class="container gutenberg-block ' . sanitize_title($block['blockName']) . '">' .  $block_content . "</div>";
    }
    return $block_content;
}, 10, 2 );

// add_filter( 'allowed_block_types', 'misha_allowed_block_types' );
 
// function misha_allowed_block_types( $allowed_blocks ) {
 
// 	return array(
// 		'core/image',
// 		'core/paragraph',
// 		'core/heading',
// 		'core/list',
// 		'core/quote',
// 		'core/cover-image',
// 		'core/file',
// 		'core/table',
// 		'core/separator',
// 		'core/shortcode',
// 		'core/embed',
// 		'core/gallery',
// 		'core/button',
// 	);
 
// }

function ea_setup() {
	// Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
  
	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Blue', 'ea-starter' ),
			'slug'  => 'blue',
			'color'	=> '#008EBD',
		),
		array(
			'name'  => __( 'Dark Blue', 'ea-starter' ),
			'slug'  => 'dkblue',
			'color' => '#071E42',
		),
		array(
			'name'  => __( 'Purple', 'ea-starter' ),
			'slug'  => 'purple',
			'color' => '#7235F4',
		),
		array(
			'name'	=> __( 'Red', 'ea-starter' ),
			'slug'	=> 'red',
			'color'	=> '#F22F46',
		),
		array(
			'name'	=> __( 'White', 'ea-starter' ),
			'slug'	=> 'white',
			'color'	=> '#ffffff',
		),
	) );
}
add_action( 'after_setup_theme', 'ea_setup' );
// add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );



//Register post types

// Custom Post Type Call Template
// require get_template_directory() . '/admin/theme-support/post-type-YOURPOSTTYPEHERE.php';

// register_taxonomy_for_object_type( 'type_category', 'workbenches' );


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );