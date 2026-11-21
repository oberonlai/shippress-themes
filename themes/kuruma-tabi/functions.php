<?php
/**
 * Kuruma Tabi: functions and definitions.
 *
 * @package kuruma-tabi
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KURUMA_TABI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kuruma_tabi_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kuruma_tabi_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function kuruma_tabi_enqueue() {
	wp_enqueue_style( 'kuruma-tabi-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KURUMA_TABI_VERSION );
	wp_enqueue_style( 'kuruma-tabi-style', get_stylesheet_uri(), array( 'kuruma-tabi-sp-scroll' ), KURUMA_TABI_VERSION );
	wp_enqueue_script( 'kuruma-tabi-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KURUMA_TABI_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kuruma_tabi_enqueue' );

/**
 * Pattern category.
 */
function kuruma_tabi_pattern_categories() {
	register_block_pattern_category(
		'kuruma-tabi',
		array(
			'label'       => __( 'Kuruma Tabi', 'kuruma-tabi' ),
			'description' => __( 'Sections for a private chauffeured sightseeing company: the split hero with a day-timeline foot, a horizontal day line, mirrored route rows with line drawings on the seam, a fare table, guide portraits with a docked tab, three circular vehicle photographs and one itinerary request.', 'kuruma-tabi' ),
		)
	);
}
add_action( 'init', 'kuruma_tabi_pattern_categories' );
