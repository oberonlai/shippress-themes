<?php
/**
 * Kura Shizuku — functions and definitions.
 *
 * @package kura-shizuku
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'KURA_SHIZUKU_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kura_shizuku_setup() {
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
add_action( 'after_setup_theme', 'kura_shizuku_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active.
 */
function kura_shizuku_enqueue() {
	wp_enqueue_style( 'kura-shizuku-style', get_stylesheet_uri(), array(), KURA_SHIZUKU_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'kura-shizuku-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'kura-shizuku-style' ), KURA_SHIZUKU_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'kura_shizuku_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function kura_shizuku_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'kura_shizuku_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit after the header menu (Block Hooks API). WooCommerce
 * does this itself only on some installs; this adds them otherwise, never twice. Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function kura_shizuku_header_shop_blocks( $hooked, $position, $anchor, $context ) {
	if ( 'after' !== $position || 'core/navigation' !== $anchor || ! class_exists( 'WooCommerce' ) ) {
		return $hooked;
	}
	if ( ! ( $context instanceof WP_Block_Template ) || 'wp_template_part' !== $context->type || ! in_array( $context->slug, array( 'header' ), true ) ) {
		return $hooked;
	}
	foreach ( array( 'woocommerce/customer-account', 'woocommerce/mini-cart' ) as $block ) {
		if ( ! in_array( $block, $hooked, true ) && WP_Block_Type_Registry::get_instance()->is_registered( $block ) && false === strpos( (string) $context->content, 'wp:' . $block ) ) {
			$hooked[] = $block;
		}
	}
	return $hooked;
}
add_filter( 'hooked_block_types', 'kura_shizuku_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kura_shizuku_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (spaced capitals with a gold drop)', 'kura-shizuku' ),
			'lead'  => __( 'Lead paragraph', 'kura-shizuku' ),
		),
		'core/heading'   => array(
			'label' => __( 'Label (spaced capitals with a gold drop)', 'kura-shizuku' ),
		),
		'core/group'     => array(
			'label-frame' => __( 'Bottle label (double gilt hairline frame)', 'kura-shizuku' ),
			'panel'       => __( 'Paper panel', 'kura-shizuku' ),
			'panel-koji'  => __( 'Koji panel', 'kura-shizuku' ),
			'reveal'      => __( 'Drip reveal on scroll', 'kura-shizuku' ),
		),
		'core/image'     => array(
			'label-frame' => __( 'Gilt frame (double hairline)', 'kura-shizuku' ),
			'arch'        => __( 'Arch (rounded top)', 'kura-shizuku' ),
			'drop'        => __( 'Drop (a single drop of sake)', 'kura-shizuku' ),
		),
		'core/separator' => array(
			'gilded' => __( 'Gilded hairline with a drop', 'kura-shizuku' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'kura-shizuku' ),
			'gilt'       => __( 'Gilt outline', 'kura-shizuku' ),
		),
		'core/table'     => array(
			'tasting' => __( 'Tasting notes (hairline rows)', 'kura-shizuku' ),
		),
		'core/list'      => array(
			'index' => __( 'Index (numbered hairline rows)', 'kura-shizuku' ),
			'dash'  => __( 'Dash', 'kura-shizuku' ),
		),
		'core/quote'     => array(
			'centred' => __( 'Centred (large italic)', 'kura-shizuku' ),
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
add_action( 'init', 'kura_shizuku_block_styles' );

/**
 * Pattern category.
 */
function kura_shizuku_pattern_categories() {
	register_block_pattern_category(
		'kura-shizuku',
		array(
			'label'       => __( 'Kura Shizuku', 'kura-shizuku' ),
			'description' => __( 'Label-like sections for a sake brewery: bottles, the brewing process, tours, the tasting room, news, the newsletter and visits.', 'kura-shizuku' ),
		)
	);
}
add_action( 'init', 'kura_shizuku_pattern_categories' );
