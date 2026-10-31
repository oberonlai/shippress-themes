<?php
/**
 * Mimamori College — functions and definitions.
 *
 * @package mimamori-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'MIMAMORI_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function mimamori_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'mimamori_college_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js runs in the head (not deferred) so the no-JS state is decided before the
 * first paint; hero.js (the three-photo cross-fade) loads on the front page only.
 */
function mimamori_college_enqueue() {
	wp_enqueue_style( 'mimamori-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), MIMAMORI_COLLEGE_VERSION );
	wp_enqueue_style( 'mimamori-college-style', get_stylesheet_uri(), array( 'mimamori-college-sp-scroll' ), MIMAMORI_COLLEGE_VERSION );
	wp_enqueue_script( 'mimamori-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MIMAMORI_COLLEGE_VERSION, false );
	if ( is_front_page() ) {
		wp_enqueue_script( 'mimamori-college-hero', get_theme_file_uri( 'assets/hero.js' ), array(), MIMAMORI_COLLEGE_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'mimamori_college_enqueue' );

/**
 * Pattern category.
 */
function mimamori_college_pattern_categories() {
	register_block_pattern_category(
		'mimamori-college',
		array(
			'label'       => __( 'Mimamori College', 'mimamori-college' ),
			'description' => __( 'Sections for a caregiver training college: the inset photo with a gateway strip, the notice band, one sheet of five coloured-rule courses, the feather and ruled figures, who it is for, a training day, placement, one story and the notices.', 'mimamori-college' ),
		)
	);
}
add_action( 'init', 'mimamori_college_pattern_categories' );
