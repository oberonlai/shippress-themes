<?php
/**
 * Ugoki Animation: functions and definitions.
 *
 * @package ugoki-animation
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'UGOKI_ANIMATION_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function ugoki_animation_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'ugoki_animation_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states only exist once it ran).
 */
function ugoki_animation_enqueue() {
	wp_enqueue_style( 'ugoki-animation-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), UGOKI_ANIMATION_VERSION );
	wp_enqueue_style( 'ugoki-animation-style', get_stylesheet_uri(), array( 'ugoki-animation-sp-scroll' ), UGOKI_ANIMATION_VERSION );
	wp_enqueue_script( 'ugoki-animation-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), UGOKI_ANIMATION_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'ugoki_animation_enqueue' );

/**
 * Pattern category.
 */
function ugoki_animation_pattern_categories() {
	register_block_pattern_category(
		'ugoki-animation',
		array(
			'label'       => __( 'Ugoki Animation', 'ugoki-animation' ),
			'description' => __( 'Sections for an animation studio: the dark window with a frame strip and HUD, the credit-ledger case wall, the contact sheet, the process ledger, the parallax band and the quote window.', 'ugoki-animation' ),
		)
	);
}
add_action( 'init', 'ugoki_animation_pattern_categories' );
