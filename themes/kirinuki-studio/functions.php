<?php
/**
 * Kirinuki Studio: functions and definitions.
 *
 * @package kirinuki-studio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KIRINUKI_STUDIO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kirinuki_studio_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kirinuki_studio_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function kirinuki_studio_enqueue() {
	wp_enqueue_style( 'kirinuki-studio-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KIRINUKI_STUDIO_VERSION );
	wp_enqueue_style( 'kirinuki-studio-style', get_stylesheet_uri(), array( 'kirinuki-studio-sp-scroll' ), KIRINUKI_STUDIO_VERSION );
	wp_enqueue_script( 'kirinuki-studio-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KIRINUKI_STUDIO_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kirinuki_studio_enqueue' );

/**
 * Pattern category.
 */
function kirinuki_studio_pattern_categories() {
	register_block_pattern_category(
		'kirinuki-studio',
		array(
			'label'       => __( 'Kirinuki Studio', 'kirinuki-studio' ),
			'description' => __( 'Sections for a product photography studio: a mist hero with a chamfered product triptych, a statement sheet, a dark band of chamfered work tiles, a grid-ruled sheet of chips, the day rate, a shoot day and the one way to book.', 'kirinuki-studio' ),
		)
	);
}
add_action( 'init', 'kirinuki_studio_pattern_categories' );
