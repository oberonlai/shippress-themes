<?php
/**
 * Futari Journeys: functions and definitions.
 *
 * @package futari-journeys
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'FUTARI_JOURNEYS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function futari_journeys_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'futari_journeys_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function futari_journeys_enqueue() {
	wp_enqueue_style( 'futari-journeys-style', get_stylesheet_uri(), array(), FUTARI_JOURNEYS_VERSION );
	wp_enqueue_style( 'futari-journeys-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'futari-journeys-style' ), FUTARI_JOURNEYS_VERSION );
	wp_enqueue_script( 'futari-journeys-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), FUTARI_JOURNEYS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'futari_journeys_enqueue' );

/**
 * Pattern category.
 */
function futari_journeys_pattern_categories() {
	register_block_pattern_category(
		'futari-journeys',
		array(
			'label'       => __( 'Futari Journeys', 'futari-journeys' ),
			'description' => __( 'Sections for a bespoke couples travel planner: the inset photo with three question doors, the square and wide photo pair, the itinerary cards and the question rows.', 'futari-journeys' ),
		)
	);
}
add_action( 'init', 'futari_journeys_pattern_categories' );
