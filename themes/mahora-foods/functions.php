<?php
/**
 * Mahora Foods — functions and definitions.
 *
 * @package mahora-foods
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'MAHORA_FOODS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function mahora_foods_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'mahora_foods_setup' );

/**
 * Front-end styles, the scroll-effects script (head, not deferred, so html.sp-js exists before the first paint) and the
 * small slideshow script (footer).
 */
function mahora_foods_enqueue() {
	wp_enqueue_style( 'mahora-foods-style', get_stylesheet_uri(), array(), MAHORA_FOODS_VERSION );
	wp_enqueue_style( 'mahora-foods-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), MAHORA_FOODS_VERSION );
	wp_enqueue_script( 'mahora-foods-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MAHORA_FOODS_VERSION, false );
	wp_enqueue_script( 'mahora-foods-slides', get_theme_file_uri( 'assets/mahora-slides.js' ), array(), MAHORA_FOODS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'mahora_foods_enqueue' );

/**
 * Pattern category.
 */
function mahora_foods_pattern_categories() {
	register_block_pattern_category(
		'mahora-foods',
		array(
			'label'       => __( 'Mahora Foods', 'mahora-foods' ),
			'description' => __( 'Sections for a staff cafeteria contractor: the photo-and-strip hero, abutting workplace tiles, the service-day slideshow, contract rows and the rate table.', 'mahora-foods' ),
		)
	);
}
add_action( 'init', 'mahora_foods_pattern_categories' );
