<?php
/**
 * Hibari Flight — functions and definitions.
 *
 * @package hibari-flight
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HIBARI_FLIGHT_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hibari_flight_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hibari_flight_setup' );

/**
 * Front-end styles and scripts. sp-scroll loads in the head, not deferred, so the hidden states are set before the first paint.
 */
function hibari_flight_enqueue() {
	wp_enqueue_style( 'hibari-flight-style', get_stylesheet_uri(), array(), HIBARI_FLIGHT_VERSION );
	wp_enqueue_style( 'hibari-flight-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), HIBARI_FLIGHT_VERSION );
	wp_enqueue_script( 'hibari-flight-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HIBARI_FLIGHT_VERSION, false );
	wp_enqueue_script( 'hibari-flight-strip', get_theme_file_uri( 'assets/strip.js' ), array(), HIBARI_FLIGHT_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'hibari_flight_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hibari_flight_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'hibari-flight' ) ) );
	register_block_style( 'core/button', array( 'name' => 'text-link', 'label' => __( 'Text link with an arrow', 'hibari-flight' ) ) );
}
add_action( 'init', 'hibari_flight_block_styles' );

/**
 * Pattern category.
 */
function hibari_flight_pattern_categories() {
	register_block_pattern_category(
		'hibari-flight',
		array(
			'label'       => __( 'Hibari Flight', 'hibari-flight' ),
			'description' => __( 'Sections for a private pilot flight school: the photo window with one big corner, photos with drawn larks on their edges, the circuit statement, the licence rows, the navy lesson strip, the airfield cover, the crew roster, the fee table, the stories and the trial-flight close.', 'hibari-flight' ),
		)
	);
}
add_action( 'init', 'hibari_flight_pattern_categories' );
