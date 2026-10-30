<?php
/**
 * Kikin Advisors — functions and definitions.
 *
 * @package kikin-advisors
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';

define( 'KIKIN_ADVISORS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; nothing in the theme needs it.
 */
function kikin_advisors_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kikin_advisors_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred, so html.sp-js is set before the first paint).
 */
function kikin_advisors_enqueue() {
	wp_enqueue_style( 'kikin-advisors-style', get_stylesheet_uri(), array(), KIKIN_ADVISORS_VERSION );
	wp_enqueue_style( 'kikin-advisors-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kikin-advisors-style' ), KIKIN_ADVISORS_VERSION );
	wp_enqueue_script( 'kikin-advisors-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KIKIN_ADVISORS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kikin_advisors_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kikin_advisors_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'pill-deep', 'label' => __( 'Deep pill', 'kikin-advisors' ) ) );
	register_block_style( 'core/button', array( 'name' => 'pill-outline', 'label' => __( 'Outline pill', 'kikin-advisors' ) ) );
}
add_action( 'init', 'kikin_advisors_block_styles' );

/**
 * Pattern category.
 */
function kikin_advisors_pattern_categories() {
	register_block_pattern_category(
		'kikin-advisors',
		array(
			'label'       => __( 'Kikin Advisors', 'kikin-advisors' ),
			'description' => __( 'Sections for a workplace pension adviser: the line-art street cover with wiping label bars, notched hairline panels with round thumbnails, butter bands with an outline circle badge, the hour in three rows, the fee table and the grid-paper request block.', 'kikin-advisors' ),
		)
	);
}
add_action( 'init', 'kikin_advisors_pattern_categories' );
