<?php
/**
 * Seiji Utsuwa — functions and definitions.
 *
 * @package seiji-utsuwa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'SEIJI_UTSUWA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function seiji_utsuwa_setup() {
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
add_action( 'after_setup_theme', 'seiji_utsuwa_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active.
 */
function seiji_utsuwa_enqueue() {
	wp_enqueue_style( 'seiji-utsuwa-style', get_stylesheet_uri(), array(), SEIJI_UTSUWA_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'seiji-utsuwa-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'seiji-utsuwa-style' ), SEIJI_UTSUWA_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'seiji_utsuwa_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function seiji_utsuwa_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'seiji_utsuwa_editor_shop_styles' );

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
function seiji_utsuwa_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'seiji_utsuwa_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function seiji_utsuwa_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (spaced small capitals with a glaze dot)', 'seiji-utsuwa' ),
			'lead'  => __( 'Lead paragraph', 'seiji-utsuwa' ),
		),
		'core/heading'   => array(
			'label' => __( 'Label (spaced small capitals with a glaze dot)', 'seiji-utsuwa' ),
		),
		'core/group'     => array(
			'plinth'         => __( 'Plinth (porcelain, soft shadow)', 'seiji-utsuwa' ),
			'plinth-celadon' => __( 'Plinth (pale celadon)', 'seiji-utsuwa' ),
			'plinth-ink'     => __( 'Plinth (iron-black ink)', 'seiji-utsuwa' ),
			'reveal'         => __( 'Slow reveal on scroll', 'seiji-utsuwa' ),
		),
		'core/image'     => array(
			'plinth'     => __( 'On a plinth (soft shadow)', 'seiji-utsuwa' ),
			'arch'       => __( 'Arch (rounded top)', 'seiji-utsuwa' ),
			'glaze-pool' => __( 'Glaze pool (soft organic shape)', 'seiji-utsuwa' ),
		),
		'core/separator' => array(
			'rim' => __( 'Rim (hairline with a celadon pool)', 'seiji-utsuwa' ),
		),
		'core/button'    => array(
			'arrow-link' => __( 'Arrow link', 'seiji-utsuwa' ),
		),
		'core/table'     => array(
			'catalogue' => __( 'Catalogue (hairline rows)', 'seiji-utsuwa' ),
		),
		'core/list'      => array(
			'index'    => __( 'Index (numbered hairline rows)', 'seiji-utsuwa' ),
			'dash'     => __( 'Dash', 'seiji-utsuwa' ),
			'swatches' => __( 'Glaze swatches', 'seiji-utsuwa' ),
		),
		'core/quote'     => array(
			'gallery' => __( 'Gallery (large, centred)', 'seiji-utsuwa' ),
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
add_action( 'init', 'seiji_utsuwa_block_styles' );

/**
 * Pattern category.
 */
function seiji_utsuwa_pattern_categories() {
	register_block_pattern_category(
		'seiji-utsuwa',
		array(
			'label'       => __( 'Seiji Utsuwa', 'seiji-utsuwa' ),
			'description' => __( 'Gallery sections for a ceramics shop: objects on plinths, the kilns, glazes, care, the journal, the newsletter and the viewing room.', 'seiji-utsuwa' ),
		)
	);
}
add_action( 'init', 'seiji_utsuwa_pattern_categories' );
