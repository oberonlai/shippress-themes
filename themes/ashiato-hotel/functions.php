<?php
/**
 * Ashiato Hotel: functions and definitions.
 *
 * @package ashiato-hotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'ASHIATO_HOTEL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function ashiato_hotel_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'ashiato_hotel_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function ashiato_hotel_enqueue() {
	wp_enqueue_style( 'ashiato-hotel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), ASHIATO_HOTEL_VERSION );
	wp_enqueue_style( 'ashiato-hotel-style', get_stylesheet_uri(), array( 'ashiato-hotel-sp-scroll' ), ASHIATO_HOTEL_VERSION );
	wp_enqueue_script( 'ashiato-hotel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ASHIATO_HOTEL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'ashiato_hotel_enqueue' );

/**
 * Pattern category.
 */
function ashiato_hotel_pattern_categories() {
	register_block_pattern_category(
		'ashiato-hotel',
		array(
			'label'       => __( 'Ashiato Hotel', 'ashiato-hotel' ),
			'description' => __( 'Sections for a hotel for guests with dogs: the split first screen, the quick answers, the room rows, the dog run window, the rates, the FAQ and the booking steps.', 'ashiato-hotel' ),
		)
	);
}
add_action( 'init', 'ashiato_hotel_pattern_categories' );

/**
 * The three photographs that fade in over the first one in the home window are decorative repeats of the same arrival
 * story: hide them from assistive technology so a screen reader gets the first photograph only.
 *
 * @param string $html  Block HTML.
 * @param array  $block Block data.
 * @return string
 */
function ashiato_hotel_hide_alt_slides( $html, $block ) {
	if ( false !== strpos( $html, 'ah-slide--alt' ) ) {
		$html = preg_replace( '/<figure\b/', '<figure aria-hidden="true"', $html, 1 );
	}
	return $html;
}
add_filter( 'render_block_core/image', 'ashiato_hotel_hide_alt_slides', 10, 2 );
