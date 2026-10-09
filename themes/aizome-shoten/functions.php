<?php
/**
 * Aizome Shoten — functions and definitions.
 *
 * @package aizome-shoten
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'AIZOME_SHOTEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function aizome_shoten_setup() {
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
add_action( 'after_setup_theme', 'aizome_shoten_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active.
 */
function aizome_shoten_enqueue() {
	wp_enqueue_style( 'aizome-shoten-style', get_stylesheet_uri(), array(), AIZOME_SHOTEN_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'aizome-shoten-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'aizome-shoten-style' ), AIZOME_SHOTEN_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'aizome_shoten_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function aizome_shoten_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'aizome_shoten_editor_shop_styles' );

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
function aizome_shoten_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'aizome_shoten_header_shop_blocks', 20, 4 );

/**
 * Product thumbnails in the 5:7 proportion of a book cover (instead of WooCommerce's square crop), while the store
 * still uses the default 1:1 setting.
 *
 * @param array $size width, height, crop.
 * @return array
 */
function aizome_shoten_thumbnail_size( $size ) {
	if ( '1:1' === get_option( 'woocommerce_thumbnail_cropping', '1:1' ) && ! empty( $size['width'] ) ) {
		$size['height'] = (int) round( $size['width'] * 1.4 );
		$size['crop']   = 1;
	}
	return $size;
}
add_filter( 'woocommerce_get_image_size_thumbnail', 'aizome_shoten_thumbnail_size' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function aizome_shoten_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label'      => __( 'Label (catalogue mono)', 'aizome-shoten' ),
			'spine'      => __( 'Spine (vertical label on an indigo strip)', 'aizome-shoten' ),
			'lead'       => __( 'Lead paragraph', 'aizome-shoten' ),
			'catalog-no' => __( 'Catalogue number (ruled, mono)', 'aizome-shoten' ),
			'stamp'      => __( 'Stamp (persimmon circle)', 'aizome-shoten' ),
		),
		'core/heading'   => array(
			'label'      => __( 'Label (catalogue mono)', 'aizome-shoten' ),
			'condensed'  => __( 'Condensed capitals (book cover)', 'aizome-shoten' ),
			'title-box'  => __( 'Title box (framed, like a bunko cover)', 'aizome-shoten' ),
		),
		'core/group'     => array(
			'bunko-card' => __( 'Bunko card (indigo band, paper body)', 'aizome-shoten' ),
			'ruled'      => __( 'Ruled (double rule above)', 'aizome-shoten' ),
			'obi'        => __( 'Obi band (persimmon wrap)', 'aizome-shoten' ),
			'reveal'     => __( 'Gentle reveal on scroll', 'aizome-shoten' ),
		),
		'core/image'     => array(
			'book'       => __( 'Book (cover with a spine shadow)', 'aizome-shoten' ),
			'mat'        => __( 'Paper mat (kinari frame, hairline)', 'aizome-shoten' ),
			'halftone'   => __( 'Halftone (printed dots)', 'aizome-shoten' ),
		),
		'core/separator' => array(
			'double-rule' => __( 'Double rule (thick and thin)', 'aizome-shoten' ),
			'dotted'      => __( 'Dotted leader', 'aizome-shoten' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'aizome-shoten' ),
			'outline'    => __( 'Outline', 'aizome-shoten' ),
		),
		'core/table'     => array(
			'ledger'     => __( 'Ledger (events and dates)', 'aizome-shoten' ),
		),
		'core/list'      => array(
			'index'      => __( 'Index (numbered, mono)', 'aizome-shoten' ),
			'leaders'    => __( 'Leaders (dotted, two columns)', 'aizome-shoten' ),
		),
		'core/quote'     => array(
			'obi'        => __( 'Obi (a quote on the book band)', 'aizome-shoten' ),
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
add_action( 'init', 'aizome_shoten_block_styles' );

/**
 * Pattern category.
 */
function aizome_shoten_pattern_categories() {
	register_block_pattern_category(
		'aizome-shoten',
		array(
			'label'       => __( 'Aizome Shoten', 'aizome-shoten' ),
			'description' => __( 'Editorial sections for a bookshop and small press: the shelf, staff picks, the press, readings and events, the journal, the newsletter and a visit.', 'aizome-shoten' ),
		)
	);
}
add_action( 'init', 'aizome_shoten_pattern_categories' );
