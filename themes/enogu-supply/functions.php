<?php
/**
 * Enogu Supply: functions and definitions.
 *
 * @package enogu-supply
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shippress-forms.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'ENOGU_SUPPLY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function enogu_supply_setup() {
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
add_action( 'after_setup_theme', 'enogu_supply_setup' );

/**
 * Front-end styles and scripts. The scroll script loads in the head, not deferred, so the hidden states only exist once
 * it ran. The shop styles load only while WooCommerce is active.
 */
function enogu_supply_enqueue() {
	wp_enqueue_style( 'enogu-supply-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), ENOGU_SUPPLY_VERSION );
	wp_enqueue_style( 'enogu-supply-style', get_stylesheet_uri(), array( 'enogu-supply-sp-scroll' ), ENOGU_SUPPLY_VERSION );
	wp_enqueue_script( 'enogu-supply-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ENOGU_SUPPLY_VERSION, false );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'enogu-supply-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'enogu-supply-style' ), ENOGU_SUPPLY_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'enogu_supply_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function enogu_supply_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'enogu_supply_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit beside the menu in the header (Block Hooks API).
 * Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function enogu_supply_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'enogu_supply_header_shop_blocks', 20, 4 );

/**
 * The second still of each home slide is a decorative repeat of the first: hide it from assistive technology.
 *
 * @param string $html  Block HTML.
 * @param array  $block Block data.
 * @return string
 */
function enogu_supply_hide_alt_slides( $html, $block ) {
	if ( false !== strpos( $html, 'en-slide__b' ) ) {
		$html = preg_replace( '/<figure\b/', '<figure aria-hidden="true"', $html, 1 );
	}
	return $html;
}
add_filter( 'render_block_core/image', 'enogu_supply_hide_alt_slides', 10, 2 );

/**
 * Pattern category.
 */
function enogu_supply_pattern_categories() {
	register_block_pattern_category(
		'enogu-supply',
		array(
			'label'       => __( 'Enogu Supply', 'enogu-supply' ),
			'description' => __( 'Sections for an art-supply shop: three captioned photo slides, the four abutting range panels, product tiles, the story with a vertical tagline, the mill-order band and the shop week.', 'enogu-supply' ),
		)
	);
}
add_action( 'init', 'enogu_supply_pattern_categories' );
