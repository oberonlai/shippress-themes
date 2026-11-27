<?php
/**
 * Yukiki Shoes: functions and definitions.
 *
 * @package yukiki-shoes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'YUKIKI_SHOES_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yukiki_shoes_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yukiki_shoes_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function yukiki_shoes_enqueue() {
	wp_enqueue_style( 'yukiki-shoes-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), YUKIKI_SHOES_VERSION );
	wp_enqueue_style( 'yukiki-shoes-style', get_stylesheet_uri(), array( 'yukiki-shoes-sp-scroll' ), YUKIKI_SHOES_VERSION );
	wp_enqueue_script( 'yukiki-shoes-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YUKIKI_SHOES_VERSION, false );
	wp_enqueue_script( 'yukiki-shoes-tabs', get_theme_file_uri( 'assets/ys-tabs.js' ), array(), YUKIKI_SHOES_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'yukiki_shoes_enqueue' );

/**
 * Pattern category.
 */
function yukiki_shoes_pattern_categories() {
	register_block_pattern_category(
		'yukiki-shoes',
		array(
			'label'       => __( 'Yukiki Shoes', 'yukiki-shoes' ),
			'description' => __( 'Sections for an independent shoe shop: a contact-sheet hero with a timeline foot, numbered gateway tabs, a fitting timeline, a shelf of lasts, a parallax shelf band, fitter notes, prices, hours and a letter.', 'yukiki-shoes' ),
		)
	);
}
add_action( 'init', 'yukiki_shoes_pattern_categories' );
