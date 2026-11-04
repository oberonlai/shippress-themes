<?php
/**
 * Tayori Nursing — functions and definitions.
 *
 * @package tayori-nursing
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'TAYORI_NURSING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared; the theme works without the plugin.
 */
function tayori_nursing_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'tayori_nursing_setup' );

/**
 * Front-end styles and the small scroll script (sp-scroll). The script loads in the head, not deferred, so the hidden
 * state of the reveals is set before the first paint.
 */
function tayori_nursing_enqueue() {
	wp_enqueue_style( 'tayori-nursing-style', get_stylesheet_uri(), array(), TAYORI_NURSING_VERSION );
	wp_enqueue_style( 'tayori-nursing-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'tayori-nursing-style' ), TAYORI_NURSING_VERSION );
	wp_enqueue_script( 'tayori-nursing-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TAYORI_NURSING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'tayori_nursing_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tayori_nursing_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'label', 'label' => __( 'Label', 'tayori-nursing' ) ) );
	register_block_style( 'core/button', array( 'name' => 'white', 'label' => __( 'White (on celadon)', 'tayori-nursing' ) ) );
	register_block_style( 'core/button', array( 'name' => 'text-link', 'label' => __( 'Text link with an arrow', 'tayori-nursing' ) ) );
}
add_action( 'init', 'tayori_nursing_block_styles' );

/**
 * Pattern category.
 */
function tayori_nursing_pattern_categories() {
	register_block_pattern_category(
		'tayori-nursing',
		array(
			'label'       => __( 'Tayori Nursing', 'tayori-nursing' ),
			'description' => __( 'Sections for a home-visit nursing service: scattered pebble photographs on a celadon wave, a statement that fills from grey to ink, sticky heading with white cards, a morning round, a care plan, fees, stories and the team.', 'tayori-nursing' ),
		)
	);
}
add_action( 'init', 'tayori_nursing_pattern_categories' );
