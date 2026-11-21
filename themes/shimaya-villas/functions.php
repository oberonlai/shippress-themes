<?php
/**
 * Shimaya Villas: functions and definitions.
 *
 * @package shimaya-villas
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SHIMAYA_VILLAS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shimaya_villas_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'shimaya_villas_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function shimaya_villas_enqueue() {
	wp_enqueue_style( 'shimaya-villas-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SHIMAYA_VILLAS_VERSION );
	wp_enqueue_style( 'shimaya-villas-style', get_stylesheet_uri(), array( 'shimaya-villas-sp-scroll' ), SHIMAYA_VILLAS_VERSION );
	wp_enqueue_script( 'shimaya-villas-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIMAYA_VILLAS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'shimaya_villas_enqueue' );

/**
 * Pattern category.
 */
function shimaya_villas_pattern_categories() {
	register_block_pattern_category(
		'shimaya-villas',
		array(
			'label'       => __( 'Shimaya Villas', 'shimaya-villas' ),
			'description' => __( 'Sections for a direct-booking island villa company: a framed photograph window with a headline panel and a hold-dates bar, a centred statement, house cards, a grey-out season list, ruled inclusions, arrival cards, hosts and one way to hold dates.', 'shimaya-villas' ),
		)
	);
}
add_action( 'init', 'shimaya_villas_pattern_categories' );
