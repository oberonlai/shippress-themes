<?php
/**
 * Yuragi Spa — functions and definitions.
 *
 * @package yuragi-spa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'YURAGI_SPA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function yuragi_spa_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'yuragi_spa_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so the hidden state of the
 * reveals is set before the first paint; without it everything stays visible.
 */
function yuragi_spa_enqueue() {
	wp_enqueue_style( 'yuragi-spa-style', get_stylesheet_uri(), array(), YURAGI_SPA_VERSION );
	wp_enqueue_style( 'yuragi-spa-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'yuragi-spa-style' ), YURAGI_SPA_VERSION );
	wp_enqueue_script( 'yuragi-spa-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YURAGI_SPA_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'yuragi_spa_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function yuragi_spa_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'text-link',
			'label' => __( 'Text link with a dash', 'yuragi-spa' ),
		)
	);
}
add_action( 'init', 'yuragi_spa_block_styles' );

/**
 * Pattern category.
 */
function yuragi_spa_pattern_categories() {
	register_block_pattern_category(
		'yuragi-spa',
		array(
			'label'       => __( 'Yuragi Spa', 'yuragi-spa' ),
			'description' => __( 'Sections for a quiet day spa: the contrast-word hero with an information bar, the intro, the looped treatment names, the sticky treatment list, the letterbox band, booking, people, this season, guest notes and the visit block.', 'yuragi-spa' ),
		)
	);
}
add_action( 'init', 'yuragi_spa_pattern_categories' );
