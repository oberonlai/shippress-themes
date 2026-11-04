<?php
/**
 * Sokuten Survey: functions and definitions.
 *
 * @package sokuten-survey
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SOKUTEN_SURVEY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function sokuten_survey_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'sokuten_survey_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before first paint;
 * the strip script loads in the footer.
 */
function sokuten_survey_enqueue() {
	wp_enqueue_style( 'sokuten-survey-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SOKUTEN_SURVEY_VERSION );
	wp_enqueue_style( 'sokuten-survey-style', get_stylesheet_uri(), array( 'sokuten-survey-sp-scroll' ), SOKUTEN_SURVEY_VERSION );
	wp_enqueue_script( 'sokuten-survey-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SOKUTEN_SURVEY_VERSION, false );
	wp_enqueue_script( 'sokuten-survey-strip', get_theme_file_uri( 'assets/js/ss-strip.js' ), array( 'sokuten-survey-sp-scroll' ), SOKUTEN_SURVEY_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'sokuten_survey_enqueue' );

/**
 * Pattern category.
 */
function sokuten_survey_pattern_categories() {
	register_block_pattern_category(
		'sokuten-survey',
		array(
			'label'       => __( 'Sokuten Survey', 'sokuten-survey' ),
			'description' => __( 'Sections for a land surveying firm: the tagline over an accordion photo strip, the sites a visit suits, the hour on the ground with counted figures, a parallax lot, two voices, the fee table, dated notes, the FAQ and the rounded-top request band.', 'sokuten-survey' ),
		)
	);
}
add_action( 'init', 'sokuten_survey_pattern_categories' );
