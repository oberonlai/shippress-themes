<?php
/**
 * Megumi Pharmacy — functions and definitions.
 *
 * @package megumi-pharmacy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'MEGUMI_PHARMACY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function megumi_pharmacy_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'megumi_pharmacy_setup' );

/**
 * Front-end styles and the scroll-effect script (sp-scroll). The script sits in the head, not deferred, so the hidden
 * state is only ever set after the script has run (no flash, and nothing stays hidden without JavaScript).
 */
function megumi_pharmacy_enqueue() {
	wp_enqueue_style( 'megumi-pharmacy-style', get_stylesheet_uri(), array(), MEGUMI_PHARMACY_VERSION );
	wp_enqueue_style( 'megumi-pharmacy-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'megumi-pharmacy-style' ), MEGUMI_PHARMACY_VERSION );
	wp_enqueue_script( 'megumi-pharmacy-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MEGUMI_PHARMACY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'megumi_pharmacy_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function megumi_pharmacy_block_styles() {
	register_block_style(
		'core/button',
		array(
			'name'  => 'ink-outline',
			'label' => __( 'Outline (ink)', 'megumi-pharmacy' ),
		)
	);
}
add_action( 'init', 'megumi_pharmacy_block_styles' );

/**
 * Pattern category.
 */
function megumi_pharmacy_pattern_categories() {
	register_block_pattern_category(
		'megumi-pharmacy',
		array(
			'label'       => __( 'Megumi Pharmacy', 'megumi-pharmacy' ),
			'description' => __( 'Sections for a community pharmacy: the photograph stage, portrait link cards, a people list, a single-column story, numbered process rows, notices, the counter shelf and the visit block.', 'megumi-pharmacy' ),
		)
	);
}
add_action( 'init', 'megumi_pharmacy_pattern_categories' );

/**
 * ID of the "Notices" category (0 before the sample content has created it): the home notices list reads it.
 *
 * @return int
 */
function megumi_pharmacy_notices_cat() {
	$term = get_term_by( 'slug', 'notices', 'category' );
	return $term ? (int) $term->term_id : 0;
}
