<?php
/**
 * Toso Paints — functions and definitions.
 *
 * @package toso-paints
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'TOSO_PAINTS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function toso_paints_setup() {
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
add_action( 'after_setup_theme', 'toso_paints_setup' );

/**
 * Front-end styles and the scroll script (head, not deferred: it sets html.sp-js before first paint).
 */
function toso_paints_enqueue() {
	wp_enqueue_style( 'toso-paints-style', get_stylesheet_uri(), array(), TOSO_PAINTS_VERSION );
	wp_enqueue_style( 'toso-paints-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'toso-paints-style' ), TOSO_PAINTS_VERSION );
	wp_enqueue_script( 'toso-paints-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), TOSO_PAINTS_VERSION, false );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'toso-paints-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'toso-paints-style' ), TOSO_PAINTS_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'toso_paints_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function toso_paints_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'toso_paints_editor_shop_styles' );

/**
 * With WooCommerce active, the mini cart sits beside the header button (Block Hooks API). Without it: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function toso_paints_header_shop_blocks( $hooked, $position, $anchor, $context ) {
	if ( 'before' !== $position || 'core/buttons' !== $anchor || ! class_exists( 'WooCommerce' ) ) {
		return $hooked;
	}
	if ( ! ( $context instanceof WP_Block_Template ) || 'wp_template_part' !== $context->type || 'header' !== $context->slug ) {
		return $hooked;
	}
	$block = 'woocommerce/mini-cart';
	if ( ! in_array( $block, $hooked, true ) && WP_Block_Type_Registry::get_instance()->is_registered( $block ) && false === strpos( (string) $context->content, 'wp:' . $block ) ) {
		$hooked[] = $block;
	}
	return $hooked;
}
add_filter( 'hooked_block_types', 'toso_paints_header_shop_blocks', 20, 4 );

/**
 * Pattern category.
 */
function toso_paints_pattern_categories() {
	register_block_pattern_category(
		'toso-paints',
		array(
			'label'       => __( 'Toso Paints', 'toso-paints' ),
			'description' => __( 'Sections for a paint and wallpaper shop: the three-column hero with a room drawing, the ruled statement band, the range strip and marquee, the full-bleed chapters, the stock list, the offset mixing and order rows, the journal rows and the visit close.', 'toso-paints' ),
		)
	);
}
add_action( 'init', 'toso_paints_pattern_categories' );
