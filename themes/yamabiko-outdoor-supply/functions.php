<?php
/**
 * Yamabiko Outdoor Supply — functions and definitions.
 *
 * @package yamabiko-outdoor-supply
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'YAMABIKO_OUTDOOR_SUPPLY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yamabiko_outdoor_supply_setup() {
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
add_action( 'after_setup_theme', 'yamabiko_outdoor_supply_setup' );

/**
 * Front-end styles and the small scroll script (sp-scroll, loaded in the head, not deferred). The shop styles load
 * only while WooCommerce is active.
 */
function yamabiko_outdoor_supply_enqueue() {
	wp_enqueue_style( 'yamabiko-outdoor-supply-style', get_stylesheet_uri(), array(), YAMABIKO_OUTDOOR_SUPPLY_VERSION );
	wp_enqueue_style( 'yamabiko-outdoor-supply-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'yamabiko-outdoor-supply-style' ), YAMABIKO_OUTDOOR_SUPPLY_VERSION );
	wp_enqueue_script( 'yamabiko-outdoor-supply-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), YAMABIKO_OUTDOOR_SUPPLY_VERSION, false );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'yamabiko-outdoor-supply-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'yamabiko-outdoor-supply-style' ), YAMABIKO_OUTDOOR_SUPPLY_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'yamabiko_outdoor_supply_enqueue' );

/**
 * The shop styles in the Site Editor too.
 */
function yamabiko_outdoor_supply_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'yamabiko_outdoor_supply_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart follow the menu in the header (Block Hooks API),
 * never twice. Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function yamabiko_outdoor_supply_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'yamabiko_outdoor_supply_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function yamabiko_outdoor_supply_block_styles() {
	register_block_style( 'core/paragraph', array( 'name' => 'lead', 'label' => __( 'Lead paragraph', 'yamabiko-outdoor-supply' ) ) );
	register_block_style( 'core/button', array( 'name' => 'text-link', 'label' => __( 'Text link with an arrow', 'yamabiko-outdoor-supply' ) ) );
}
add_action( 'init', 'yamabiko_outdoor_supply_block_styles' );

/**
 * Pattern category.
 */
function yamabiko_outdoor_supply_pattern_categories() {
	register_block_pattern_category(
		'yamabiko-outdoor-supply',
		array(
			'label'       => __( 'Yamabiko Outdoor Supply', 'yamabiko-outdoor-supply' ),
			'description' => __( 'Sections for an outdoor gear spec catalogue: the full-bleed cover with an info bar, the masonry catalogue, the inset veil band, the spec sheet, the test spread, the rental and repair price list, field stories and the visit block.', 'yamabiko-outdoor-supply' ),
		)
	);
}
add_action( 'init', 'yamabiko_outdoor_supply_pattern_categories' );

/**
 * Without WooCommerce there are no product pages: the catalogue links (/product/<slug>/) lead to the Shop page
 * instead of a 404. With WooCommerce active this does nothing.
 */
function yamabiko_outdoor_supply_no_woo_product_redirect() {
	if ( class_exists( 'WooCommerce' ) || ! is_404() ) {
		return;
	}
	$path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
	if ( is_string( $path ) && preg_match( '#/product/[^/]+/?$#', $path ) ) {
		wp_safe_redirect( home_url( '/shop/' ), 302 );
		exit;
	}
}
add_action( 'template_redirect', 'yamabiko_outdoor_supply_no_woo_product_redirect' );
