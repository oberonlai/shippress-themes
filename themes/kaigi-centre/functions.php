<?php
/**
 * Kaigi Centre — functions and definitions.
 *
 * @package kaigi-centre
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KAIGI_CENTRE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kaigi_centre_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kaigi_centre_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so html.sp-js is set before
 * the first paint (the hidden reveal states only exist under html.sp-js).
 */
function kaigi_centre_enqueue() {
	wp_enqueue_style( 'kaigi-centre-style', get_stylesheet_uri(), array(), KAIGI_CENTRE_VERSION );
	wp_enqueue_style( 'kaigi-centre-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kaigi-centre-style' ), KAIGI_CENTRE_VERSION );
	wp_enqueue_script( 'kaigi-centre-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAIGI_CENTRE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kaigi_centre_enqueue' );

/**
 * Pattern category.
 */
function kaigi_centre_pattern_categories() {
	register_block_pattern_category(
		'kaigi-centre',
		array(
			'label'       => __( 'Kaigi Centre', 'kaigi-centre' ),
			'description' => __( 'Sections for a conference centre: the framed hall photograph with a plum room panel, the room strip, the floor-plan room network, stacked gatherings, rates and the house team.', 'kaigi-centre' ),
		)
	);
}
add_action( 'init', 'kaigi_centre_pattern_categories' );

/**
 * URL of a theme image (patterns use it so the markup stays valid wherever the theme sits).
 *
 * @param string $file File name inside assets/images/.
 * @return string
 */
function kaigi_centre_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Echo one theme string, escaped.
 *
 * @param string $key String key (see inc/i18n/en.php).
 */
function kaigi_centre_e( $key ) {
	echo esc_html( kaigi_centre_t( $key ) );
}

// The marquee's duplicate track is decorative: hide it from assistive tech on the front end (a group block cannot save aria-hidden).
add_filter( 'render_block_core/group', function ( $html, $block ) {
	if ( false !== strpos( (string) ( $block['attrs']['className'] ?? '' ), 'kc-strip__track--dup' ) ) {
		$html = preg_replace( '/<div /', '<div aria-hidden="true" ', $html, 1 );
	}
	return $html;
}, 10, 2 );
