<?php
/**
 * Shiki Linen — functions and definitions.
 *
 * @package shiki-linen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'SHIKI_LINEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function shiki_linen_setup() {
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
add_action( 'after_setup_theme', 'shiki_linen_setup' );

/**
 * Front-end styles and the scroll effects (sp-scroll: CSS plus one small script in the head, no library).
 * The shop styles load only while WooCommerce is active.
 */
function shiki_linen_enqueue() {
	wp_enqueue_style( 'shiki-linen-style', get_stylesheet_uri(), array(), SHIKI_LINEN_VERSION );
	wp_enqueue_style( 'shiki-linen-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'shiki-linen-style' ), SHIKI_LINEN_VERSION );
	wp_enqueue_script( 'shiki-linen-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIKI_LINEN_VERSION, false );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'shiki-linen-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'shiki-linen-style' ), SHIKI_LINEN_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'shiki_linen_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function shiki_linen_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'shiki_linen_editor_shop_styles' );

/**
 * With WooCommerce active, the account link sits in the header (Block Hooks API), never twice; the cart is the
 * theme's own cart link (see shiki_linen_shop_links), so the icon is always there. Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function shiki_linen_header_shop_blocks( $hooked, $position, $anchor, $context ) {
	if ( 'after' !== $position || 'core/navigation' !== $anchor || ! class_exists( 'WooCommerce' ) ) {
		return $hooked;
	}
	if ( ! ( $context instanceof WP_Block_Template ) || 'wp_template_part' !== $context->type || 'header' !== $context->slug ) {
		return $hooked;
	}
	foreach ( array( 'woocommerce/customer-account' ) as $block ) {
		if ( ! in_array( $block, $hooked, true ) && WP_Block_Type_Registry::get_instance()->is_registered( $block ) && false === strpos( (string) $context->content, 'wp:' . $block ) ) {
			$hooked[] = $block;
		}
	}
	return $hooked;
}
add_filter( 'hooked_block_types', 'shiki_linen_header_shop_blocks', 20, 4 );

/**
 * Pattern category.
 */
function shiki_linen_pattern_categories() {
	register_block_pattern_category(
		'shiki-linen',
		array(
			'label'       => __( 'Shiki Linen', 'shiki-linen' ),
			'description' => __( 'Sections for a bed-linen shop: three framed photographs, an opposite-edge staircase with spec tags, the six-tone wash strip, the spec catalogue, the order stages, the parallax washroom and the needle-eye ring.', 'shiki-linen' ),
		)
	);
}
add_action( 'init', 'shiki_linen_pattern_categories' );

/**
 * Header cart link and "Order swatches" links. With WooCommerce active the cart link goes to the cart page and shows
 * the item count, and the swatch button goes to the Swatch set product; without it the cart link points at the shop
 * page and the swatch button at the made-to-order page, so no link ever lands on a missing page. The cart icon is
 * always rendered.
 *
 * @param string $content Rendered block.
 * @return string
 */
function shiki_linen_shop_links( $content ) {
	$woo = class_exists( 'WooCommerce' );
	if ( false !== strpos( $content, 'class="sl-cart"' ) ) {
		if ( ! $woo ) {
			return str_replace( 'href="/cart/"', 'href="' . esc_url( home_url( '/shop/' ) ) . '"', $content );
		}
		$count = function_exists( 'WC' ) && WC()->cart ? (int) WC()->cart->get_cart_contents_count() : 0;
		$url   = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' );
		$content = str_replace( 'href="/cart/"', 'href="' . esc_url( $url ) . '"', $content );
		return preg_replace( '/(<span class="sl-cart__n">)\d+(<\/span>)/', '${1}' . $count . '${2}', $content );
	}
	if ( ! $woo && false !== strpos( $content, '/product/swatch-set/' ) ) {
		return str_replace( '/product/swatch-set/', '/made-to-order/', $content );
	}
	return $content;
}
add_filter( 'render_block', 'shiki_linen_shop_links' );
