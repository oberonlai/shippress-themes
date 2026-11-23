<?php
/**
 * Otonoha Acoustics: functions and definitions.
 *
 * @package otonoha-acoustics
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'OTONOHA_ACOUSTICS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function otonoha_acoustics_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'otonoha_acoustics_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function otonoha_acoustics_enqueue() {
	wp_enqueue_style( 'otonoha-acoustics-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), OTONOHA_ACOUSTICS_VERSION );
	wp_enqueue_style( 'otonoha-acoustics-style', get_stylesheet_uri(), array( 'otonoha-acoustics-sp-scroll' ), OTONOHA_ACOUSTICS_VERSION );
	wp_enqueue_script( 'otonoha-acoustics-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), OTONOHA_ACOUSTICS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'otonoha_acoustics_enqueue' );

/**
 * Pattern category.
 */
function otonoha_acoustics_pattern_categories() {
	register_block_pattern_category(
		'otonoha-acoustics',
		array(
			'label'       => __( 'Otonoha Acoustics', 'otonoha-acoustics' ),
			'description' => __( 'Sections for an architectural acoustic consultancy: a diagonal-split first screen with a survey-day timeline, a drifting strip of room cards on a pale band, a sticky photograph beside four measurements, a report feed on a white sheet, a parallax hall band, case notes, a fee table and a graphite booking band.', 'otonoha-acoustics' ),
		)
	);
}
add_action( 'init', 'otonoha_acoustics_pattern_categories' );

/* The duplicated marquee set is decorative: add aria-hidden on output (a block comment cannot carry it without invalidating core/group). */
add_filter( 'render_block_core/group', function ( $html, $block ) {
	if ( false !== strpos( (string) ( $block['attrs']['className'] ?? '' ), 'oto-strip__set--dup' ) ) {
		$html = preg_replace( '/^<div /', '<div aria-hidden="true" ', ltrim( $html ), 1 );
	}
	return $html;
}, 10, 2 );
