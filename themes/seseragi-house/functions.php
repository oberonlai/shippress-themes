<?php
/**
 * Seseragi House: functions and definitions.
 *
 * @package seseragi-house
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

define( 'SESERAGI_HOUSE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function seseragi_house_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'seseragi_house_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran.
 */
function seseragi_house_enqueue() {
	wp_enqueue_style( 'seseragi-house-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SESERAGI_HOUSE_VERSION );
	wp_enqueue_style( 'seseragi-house-style', get_stylesheet_uri(), array( 'seseragi-house-sp-scroll' ), SESERAGI_HOUSE_VERSION );
	wp_enqueue_script( 'seseragi-house-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SESERAGI_HOUSE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'seseragi_house_enqueue' );

/**
 * Pattern category.
 */
function seseragi_house_pattern_categories() {
	register_block_pattern_category(
		'seseragi-house',
		array(
			'label'       => __( 'Seseragi House', 'seseragi-house' ),
			'description' => __( 'Sections for a small riverside bed and breakfast: the framed window cover, the hung page of the couple who keep the house, how a stay runs, the breakfast table with its slow tray strip, the dim river band, the rooms, the one way to ask and the river letter.', 'seseragi-house' ),
		)
	);
}
add_action( 'init', 'seseragi_house_pattern_categories' );
