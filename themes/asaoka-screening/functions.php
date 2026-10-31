<?php
/**
 * Asaoka Screening — functions and definitions.
 *
 * @package asaoka-screening
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'ASAOKA_SCREENING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; nothing in the theme needs it.
 */
function asaoka_screening_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'asaoka_screening_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before the first paint).
 */
function asaoka_screening_enqueue() {
	wp_enqueue_style( 'asaoka-screening-style', get_stylesheet_uri(), array(), ASAOKA_SCREENING_VERSION );
	wp_enqueue_style( 'asaoka-screening-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'asaoka-screening-style' ), ASAOKA_SCREENING_VERSION );
	wp_enqueue_script( 'asaoka-screening-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ASAOKA_SCREENING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'asaoka_screening_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function asaoka_screening_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'asaoka-screening' ) ) );
}
add_action( 'init', 'asaoka_screening_block_styles' );

/**
 * Pattern category.
 */
function asaoka_screening_pattern_categories() {
	register_block_pattern_category(
		'asaoka-screening',
		array(
			'label'       => __( 'Asaoka Screening', 'asaoka-screening' ),
			'description' => __( 'Sections for a corporate health screening centre: a split hero with a mist wave and a tabbed notice card, scoop-corner photo tiles, square-dot label rows, a parallax photo band, company stories, packages and open dates.', 'asaoka-screening' ),
		)
	);
}
add_action( 'init', 'asaoka_screening_pattern_categories' );
