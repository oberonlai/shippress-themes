<?php
/**
 * Hibi Wear — functions and definitions.
 *
 * @package hibi-wear
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'HIBI_WEAR_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hibi_wear_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'hibi_wear_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. No script is needed.
 */
function hibi_wear_enqueue() {
	wp_enqueue_style( 'hibi-wear-style', get_stylesheet_uri(), array(), HIBI_WEAR_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'hibi-wear-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'hibi-wear-style' ), HIBI_WEAR_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'hibi_wear_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function hibi_wear_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'hibi_wear_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit beside the menu button in the header (Block Hooks
 * API). WooCommerce does this itself only on some installs; this adds them otherwise, never twice. Without
 * WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function hibi_wear_header_shop_blocks( $hooked, $position, $anchor, $context ) {
	if ( 'after' !== $position || 'core/navigation' !== $anchor || ! class_exists( 'WooCommerce' ) ) {
		return $hooked;
	}
	if ( ! ( $context instanceof WP_Block_Template ) || 'wp_template_part' !== $context->type || 'header' !== $context->slug ) {
		return $hooked;
	}
	foreach ( array( 'woocommerce/customer-account', 'woocommerce/mini-cart' ) as $block ) {
		if ( ! in_array( $block, $hooked, true ) && WP_Block_Type_Registry::get_instance()->is_registered( $block ) && false === strpos( (string) $context->content, 'wp:' . $block ) ) {
			$hooked[] = $block;
		}
	}
	return $hooked;
}
add_filter( 'hooked_block_types', 'hibi_wear_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hibi_wear_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'lead' => __( 'Lead paragraph', 'hibi-wear' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'hibi-wear' ),
		),
	);

	foreach ( $styles as $block => $variations ) {
		foreach ( $variations as $name => $label ) {
			register_block_style(
				$block,
				array(
					'name'  => $name,
					'label' => $label,
				)
			);
		}
	}
}
add_action( 'init', 'hibi_wear_block_styles' );

/**
 * Pattern category.
 */
function hibi_wear_pattern_categories() {
	register_block_pattern_category(
		'hibi-wear',
		array(
			'label'       => __( 'Hibi Wear', 'hibi-wear' ),
			'description' => __( 'Sections for an everyday clothing store: the hazy cover, the line-up with category pills, the portrait straddling a warm band, the before and after wash split, the aligned fabric masonry, the store promise and the journal.', 'hibi-wear' ),
		)
	);
}
add_action( 'init', 'hibi_wear_pattern_categories' );
