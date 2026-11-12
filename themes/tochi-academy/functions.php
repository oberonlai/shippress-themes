<?php
/**
 * Tochi Academy — functions and definitions.
 *
 * @package tochi-academy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TOCHI_ACADEMY_VERSION', wp_get_theme()->get( 'Version' ) );

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function tochi_academy_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'tochi_academy_setup' );

/**
 * Front-end styles and scripts. The scroll-effects script loads in the head, not deferred: it adds html.sp-js before the
 * first paint. The slider script only handles clicks and a 6 s timer (no scroll listener).
 */
function tochi_academy_enqueue() {
	wp_enqueue_style( 'tochi-academy-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), TOCHI_ACADEMY_VERSION );
	wp_enqueue_style( 'tochi-academy-style', get_stylesheet_uri(), array( 'tochi-academy-sp-scroll' ), TOCHI_ACADEMY_VERSION );
	wp_enqueue_script( 'tochi-academy-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TOCHI_ACADEMY_VERSION, false );
	wp_enqueue_script( 'tochi-academy-slider', get_theme_file_uri( 'assets/ta-slider.js' ), array(), TOCHI_ACADEMY_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'tochi_academy_enqueue' );

/**
 * Pattern category.
 */
function tochi_academy_pattern_categories() {
	register_block_pattern_category(
		'tochi-academy',
		array(
			'label'       => __( 'Tochi Academy', 'tochi-academy' ),
			'description' => __( 'Sections for an evening college: the hairline-circle slider stage, the ticker band, cohort cards, the 24-week timeline, the parallax evening band, the exam sitting, faculty rows, journal cards and fees.', 'tochi-academy' ),
		)
	);
}
add_action( 'init', 'tochi_academy_pattern_categories' );

/**
 * Block style for the fees table (full-width, dashed rules, nowrap prices; stacks below 782px).
 */
function tochi_academy_block_styles() {
	register_block_style(
		'core/table',
		array(
			'name'  => 'tochi-fees',
			'label' => __( 'Fees', 'tochi-academy' ),
		)
	);
}
add_action( 'init', 'tochi_academy_block_styles' );
