<?php
/**
 * Sazanami Hotel: functions and definitions.
 *
 * @package sazanami-hotel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SAZANAMI_HOTEL_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function sazanami_hotel_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'sazanami_hotel_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function sazanami_hotel_enqueue() {
	wp_enqueue_style( 'sazanami-hotel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SAZANAMI_HOTEL_VERSION );
	wp_enqueue_style( 'sazanami-hotel-style', get_stylesheet_uri(), array( 'sazanami-hotel-sp-scroll' ), SAZANAMI_HOTEL_VERSION );
	wp_enqueue_script( 'sazanami-hotel-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SAZANAMI_HOTEL_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'sazanami_hotel_enqueue' );

/**
 * Pattern category.
 */
function sazanami_hotel_pattern_categories() {
	register_block_pattern_category(
		'sazanami-hotel',
		array(
			'label'       => __( 'Sazanami Hotel', 'sazanami-hotel' ),
			'description' => __( 'Sections for a small lakeside hotel: the film-strip first screen, abutting photo pairs with verse, the water band, neighbour rows, booking steps and the letter.', 'sazanami-hotel' ),
		)
	);
}
add_action( 'init', 'sazanami_hotel_pattern_categories' );

// The photo strip's scroll-region semantics (role / aria-label / tabindex) are added at render time: core/group's
// block markup cannot carry raw attributes without failing editor block validation.
add_filter( 'render_block_core/group', function ( $html, $block ) {
	if ( false === strpos( (string) ( $block['attrs']['className'] ?? '' ), 'sz-strip' ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $html;
	}
	$p = new WP_HTML_Tag_Processor( $html );
	if ( $p->next_tag( array( 'class_name' => 'sz-strip' ) ) ) {
		$p->set_attribute( 'role', 'group' );
		$p->set_attribute( 'aria-label', sazanami_hotel_a( 'strip_label' ) );
		$p->set_attribute( 'tabindex', '0' );
		return $p->get_updated_html();
	}
	return $html;
}, 10, 2 );
