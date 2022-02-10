<?php

add_action('init', 'goodproduct_init');
function goodproduct_init() {
    register_nav_menus(array(
        'gp_header_menu'   => 'Header Navigation Menu',
        'gp_mobile_scrolling_menu'   => 'Mobile Scrolling Menu'
    ));

    wp_enqueue_style('goodproduct', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.0.8');
    wp_enqueue_script('goodproduct-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.6');
}

if( function_exists('acf_add_options_page') ) {

    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Settings',
        'menu_title' 	=> 'Settings',
        'redirect' 		=> true
    ));

    // Configuration sub-page.
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Header',
        'menu_title' 	=> 'Header',
        'parent_slug' 	=> $parent['menu_slug'],
    ));
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 1 );