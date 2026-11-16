<?php
/**
 * Butai Playhouse: functions and definitions.
 *
 * @package butai-playhouse
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'BUTAI_PLAYHOUSE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function butai_playhouse_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'butai_playhouse_setup' );

/**
 * Front-end styles and the small scroll script (head, not deferred, so the hidden states exist before first paint).
 */
function butai_playhouse_enqueue() {
	wp_enqueue_style( 'butai-playhouse-style', get_stylesheet_uri(), array(), BUTAI_PLAYHOUSE_VERSION );
	wp_enqueue_style( 'butai-playhouse-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'butai-playhouse-style' ), BUTAI_PLAYHOUSE_VERSION );
	wp_enqueue_script( 'butai-playhouse-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), BUTAI_PLAYHOUSE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'butai_playhouse_enqueue' );

/**
 * Pattern category.
 */
function butai_playhouse_pattern_categories() {
	register_block_pattern_category(
		'butai-playhouse',
		array(
			'label'       => __( 'Butai Playhouse', 'butai-playhouse' ),
			'description' => __( 'Sections for a repertory playhouse: the twin-pane stage hero with its ticker, the black season board, the dated season rail, three colour-flood ticket tiles, prices and the call sheet.', 'butai-playhouse' ),
		)
	);
}
add_action( 'init', 'butai_playhouse_pattern_categories' );
