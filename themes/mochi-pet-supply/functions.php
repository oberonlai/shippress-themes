<?php
/**
 * Mochi Pet Supply — functions and definitions.
 *
 * @package mochi-pet-supply
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'MOCHI_PET_SUPPLY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function mochi_pet_supply_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'mochi_pet_supply_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the hidden state
 * is set before the first paint.
 */
function mochi_pet_supply_enqueue() {
	wp_enqueue_style( 'mochi-pet-supply-style', get_stylesheet_uri(), array(), MOCHI_PET_SUPPLY_VERSION );
	wp_enqueue_style( 'mochi-pet-supply-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'mochi-pet-supply-style' ), MOCHI_PET_SUPPLY_VERSION );
	wp_enqueue_script( 'mochi-pet-supply-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MOCHI_PET_SUPPLY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'mochi_pet_supply_enqueue' );

/**
 * Pattern category.
 */
function mochi_pet_supply_pattern_categories() {
	register_block_pattern_category(
		'mochi-pet-supply',
		array(
			'label'       => __( 'Mochi Pet Supply', 'mochi-pet-supply' ),
			'description' => __( 'Sections for a neighbourhood pet-food shop: three photo columns under the headline, the food finder, the staggered mosaic, the ink band with the monthly box, subscribe and save, the nutrition desk and regulars.', 'mochi-pet-supply' ),
		)
	);
}
add_action( 'init', 'mochi_pet_supply_pattern_categories' );
