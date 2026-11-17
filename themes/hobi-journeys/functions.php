<?php
/**
 * Hobi Journeys: functions and definitions.
 *
 * @package hobi-journeys
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'HOBI_JOURNEYS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hobi_journeys_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hobi_journeys_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function hobi_journeys_enqueue() {
	wp_enqueue_style( 'hobi-journeys-style', get_stylesheet_uri(), array(), HOBI_JOURNEYS_VERSION );
	wp_enqueue_style( 'hobi-journeys-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hobi-journeys-style' ), HOBI_JOURNEYS_VERSION );
	wp_enqueue_script( 'hobi-journeys-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HOBI_JOURNEYS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hobi_journeys_enqueue' );

/**
 * Pattern category.
 */
function hobi_journeys_pattern_categories() {
	register_block_pattern_category(
		'hobi-journeys',
		array(
			'label'       => __( 'Hobi Journeys', 'hobi-journeys' ),
			'description' => __( 'Sections for a corporate incentive travel agency: the heavy-headline hero with a hairline ticket card, the staggered case wall, ruled planning stages and the navy brief band.', 'hobi-journeys' ),
		)
	);
}
add_action( 'init', 'hobi_journeys_pattern_categories' );
