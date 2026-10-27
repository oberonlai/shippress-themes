<?php
/**
 * Hibiki Speech — functions and definitions.
 *
 * @package hibiki-speech
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'HIBIKI_SPEECH_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hibiki_speech_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hibiki_speech_setup' );

/**
 * Front-end styles and the scroll-effects script (in the head, not deferred, so the reveal states are set before first paint).
 */
function hibiki_speech_enqueue() {
	wp_enqueue_style( 'hibiki-speech-style', get_stylesheet_uri(), array(), HIBIKI_SPEECH_VERSION );
	wp_enqueue_style( 'hibiki-speech-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hibiki-speech-style' ), HIBIKI_SPEECH_VERSION );
	wp_enqueue_script( 'hibiki-speech-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HIBIKI_SPEECH_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hibiki_speech_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hibiki_speech_block_styles() {
	$styles = array(
		'core/button'    => array(
			'pill'         => __( 'Sunflower pill with arrow', 'hibiki-speech' ),
			'outline-pill' => __( 'Outline pill', 'hibiki-speech' ),
		),
		'core/paragraph' => array(
			'label' => __( 'Section label', 'hibiki-speech' ),
			'lead'  => __( 'Lead paragraph', 'hibiki-speech' ),
		),
	);
	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style( $block, array( 'name' => $name, 'label' => $label ) );
		}
	}
}
add_action( 'init', 'hibiki_speech_block_styles' );

/**
 * Pattern category.
 */
function hibiki_speech_pattern_categories() {
	register_block_pattern_category(
		'hibiki-speech',
		array(
			'label'       => __( 'Hibiki Speech', 'hibiki-speech' ),
			'description' => __( 'Sections for a speech therapy clinic: the torn-edge photo pair with crayon marks and a floating badge, a three-photo cluster, problem lines on arches, a vertical heading beside a rounded photo row, people as a text list, one story, fees and notes.', 'hibiki-speech' ),
		)
	);
}
add_action( 'init', 'hibiki_speech_pattern_categories' );
