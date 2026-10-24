<?php
/**
 * Shokutaku Dining — functions and definitions.
 *
 * @package shokutaku-dining
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'SHOKUTAKU_DINING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shokutaku_dining_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shokutaku_dining_setup' );

/**
 * Front-end styles and the scroll script. style.css loads after sp-scroll.css so the theme's motion timings win; sp-scroll.js loads in the head, not deferred, so html.sp-js is set before
 * the first paint (the hidden reveal states only exist under html.sp-js).
 */
function shokutaku_dining_enqueue() {
	wp_enqueue_style( 'shokutaku-dining-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SHOKUTAKU_DINING_VERSION );
	wp_enqueue_style( 'shokutaku-dining-style', get_stylesheet_uri(), array( 'shokutaku-dining-sp-scroll' ), SHOKUTAKU_DINING_VERSION );
	wp_enqueue_script( 'shokutaku-dining-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHOKUTAKU_DINING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shokutaku_dining_enqueue' );

/**
 * Pattern category.
 */
function shokutaku_dining_pattern_categories() {
	register_block_pattern_category(
		'shokutaku-dining',
		array(
			'label'       => __( 'Shokutaku Dining', 'shokutaku-dining' ),
			'description' => __( 'Sections for a neighbourhood restaurant: the arch-framed hero with an info bar, the ghost-lettered table section with scattered arch photographs, the three sittings, the full-bleed room band, the priced menu, the pill dish strip, the people list, the visit block and the booking close.', 'shokutaku-dining' ),
		)
	);
}
add_action( 'init', 'shokutaku_dining_pattern_categories' );

/**
 * URL of a theme photograph (patterns use it so the markup stays valid wherever the theme sits).
 *
 * @param string $file File name inside assets/images/.
 * @return string
 */
function shokutaku_dining_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Ghost words are decoration: hide them from assistive technology on the front end. (core/paragraph does not
 * accept an aria-hidden attribute in its saved markup, so the attribute is added when the block is rendered.)
 *
 * @param string $content Rendered block.
 * @return string
 */
function shokutaku_dining_ghost_aria( $content ) {
	if ( false !== strpos( $content, 'shk-ghost' ) && false === strpos( $content, 'aria-hidden' ) ) {
		$content = preg_replace( '/<p /', '<p aria-hidden="true" ', $content, 1 );
	}
	return $content;
}
add_filter( 'render_block_core/paragraph', 'shokutaku_dining_ghost_aria' );
