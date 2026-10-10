<?php
/**
 * Kami no Ne — functions and definitions.
 *
 * @package kami-no-ne
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'KAMI_NO_NE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kami_no_ne_setup() {
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
add_action( 'after_setup_theme', 'kami_no_ne_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active.
 */
function kami_no_ne_enqueue() {
	wp_enqueue_style( 'kami-no-ne-style', get_stylesheet_uri(), array(), KAMI_NO_NE_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'kami-no-ne-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'kami-no-ne-style' ), KAMI_NO_NE_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'kami_no_ne_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function kami_no_ne_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'kami_no_ne_editor_shop_styles' );

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
function kami_no_ne_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'kami_no_ne_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kami_no_ne_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a hairline)', 'kami-no-ne' ),
			'lead'  => __( 'Lead paragraph', 'kami-no-ne' ),
			'fine'  => __( 'Fine print', 'kami-no-ne' ),
			'dot'   => __( 'Persimmon dot (use once on a page)', 'kami-no-ne' ),
		),
		'core/heading'   => array(
			'label' => __( 'Label (small capitals after a hairline)', 'kami-no-ne' ),
		),
		'core/group'     => array(
			'reveal' => __( 'Slow rise on scroll', 'kami-no-ne' ),
		),
		'core/image'     => array(
			'mat' => __( 'Mounted print (kozo mat)', 'kami-no-ne' ),
		),
		'core/separator' => array(
			'short' => __( 'Short indigo rule', 'kami-no-ne' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'kami-no-ne' ),
		),
		'core/table'     => array(
			'chart' => __( 'Specification chart (hairline rows)', 'kami-no-ne' ),
			'info'  => __( 'Info (label and value rows)', 'kami-no-ne' ),
		),
		'core/list'      => array(
			'steps'    => __( 'Steps (numbered, hairline rows)', 'kami-no-ne' ),
			'hairline' => __( 'Hairline rows', 'kami-no-ne' ),
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
add_action( 'init', 'kami_no_ne_block_styles' );

/**
 * Pattern category.
 */
function kami_no_ne_pattern_categories() {
	register_block_pattern_category(
		'kami-no-ne',
		array(
			'label'       => __( 'Kami no Ne', 'kami-no-ne' ),
			'description' => __( 'Quiet editorial sections for a washi paper and stationery shop: the paper shelf, the making, fibres and weights, the makers, workshops, the journal, the newsletter and a visit.', 'kami-no-ne' ),
		)
	);
}
add_action( 'init', 'kami_no_ne_pattern_categories' );
