<?php
/**
 * Hibana College — functions and definitions.
 *
 * @package hibana-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HIBANA_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared; without the plugin it does nothing.
 */
function hibana_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hibana_college_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js runs in the head (not deferred) so the no-JS state is decided before the
 * first paint.
 */
function hibana_college_enqueue() {
	wp_enqueue_style( 'hibana-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HIBANA_COLLEGE_VERSION );
	wp_enqueue_style( 'hibana-college-style', get_stylesheet_uri(), array( 'hibana-college-sp-scroll' ), HIBANA_COLLEGE_VERSION );
	wp_enqueue_script( 'hibana-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HIBANA_COLLEGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hibana_college_enqueue' );

/**
 * Pattern category.
 */
function hibana_college_pattern_categories() {
	register_block_pattern_category(
		'hibana-college',
		array(
			'label'       => __( 'Hibana College', 'hibana-college' ),
			'description' => __( 'Sections for a welding and fabrication trade school: the ring-field hero with a masked photograph and a month timeline, edge-to-edge twin photo panels with a caption card and tab, caps heading rows with a round arrow, the week, the floor band, a cohort, instructors, stories and fees.', 'hibana-college' ),
		)
	);
}
add_action( 'init', 'hibana_college_pattern_categories' );
