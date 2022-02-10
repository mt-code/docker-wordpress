<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>
<script type="text/javascript" 
		src="https://s.skimresources.com/js/169552X1637421.skimlinks.js"></script>
	
<body <?php astra_schema_body(); ?> <?php body_class(); ?>>

<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div
    <?php
    echo astra_attr(
        'site',
        array(
            'id'    => 'page',
            'class' => 'hfeed site',
        )
    );
    ?>
>
    <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>

    <?php astra_header_before(); ?>

    <div class="gp-site-header">
        <div class="gp-site-header__wrapper">
            <div class="gp-site-header__menu-toggle hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>

            <a class="gp-site-header__logo" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/site-logo.svg' ?>" alt="goodproduct uk logo">
            </a>
        </div>

        <?php wp_nav_menu(array(
            'theme_location' => 'gp_header_menu',
            'menu_class' => 'gp-site-header__nav',
            'container_class' => 'gp-site-header__nav-container'
        )); ?>

        <?php wp_nav_menu(array(
            'theme_location' => 'gp_mobile_scrolling_menu',
            'menu_class' => 'gp-site-header__scrolling-nav',
            'container_class' => 'gp-site-header__scrolling-container'
        )); ?>
    </div>

    <?php astra_header_after(); ?>

    <?php astra_content_before(); ?>

    <div id="content" class="site-content">

        <div class="ast-container">

            <?php astra_content_top(); ?>
			
			<!--Awin verification 001-->;
