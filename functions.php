<?php
/**
 * Wardrobe Fashion Stylist functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wardrobe-fashion-stylist
 * @since wardrobe-fashion-stylist 1.0
 */

if ( ! function_exists( 'wardrobe_fashion_stylist_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since wardrobe-fashion-stylist 1.0
	 *
	 * @return void
	 */
	function wardrobe_fashion_stylist_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'wardrobe_fashion_stylist_support' );

if ( ! function_exists( 'wardrobe_fashion_stylist_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since wardrobe-fashion-stylist 1.0
	 *
	 * @return void
	 */
	function wardrobe_fashion_stylist_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'wardrobe-fashion-stylist-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'wardrobe-fashion-stylist-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'wardrobe_fashion_stylist_styles' );

// Get Started
require get_template_directory() . '/get-started/getstart.php';

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

add_action('after_switch_theme', 'wardrobe_fashion_stylist_setup_options');

function wardrobe_fashion_stylist_setup_options () {
	wp_redirect( admin_url() . 'themes.php?page=wardrobe-fashion-stylist' );
}