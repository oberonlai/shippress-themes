<?php
/**
 * Budou Academy — functions and definitions.
 *
 * @package budou-academy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'BUDOU_ACADEMY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function budou_academy_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'budou_academy_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so the hidden state exists before first paint).
 */
function budou_academy_enqueue() {
	wp_enqueue_style( 'budou-academy-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), BUDOU_ACADEMY_VERSION );
	wp_enqueue_style( 'budou-academy-style', get_stylesheet_uri(), array( 'budou-academy-sp-scroll' ), BUDOU_ACADEMY_VERSION );
	wp_enqueue_script( 'budou-academy-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), BUDOU_ACADEMY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'budou_academy_enqueue' );

/**
 * Button styles (dark primary, pale secondary, white on a band) and the pattern category.
 */
function budou_academy_register() {
	register_block_style( 'core/button', array( 'name' => 'ba-dark', 'label' => __( 'Dark with arrow', 'budou-academy' ) ) );
	register_block_style( 'core/button', array( 'name' => 'ba-pale', 'label' => __( 'Pale with arrow', 'budou-academy' ) ) );
	register_block_style( 'core/button', array( 'name' => 'ba-white', 'label' => __( 'White with arrow', 'budou-academy' ) ) );
	register_block_pattern_category(
		'budou-academy',
		array(
			'label'       => __( 'Budou Academy', 'budou-academy' ),
			'description' => __( 'Sections for a sommelier school: the interlocking photo hero, the Monday time rail, saturated bands with a photo across the edge, programme cards, the fee table, faculty and alumni.', 'budou-academy' ),
		)
	);
}
add_action( 'init', 'budou_academy_register' );
