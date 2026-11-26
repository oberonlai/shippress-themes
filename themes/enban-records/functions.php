<?php
/**
 * Enban Records — functions and definitions.
 *
 * @package enban-records
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ENBAN_RECORDS_VERSION', wp_get_theme()->get( 'Version' ) );

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/icons.php';
require_once get_template_directory() . '/inc/woo-import.php';
require_once get_template_directory() . '/inc/shippress-forms.php';

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function enban_records_setup() {
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
add_action( 'after_setup_theme', 'enban_records_setup' );

/**
 * Front-end styles and scripts. sp-scroll.js loads in the head (not deferred) so html.sp-js is set before first paint;
 * the slide strip script is tiny and deferred. The shop styles load only while WooCommerce is active.
 */
function enban_records_enqueue() {
	wp_enqueue_style( 'enban-records-style', get_stylesheet_uri(), array(), ENBAN_RECORDS_VERSION );
	wp_enqueue_style( 'enban-records-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'enban-records-style' ), ENBAN_RECORDS_VERSION );
	wp_enqueue_script( 'enban-records-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ENBAN_RECORDS_VERSION, false );
	wp_enqueue_script( 'enban-records-slides', get_theme_file_uri( 'assets/js/enban-slides.js' ), array(), ENBAN_RECORDS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'enban-records-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'enban-records-style' ), ENBAN_RECORDS_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'enban_records_enqueue' );

/**
 * The shop styles in the Site Editor too.
 */
function enban_records_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'enban_records_editor_shop_styles' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function enban_records_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'eb-box', 'label' => __( 'Outline box with a chevron', 'enban-records' ) ) );
	register_block_style( 'core/paragraph', array( 'name' => 'eb-sub', 'label' => __( 'Caps sub-label', 'enban-records' ) ) );
}
add_action( 'init', 'enban_records_block_styles' );

/**
 * Pattern category.
 */
function enban_records_pattern_categories() {
	register_block_pattern_category(
		'enban-records',
		array(
			'label'       => __( 'Enban Records', 'enban-records' ),
			'description' => __( 'Sections for an independent record shop: the inset photo card with a timeline, ruled audience rows, the horizontal listening line, the five-up crate and the dark letter band.', 'enban-records' ),
		)
	);
}
add_action( 'init', 'enban_records_pattern_categories' );
