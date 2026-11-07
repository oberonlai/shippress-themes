<?php
/**
 * Ibuki Cardiology — functions and definitions.
 *
 * @package ibuki-cardiology
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'IBUKI_CARDIOLOGY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function ibuki_cardiology_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'ibuki_cardiology_setup' );

/**
 * Front-end styles and the scroll script (in the head, not deferred, so the hidden states exist before first paint).
 */
function ibuki_cardiology_enqueue() {
	wp_enqueue_style( 'ibuki-cardiology-style', get_stylesheet_uri(), array(), IBUKI_CARDIOLOGY_VERSION );
	wp_enqueue_style( 'ibuki-cardiology-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'ibuki-cardiology-style' ), IBUKI_CARDIOLOGY_VERSION );
	wp_enqueue_script( 'ibuki-cardiology-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), IBUKI_CARDIOLOGY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'ibuki_cardiology_enqueue' );

/**
 * Pattern category.
 */
function ibuki_cardiology_pattern_categories() {
	register_block_pattern_category(
		'ibuki-cardiology',
		array(
			'label'       => __( 'Ibuki Cardiology', 'ibuki-cardiology' ),
			'description' => __( 'Sections for an outpatient cardiology clinic: head band with a full-bleed photograph and info bar, portrait with a fused ink tile, weekday ticker, timing bar, slate-green stepped statement, price list and ink close.', 'ibuki-cardiology' ),
		)
	);
}
add_action( 'init', 'ibuki_cardiology_pattern_categories' );
