<?php
/**
 * Hakari Course — functions and definitions.
 *
 * @package hakari-course
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HAKARI_COURSE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles (style.css and the scroll effects, so the editor shows the final state).
 * WooCommerce and Tutor LMS support is declared either way; without the plugins it does nothing.
 */
function hakari_course_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hakari_course_setup' );

/**
 * Front-end styles and the small scroll-effects script (loaded in <head>, not deferred, so the hidden start state
 * only exists when the script runs).
 */
function hakari_course_enqueue() {
	wp_enqueue_style( 'hakari-course-style', get_stylesheet_uri(), array(), HAKARI_COURSE_VERSION );
	wp_enqueue_style( 'hakari-course-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HAKARI_COURSE_VERSION );
	wp_enqueue_script( 'hakari-course-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HAKARI_COURSE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hakari_course_enqueue' );

/**
 * Pattern category.
 */
function hakari_course_pattern_categories() {
	register_block_pattern_category(
		'hakari-course',
		array(
			'label'       => __( 'Hakari Course', 'hakari-course' ),
			'description' => __( 'Landing sections: the rounded full-bleed hero with a hashtag foot band, white rounded panels on a pastel wash, tilted photo rows, the syllabus accordion, the parallax photo band, cohort dates, the fee table, FAQ and the closing call to action.', 'hakari-course' ),
		)
	);
}
add_action( 'init', 'hakari_course_pattern_categories' );
