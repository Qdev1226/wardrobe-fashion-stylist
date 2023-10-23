<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage wardrobe-fashion-stylist
 * @since wardrobe-fashion-stylist 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since wardrobe-fashion-stylist 1.0
	 *
	 * @return void
	 */
	function wardrobe_fashion_stylist_register_block_styles() {
		
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'wardrobe-fashion-stylist-border',
				'label' => esc_html__( 'Borders', 'wardrobe-fashion-stylist' ),
			)
		);

		
	}
	add_action( 'init', 'wardrobe_fashion_stylist_register_block_styles' );
}