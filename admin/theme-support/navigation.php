<?php

function register_my_menus() {

    $nav = [];

    if(in_array('top', get_field('navigation_menus','option'))){
        $nav['header-menu'] = __( 'Header Menu' );
    }

    if(in_array('sidebar', get_field('navigation_menus','option'))){
        $nav['sidebar-menu'] = __( 'Sidebar Menu' );
    }

    if(in_array('footer', get_field('navigation_menus','option'))){
        $nav['footer-menu'] = __( 'Footer Menu' );
    }

    if($nav){
        register_nav_menus( $nav );
    }
}

//add_action( 'init', 'register_my_menus' );