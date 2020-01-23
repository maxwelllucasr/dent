<?php
function vesst_register_workbench() {

	/**
	 * Post Type: Workbench.
	 */

	$labels = array(
		"name" 			=> __( "Workbenches"),
		"singular_name" => __( "Workbench"),
		"menu_name" 	=> __( "Workbench"),
		"add_new"		=> __( "Add New Workbench"),
		"add_new_item" 	=> __( "Add New Workbench"),
		"edit_item" 	=> __( "Edit Workbench"),
		"new_item" 		=> __( "New Workbench"),
	);

	$args = array(
		"label" 				=> __( "Workbench"),
		"labels" 				=> $labels,
		"description" 			=> "",
		"public"				=> true,
		"publicly_queryable" 	=> true,
		"show_ui" 				=> true,
		"show_in_rest" 			=> true,
		"rest_base" 			=> "",
		"has_archive" 			=> false,
		"show_in_menu" 			=> true,
		"exclude_from_search" 	=> false,
		"capability_type" 		=> "page",
		'menu_icon'           	=> 'dashicons-admin-tools',
		"hierarchical" 			=> false,
		"rewrite" 				=> array(
									"slug" => "workbenches",
									"with_front" => true
								),
		"query_var" 			=> true,
		"supports" 				=> array( "title", "thumbnail", "editor", "page-attributes", "revisions"),
		//"taxonomies" 			=> array( "event_category" ),
		"taxonomies" 			=> array( "type_category" ),

	);

	register_post_type( "workbench", $args );
}

add_action( 'init', 'vesst_register_workbench' );


function vesst_register_type_tax() {

	/**
	 * Taxonomy: Type Taxonomy
	 */

	$labels = array(
		"name" => __( "Type"),
		"singular_name" => __( "Type"),
	);

	$args = array(
		"label" => __( "Type"),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Type",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'type_category', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "type_category", array( "workbench" ), $args );
}

add_action( 'init', 'vesst_register_type_tax' );


