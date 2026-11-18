<?php
/**
 * Moyooshi Productions: functions and definitions.
 *
 * @package moyooshi-productions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'MOYOOSHI_PRODUCTIONS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function moyooshi_productions_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'moyooshi_productions_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function moyooshi_productions_enqueue() {
	wp_enqueue_style( 'moyooshi-productions-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), MOYOOSHI_PRODUCTIONS_VERSION );
	wp_enqueue_style( 'moyooshi-productions-style', get_stylesheet_uri(), array( 'moyooshi-productions-sp-scroll' ), MOYOOSHI_PRODUCTIONS_VERSION );
	wp_enqueue_script( 'moyooshi-productions-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MOYOOSHI_PRODUCTIONS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'moyooshi_productions_enqueue' );

/**
 * Pattern category.
 */
function moyooshi_productions_pattern_categories() {
	register_block_pattern_category(
		'moyooshi-productions',
		array(
			'label'       => __( 'Moyooshi Productions', 'moyooshi-productions' ),
			'description' => __( 'Sections for an event production agency: the full-bleed photograph with its run-of-show cue cells, the offset problem column, giant section words, ledger rows, the lit-truss band, the portrait triptych and the run sheet.', 'moyooshi-productions' ),
		)
	);
}
add_action( 'init', 'moyooshi_productions_pattern_categories' );
