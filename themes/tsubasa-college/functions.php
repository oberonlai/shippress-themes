<?php
/**
 * Tsubasa College: functions and definitions.
 *
 * @package tsubasa-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'TSUBASA_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function tsubasa_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'tsubasa_college_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function tsubasa_college_enqueue() {
	wp_enqueue_style( 'tsubasa-college-style', get_stylesheet_uri(), array(), TSUBASA_COLLEGE_VERSION );
	wp_enqueue_style( 'tsubasa-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), TSUBASA_COLLEGE_VERSION );
	wp_enqueue_script( 'tsubasa-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TSUBASA_COLLEGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'tsubasa_college_enqueue' );

/**
 * Pattern category.
 */
function tsubasa_college_pattern_categories() {
	register_block_pattern_category(
		'tsubasa-college',
		array(
			'label'       => __( 'Tsubasa College', 'tsubasa-college' ),
			'description' => __( 'Sections for an aircraft maintenance college: the focus-pull hangar hero, the slate cohort strip, an isometric module field, the 18-month ruler, the certification ledger, a parallax hangar band, instructors, fees and a grey sitemap footer.', 'tsubasa-college' ),
		)
	);
}
add_action( 'init', 'tsubasa_college_pattern_categories' );
