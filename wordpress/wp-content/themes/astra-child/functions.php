<?php

add_action('init', 'goodproduct_init');
function goodproduct_init() {
    register_nav_menus(array(
        'gp_header_menu'   => 'Header Navigation Menu',
        'gp_mobile_scrolling_menu'   => 'Mobile Scrolling Menu'
    ));

    wp_enqueue_style('goodproduct', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.0.4');
    wp_enqueue_script('goodproduct-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.1');
}