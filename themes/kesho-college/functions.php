<?php
/**
 * Kesho College — functions and definitions.
 *
 * @package kesho-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'KESHO_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles (the scroll effects stay in their final state inside the editor).
 */
function kesho_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kesho_college_setup' );

/**
 * Front-end styles and the scroll script. The script loads in the head, not deferred, so html.sp-js is set before the
 * first paint.
 */
function kesho_college_enqueue() {
	wp_enqueue_style( 'kesho-college-style', get_stylesheet_uri(), array(), KESHO_COLLEGE_VERSION );
	wp_enqueue_style( 'kesho-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kesho-college-style' ), KESHO_COLLEGE_VERSION );
	wp_enqueue_script( 'kesho-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KESHO_COLLEGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kesho_college_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kesho_college_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'text-link',
			'label' => __( 'Text link with an arrow', 'kesho-college' ),
		)
	);
}
add_action( 'init', 'kesho_college_block_styles' );

/**
 * Pattern category.
 */
function kesho_college_pattern_categories() {
	register_block_pattern_category(
		'kesho-college',
		array(
			'label'       => __( 'Kesho College', 'kesho-college' ),
			'description' => __( 'Sections for a hairdressing and beauty college: the drifting portrait strip with the clipped giant word, the centred intake statement, the wide photo with an overlapping caption, the day by hour, course tiles, instructors, the tuition table, graduate quotes and the open morning.', 'kesho-college' ),
		)
	);
}
add_action( 'init', 'kesho_college_pattern_categories' );
