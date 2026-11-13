<?php
/**
 * Akiha College: functions and definitions.
 *
 * @package akiha-college
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'AKIHA_COLLEGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (style.css and the sp-scroll rules, so the editor shows the final state).
 */
function akiha_college_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'akiha_college_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so html.sp-js is set before first paint).
 */
function akiha_college_enqueue() {
	wp_enqueue_style( 'akiha-college-style', get_stylesheet_uri(), array(), AKIHA_COLLEGE_VERSION );
	wp_enqueue_style( 'akiha-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'akiha-college-style' ), AKIHA_COLLEGE_VERSION );
	wp_enqueue_script( 'akiha-college-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AKIHA_COLLEGE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'akiha_college_enqueue' );

/**
 * Pattern category.
 */
function akiha_college_pattern_categories() {
	register_block_pattern_category(
		'akiha-college',
		array(
			'label'       => __( 'Akiha College', 'akiha-college' ),
			'description' => __( 'Sections for an electrical apprenticeship college: the framed hero window, the case wall with a sticky label rail, the assessment rows, the curtain of panels over one photograph and the fee rows.', 'akiha-college' ),
		)
	);
}
add_action( 'init', 'akiha_college_pattern_categories' );
