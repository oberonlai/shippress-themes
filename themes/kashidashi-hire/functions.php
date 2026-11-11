<?php
/**
 * Kashidashi Hire — functions and definitions.
 *
 * @package kashidashi-hire
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KASHIDASHI_HIRE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kashidashi_hire_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kashidashi_hire_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before
 * the first paint; without it every sp-* element stays visible.
 */
function kashidashi_hire_enqueue() {
	wp_enqueue_style( 'kashidashi-hire-style', get_stylesheet_uri(), array(), KASHIDASHI_HIRE_VERSION );
	wp_enqueue_style( 'kashidashi-hire-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KASHIDASHI_HIRE_VERSION );
	wp_enqueue_script( 'kashidashi-hire-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KASHIDASHI_HIRE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kashidashi_hire_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kashidashi_hire_block_styles() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'micro-tag',
			'label' => __( 'Micro tag', 'kashidashi-hire' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'notched',
			'label' => __( 'Notched tile', 'kashidashi-hire' ),
		)
	);
}
add_action( 'init', 'kashidashi_hire_block_styles' );

/**
 * Pattern category.
 */
function kashidashi_hire_pattern_categories() {
	register_block_pattern_category(
		'kashidashi-hire',
		array(
			'label'       => __( 'Kashidashi Hire', 'kashidashi-hire' ),
			'description' => __( 'Sections for a plant hire yard: the slant-cut tab and wedge hero with its two-cell dock, the tabbed fleet finder, the hire-week strip and the diagonal request band.', 'kashidashi-hire' ),
		)
	);
}
add_action( 'init', 'kashidashi_hire_pattern_categories' );
