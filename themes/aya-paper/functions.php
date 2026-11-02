<?php
/**
 * Aya Paper — functions and definitions.
 *
 * @package aya-paper
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'AYA_PAPER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function aya_paper_setup() {
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
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'after_setup_theme', 'aya_paper_setup' );

/**
 * Front-end styles and the scroll-effects script (sp-scroll). The script loads in the head, not deferred, so the
 * hidden start state is set before the first paint.
 */
function aya_paper_enqueue() {
	wp_enqueue_style( 'aya-paper-style', get_stylesheet_uri(), array(), AYA_PAPER_VERSION );
	wp_enqueue_style( 'aya-paper-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'aya-paper-style' ), AYA_PAPER_VERSION );
	wp_enqueue_script( 'aya-paper-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AYA_PAPER_VERSION, false );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'aya-paper-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'aya-paper-style' ), AYA_PAPER_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'aya_paper_enqueue' );

/**
 * With WooCommerce active, the mini cart sits beside the header menu (Block Hooks API). Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function aya_paper_header_shop_blocks( $hooked, $position, $anchor, $context ) {
	if ( 'after' !== $position || 'core/navigation' !== $anchor || ! class_exists( 'WooCommerce' ) ) {
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
add_filter( 'hooked_block_types', 'aya_paper_header_shop_blocks', 20, 4 );

/**
 * Pattern category.
 */
function aya_paper_pattern_categories() {
	register_block_pattern_category(
		'aya-paper',
		array(
			'label'       => __( 'Aya Paper', 'aya-paper' ),
			'description' => __( 'Sections for a stationery shop: the hairline frame with three photographs, ruled paper rows, the three-column catalogue of uses, the counter steps and the journal.', 'aya-paper' ),
		)
	);
}
add_action( 'init', 'aya_paper_pattern_categories' );

/**
 * The spec line under each price: weight, size and sheet count from the product's Weight, Size and Sheets attributes
 * (Product data > Attributes), printed as "120 gsm · A4 · 50 sheets". Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @return string
 */
function aya_paper_spec_line( $content ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$parts = array();
	foreach ( array( 'Weight', 'Size', 'Sheets' ) as $name ) {
		$value = trim( (string) $product->get_attribute( $name ) );
		if ( '' !== $value ) {
			$parts[] = $value;
		}
	}
	return $parts ? $content . '<p class="ap-size">' . esc_html( implode( ' · ', $parts ) ) . '</p>' : $content;
}
add_filter( 'render_block_woocommerce/product-price', 'aya_paper_spec_line' );
