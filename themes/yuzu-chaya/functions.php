<?php
/**
 * Yuzu Chaya — functions and definitions.
 *
 * @package yuzu-chaya
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'YUZU_CHAYA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yuzu_chaya_setup() {
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
add_action( 'after_setup_theme', 'yuzu_chaya_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active.
 */
function yuzu_chaya_enqueue() {
	wp_enqueue_style( 'yuzu-chaya-style', get_stylesheet_uri(), array(), YUZU_CHAYA_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'yuzu-chaya-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'yuzu-chaya-style' ), YUZU_CHAYA_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'yuzu_chaya_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function yuzu_chaya_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'yuzu_chaya_editor_shop_styles' );

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
function yuzu_chaya_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'yuzu_chaya_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function yuzu_chaya_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals with a yuzu dot)', 'yuzu-chaya' ),
			'note'  => __( 'Handwritten note', 'yuzu-chaya' ),
			'lead'  => __( 'Lead paragraph', 'yuzu-chaya' ),
			'temp'  => __( 'Temperature sticker (round)', 'yuzu-chaya' ),
		),
		'core/heading'   => array(
			'label' => __( 'Label (small capitals with a yuzu dot)', 'yuzu-chaya' ),
		),
		'core/group'     => array(
			'tile'        => __( 'Tile (washi)', 'yuzu-chaya' ),
			'tile-yuzu'   => __( 'Tile (yuzu yellow)', 'yuzu-chaya' ),
			'tile-matcha' => __( 'Tile (fresh matcha)', 'yuzu-chaya' ),
			'tile-ink'    => __( 'Tile (charcoal ink)', 'yuzu-chaya' ),
			'reveal'      => __( 'Gentle reveal on scroll', 'yuzu-chaya' ),
		),
		'core/image'     => array(
			'sticker' => __( 'Sticker (white border, tilted)', 'yuzu-chaya' ),
			'blob'    => __( 'Blob (soft round crop)', 'yuzu-chaya' ),
		),
		'core/separator' => array(
			'squiggle' => __( 'Squiggle (hand-drawn wave)', 'yuzu-chaya' ),
		),
		'core/button'    => array(
			'yuzu'       => __( 'Yuzu (yellow pill)', 'yuzu-chaya' ),
			'arrow-link' => __( 'Arrow link', 'yuzu-chaya' ),
		),
		'core/table'     => array(
			'brew' => __( 'Brewing chart (rounded rows)', 'yuzu-chaya' ),
			'info' => __( 'Info (dotted rows)', 'yuzu-chaya' ),
		),
		'core/list'      => array(
			'steps'  => __( 'Steps (numbered circles)', 'yuzu-chaya' ),
			'leaves' => __( 'Leaves (a tea leaf per item)', 'yuzu-chaya' ),
		),
		'core/quote'     => array(
			'speech' => __( 'Speech bubble', 'yuzu-chaya' ),
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
add_action( 'init', 'yuzu_chaya_block_styles' );

/**
 * Pattern category.
 */
function yuzu_chaya_pattern_categories() {
	register_block_pattern_category(
		'yuzu-chaya',
		array(
			'label'       => __( 'Yuzu Chaya', 'yuzu-chaya' ),
			'description' => __( 'Bento-box sections for a tea and wagashi shop: the tea shelf, brewing temperatures, seasonal sweets, the monthly tea box, the journal, the newsletter and a visit.', 'yuzu-chaya' ),
		)
	);
}
add_action( 'init', 'yuzu_chaya_pattern_categories' );
