<?php
/**
 * Mikura Storage: functions and definitions.
 *
 * @package mikura-storage
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'MIKURA_STORAGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll-effects CSS too, so the editor shows the final state).
 */
function mikura_storage_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'mikura_storage_setup' );

/**
 * Front-end styles, the scroll-effects script (in the head, not deferred, so no content flashes) and the tiny pause toggle.
 */
function mikura_storage_enqueue() {
	wp_enqueue_style( 'mikura-storage-style', get_stylesheet_uri(), array(), MIKURA_STORAGE_VERSION );
	wp_enqueue_style( 'mikura-storage-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'mikura-storage-style' ), MIKURA_STORAGE_VERSION );
	wp_enqueue_script( 'mikura-storage-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MIKURA_STORAGE_VERSION, false );
	if ( is_front_page() ) {
		wp_enqueue_script( 'mikura-storage-strip', get_theme_file_uri( 'assets/mk-strip.js' ), array(), MIKURA_STORAGE_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'mikura_storage_enqueue' );

/**
 * Pattern category.
 */
function mikura_storage_pattern_categories() {
	register_block_pattern_category(
		'mikura-storage',
		array(
			'label'       => __( 'Mikura Storage', 'mikura-storage' ),
			'description' => __( 'Sections for a household self-storage landing page: hero with a drifting photo strip, numbered photo cards, sizes with a sticky photograph, visit steps, prices, parallax band, stories, FAQ and the booking panel.', 'mikura-storage' ),
		)
	);
}
add_action( 'init', 'mikura_storage_pattern_categories' );
