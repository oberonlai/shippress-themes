<?php
/**
 * Kawa Dumpling House: functions and definitions.
 *
 * @package kawa-dumplings
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'KAWA_DUMPLINGS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kawa_dumplings_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kawa_dumplings_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function kawa_dumplings_enqueue() {
	wp_enqueue_style( 'kawa-dumplings-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KAWA_DUMPLINGS_VERSION );
	wp_enqueue_style( 'kawa-dumplings-style', get_stylesheet_uri(), array( 'kawa-dumplings-sp-scroll' ), KAWA_DUMPLINGS_VERSION );
	wp_enqueue_script( 'kawa-dumplings-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAWA_DUMPLINGS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kawa_dumplings_enqueue' );

/**
 * Pattern category.
 */
function kawa_dumplings_pattern_categories() {
	register_block_pattern_category(
		'kawa-dumplings',
		array(
			'label'       => __( 'Kawa Dumpling House', 'kawa-dumplings' ),
			'description' => __( 'Sections for a dumpling house with several branches: the three-panel cover, the fold story rows, branch tickets, frozen packs, order ahead, the menu ledger and the steam letter.', 'kawa-dumplings' ),
		)
	);
}
add_action( 'init', 'kawa_dumplings_pattern_categories' );
