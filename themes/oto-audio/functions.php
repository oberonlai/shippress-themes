<?php
/**
 * Oto Audio — functions and definitions.
 *
 * @package oto-audio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';

define( 'OTO_AUDIO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function oto_audio_setup() {
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
add_action( 'after_setup_theme', 'oto_audio_setup' );

/**
 * Front-end styles and the scroll-effects script (sp-scroll). The script loads in the head, not deferred, so the
 * hidden states exist before the first paint; without JavaScript every block is visible. Fonts come from theme.json.
 */
function oto_audio_enqueue() {
	wp_enqueue_style( 'oto-audio-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), OTO_AUDIO_VERSION );
	wp_enqueue_style( 'oto-audio-style', get_stylesheet_uri(), array( 'oto-audio-sp-scroll' ), OTO_AUDIO_VERSION );
	wp_enqueue_script( 'oto-audio-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), OTO_AUDIO_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'oto_audio_enqueue' );

/**
 * Pattern category.
 */
function oto_audio_pattern_categories() {
	register_block_pattern_category(
		'oto-audio',
		array(
			'label'       => __( 'Oto Audio', 'oto-audio' ),
			'description' => __( 'Sections for a hi-fi shop: the photo-left hero with the featured product, the four category icons, the headphone comparison in a crosshair frame, the product trio, the parallax band, the listening hour, the price list, the journal and the visit block.', 'oto-audio' ),
		)
	);
}
add_action( 'init', 'oto_audio_pattern_categories' );
