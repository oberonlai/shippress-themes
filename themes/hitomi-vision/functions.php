<?php
/**
 * Hitomi Vision: functions and definitions.
 *
 * @package hitomi-vision
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HITOMI_VISION_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hitomi_vision_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hitomi_vision_setup' );

/**
 * Front-end styles and the scroll effects (sp-scroll). The script loads in the head, not deferred, so the hidden
 * state of the reveals is set before the first paint and never flashes.
 */
function hitomi_vision_enqueue() {
	wp_enqueue_style( 'hitomi-vision-style', get_stylesheet_uri(), array(), HITOMI_VISION_VERSION );
	wp_enqueue_style( 'hitomi-vision-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hitomi-vision-style' ), HITOMI_VISION_VERSION );
	wp_enqueue_script( 'hitomi-vision-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HITOMI_VISION_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hitomi_vision_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hitomi_vision_block_styles() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'lead',
			'label' => __( 'Lead paragraph', 'hitomi-vision' ),
		)
	);
}
add_action( 'init', 'hitomi_vision_block_styles' );

/**
 * Pattern category.
 */
function hitomi_vision_pattern_categories() {
	register_block_pattern_category(
		'hitomi-vision',
		array(
			'label'       => __( 'Hitomi Vision', 'hitomi-vision' ),
			'description' => __( 'Sections for an optometry clinic: the headline on pale strips above a framed photograph, dome-topped section heads, 2:3 portrait rows with a caption, a long method column with a photo triptych, the polaroid case pair, the fee list, the people and the visit.', 'hitomi-vision' ),
		)
	);
}
add_action( 'init', 'hitomi_vision_pattern_categories' );
