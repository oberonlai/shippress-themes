<?php
/**
 * Gaku Frames — functions and definitions.
 *
 * @package gaku-frames
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'GAKU_FRAMES_VERSION', wp_get_theme()->get( 'Version' ) );

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function gaku_frames_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'gaku_frames_setup' );

/**
 * Front-end styles and scripts. The scroll-effects script loads in the head, not deferred: it adds html.sp-js before the
 * first paint, so the hidden "before" state of a reveal never flashes.
 */
function gaku_frames_enqueue() {
	wp_enqueue_style( 'gaku-frames-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), GAKU_FRAMES_VERSION );
	wp_enqueue_style( 'gaku-frames-style', get_stylesheet_uri(), array( 'gaku-frames-sp-scroll' ), GAKU_FRAMES_VERSION );
	wp_enqueue_script( 'gaku-frames-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), GAKU_FRAMES_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'gaku_frames_enqueue' );

/**
 * Pattern category.
 */
function gaku_frames_pattern_categories() {
	register_block_pattern_category(
		'gaku-frames',
		array(
			'label'       => __( 'Gaku Frames', 'gaku-frames' ),
			'description' => __( 'Sections for a picture framing shop: the mitred frame window, the intro, the woods masonry, the framed parallax band, the mount rows, the price table, delivery, the journal and the closing bench card.', 'gaku-frames' ),
		)
	);
}
add_action( 'init', 'gaku_frames_pattern_categories' );

/**
 * Block style for the price table (full-width, nowrap prices; stacks below 782px).
 */
function gaku_frames_block_styles() {
	register_block_style(
		'core/table',
		array(
			'name'  => 'gk-prices',
			'label' => __( 'Prices', 'gaku-frames' ),
		)
	);
}
add_action( 'init', 'gaku_frames_block_styles' );
