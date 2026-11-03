<?php
/**
 * Kango College — functions and definitions.
 *
 * @package kango-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KANGO_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll-effect CSS too, so the editor shows the final state).
 */
function kango_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kango_college_setup' );

/**
 * Front-end styles and scripts. The scroll-effect script goes in the head, not deferred, so the hidden
 * states exist before first paint; the quote-strip button script is a small click handler in the footer.
 */
function kango_college_enqueue() {
	wp_enqueue_style( 'kango-college-style', get_stylesheet_uri(), array(), KANGO_COLLEGE_VERSION );
	wp_enqueue_style( 'kango-college-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kango-college-style' ), KANGO_COLLEGE_VERSION );
	wp_enqueue_script( 'kango-college-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KANGO_COLLEGE_VERSION, false );
	wp_enqueue_script( 'kango-college-strip', get_theme_file_uri( 'assets/kc-strip.js' ), array(), KANGO_COLLEGE_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'kango_college_enqueue' );

/**
 * Pattern category.
 */
function kango_college_pattern_categories() {
	register_block_pattern_category(
		'kango-college',
		array(
			'label'       => __( 'Kango College', 'kango-college' ),
			'description' => __( 'Sections for a nursing college: a photograph-left first screen with a wine notice card, three glyph cells, a glow lead with a sideways quote strip, the teaching day in timed rows and ruled note rows.', 'kango-college' ),
		)
	);
}
add_action( 'init', 'kango_college_pattern_categories' );
