<?php
/**
 * Kyugo Training — functions and definitions.
 *
 * @package kyugo-training
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KYUGO_TRAINING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll effects stay in their final state inside the editor).
 */
function kyugo_training_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kyugo_training_setup' );

/**
 * Front end: styles, the scroll-effects script in the head (not deferred, so html.sp-js is set before first paint) and
 * the tiny click-only card stack script.
 */
function kyugo_training_enqueue() {
	wp_enqueue_style( 'kyugo-training-style', get_stylesheet_uri(), array(), KYUGO_TRAINING_VERSION );
	wp_enqueue_style( 'kyugo-training-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KYUGO_TRAINING_VERSION );
	wp_enqueue_script( 'kyugo-training-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KYUGO_TRAINING_VERSION, false );
	wp_enqueue_script( 'kyugo-training-stack', get_theme_file_uri( 'assets/kt-stack.js' ), array(), KYUGO_TRAINING_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'kyugo_training_enqueue' );

/**
 * Pattern category.
 */
function kyugo_training_pattern_categories() {
	register_block_pattern_category(
		'kyugo-training',
		array(
			'label'       => __( 'Kyugo Training', 'kyugo-training' ),
			'description' => __( 'Sections for a workplace first-aid training centre: the framed hero with a corner wash, dated notes, the stacked-paper training day, the hall, courses, stats, instructors, stories and the booking line.', 'kyugo-training' ),
		)
	);
}
add_action( 'init', 'kyugo_training_pattern_categories' );
