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
			'label' => __( 'Label (small capitals after a hairline)', 'yuzu-chaya' ),
			'lead'  => __( 'Lead paragraph', 'yuzu-chaya' ),
			'fine'  => __( 'Fine print', 'yuzu-chaya' ),
			'dot'   => __( 'Yuzu dot (use once on a page)', 'yuzu-chaya' ),
		),
		'core/heading'   => array(
			'label' => __( 'Label (small capitals after a hairline)', 'yuzu-chaya' ),
		),
		'core/group'     => array(
			'reveal' => __( 'Gentle fade on scroll', 'yuzu-chaya' ),
		),
		'core/separator' => array(
			'short' => __( 'Short sencha rule', 'yuzu-chaya' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'yuzu-chaya' ),
		),
		'core/table'     => array(
			'chart' => __( 'Brewing chart (hairline rows)', 'yuzu-chaya' ),
			'info'  => __( 'Info (label and value rows)', 'yuzu-chaya' ),
		),
		'core/list'      => array(
			'steps'    => __( 'Steps (numbered, hairline rows)', 'yuzu-chaya' ),
			'hairline' => __( 'Hairline rows', 'yuzu-chaya' ),
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
			'description' => __( 'Quiet editorial sections for a tea and wagashi shop: the tea shelf, brewing temperatures, seasonal sweets, the monthly tea box, the journal, the newsletter and a visit.', 'yuzu-chaya' ),
		)
	);
}
add_action( 'init', 'yuzu_chaya_pattern_categories' );
