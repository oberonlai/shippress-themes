<?php
/**
 * Kaban Luggage — functions and definitions.
 *
 * @package kaban-luggage
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'KABAN_LUGGAGE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kaban_luggage_setup() {
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
add_action( 'after_setup_theme', 'kaban_luggage_setup' );

/**
 * Front-end styles and the scroll-effect script (in the head, not deferred, so the hidden state exists before the first paint).
 * The shop styles load only while WooCommerce is active.
 */
function kaban_luggage_enqueue() {
	wp_enqueue_style( 'kaban-luggage-style', get_stylesheet_uri(), array(), KABAN_LUGGAGE_VERSION );
	wp_enqueue_style( 'kaban-luggage-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kaban-luggage-style' ), KABAN_LUGGAGE_VERSION );
	wp_enqueue_script( 'kaban-luggage-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KABAN_LUGGAGE_VERSION, false );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'kaban-luggage-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'kaban-luggage-style' ), KABAN_LUGGAGE_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'kaban_luggage_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function kaban_luggage_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'kaban_luggage_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit beside the menu in the header (Block Hooks API),
 * never twice. Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function kaban_luggage_header_shop_blocks( $hooked, $position, $anchor, $context ) {
	if ( 'after' !== $position || 'core/navigation' !== $anchor || ! class_exists( 'WooCommerce' ) ) {
		return $hooked;
	}
	if ( ! ( $context instanceof WP_Block_Template ) || 'wp_template_part' !== $context->type || 'header' !== $context->slug ) {
		return $hooked;
	}
	foreach ( array( 'woocommerce/mini-cart' ) as $block ) {
		if ( ! in_array( $block, $hooked, true ) && WP_Block_Type_Registry::get_instance()->is_registered( $block ) && false === strpos( (string) $context->content, 'wp:' . $block ) ) {
			$hooked[] = $block;
		}
	}
	return $hooked;
}
add_filter( 'hooked_block_types', 'kaban_luggage_header_shop_blocks', 20, 4 );

/**
 * Pattern category.
 */
function kaban_luggage_pattern_categories() {
	register_block_pattern_category(
		'kaban-luggage',
		array(
			'label'       => __( 'Kaban Luggage', 'kaban-luggage' ),
			'description' => __( 'Sections for a luggage fitting shop: the dark macro hero with a product strip, the trip scene, the counter story, the chapter rows for shell, handle and wheels, the fitting, the workshop price list, the stories mosaic and the visit block.', 'kaban-luggage' ),
		)
	);
}
add_action( 'init', 'kaban_luggage_pattern_categories' );

/**
 * URL of a sample product tile. Points at the product when WooCommerce has it, otherwise at the shop page,
 * so the home page never links to a missing /product/ address.
 */
function kaban_luggage_product_url( $slug ) {
	if ( post_type_exists( 'product' ) ) {
		$product = get_page_by_path( $slug, OBJECT, 'product' );
		if ( $product && 'publish' === $product->post_status ) {
			return get_permalink( $product );
		}
	}
	return home_url( '/shop/' );
}
