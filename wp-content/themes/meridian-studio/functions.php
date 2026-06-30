<?php
/**
 * Meridian Studio theme functions.
 *
 * @package Meridian_Studio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support(
	'html5',
	array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	)
);

register_nav_menus(
	array(
		'primary-menu' => __( 'Primary Menu', 'meridian' ),
		'footer-menu'  => __( 'Footer Menu', 'meridian' ),
	)
);

function meridian_studio_default_footer_nav() {
	echo '<ul class="footer-nav-links">';
	echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">About</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">Services</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a></li>';
	echo '</ul>';
}

function meridian_studio_enqueue_assets() {
	wp_enqueue_style( 'meridian-studio-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'meridian-studio-main', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'meridian_studio_enqueue_assets' );