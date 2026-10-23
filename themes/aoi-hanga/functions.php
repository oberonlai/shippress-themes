<?php
/**
 * Aoi Hanga — functions and definitions.
 *
 * @package aoi-hanga
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'AOI_HANGA_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function aoi_hanga_setup() {
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
add_action( 'after_setup_theme', 'aoi_hanga_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. No script is needed: the canopy rail is a
 * plain scroll-snap track (keyboard focusable, see aoi_hanga_rail_track).
 */
function aoi_hanga_enqueue() {
	wp_enqueue_style( 'aoi-hanga-style', get_stylesheet_uri(), array(), AOI_HANGA_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'aoi-hanga-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'aoi-hanga-style' ), AOI_HANGA_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'aoi_hanga_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function aoi_hanga_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'aoi_hanga_editor_shop_styles' );

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
function aoi_hanga_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'aoi_hanga_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function aoi_hanga_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'aoi-hanga' ),
			'lead'  => __( 'Lead paragraph', 'aoi-hanga' ),
			'fine'  => __( 'Fine print', 'aoi-hanga' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Pale mist panel', 'aoi-hanga' ),
		),
		'core/separator' => array(
			'ferrule' => __( 'Ferrule mark (concentric tip)', 'aoi-hanga' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'aoi-hanga' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'aoi-hanga' ),
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
add_action( 'init', 'aoi_hanga_block_styles' );

/**
 * Pattern category.
 */
function aoi_hanga_pattern_categories() {
	register_block_pattern_category(
		'aoi-hanga',
		array(
			'label'       => __( 'Aoi Hanga', 'aoi-hanga' ),
			'description' => __( 'Quiet sections for a small umbrella atelier: the opening line, the canopy rail, the atelier note, the repair promise, the size guide, the workshop, the journal and the synced shop details and repair terms.', 'aoi-hanga' ),
		)
	);
}
add_action( 'init', 'aoi_hanga_pattern_categories' );

/**
 * The rib-count line under each canopy. Its single source is each product's "Ribs" and "Size (cm)" attributes
 * (e.g. 16 and 110), printed as "16 ribs · 110 cm" above the price in the rail and the shop grid, and on the product
 * page. Products without the attributes show nothing extra. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function aoi_hanga_rib_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$ribs = trim( (string) $product->get_attribute( 'Edition' ) );
	$size = trim( (string) $product->get_attribute( 'Size (cm)' ) );
	$bits = array();
	if ( '' !== $ribs ) {
		/* translators: %s: edition size. */
		$bits[] = sprintf( __( 'edition of %s', 'aoi-hanga' ), $ribs );
	}
	if ( '' !== $size ) {
		/* translators: %s: canopy width in centimetres. */
		$bits[] = sprintf( __( '%s cm', 'aoi-hanga' ), $size );
	}
	if ( ! $bits ) {
		return $content;
	}
	return '<p class="ah-canopy__ribs">' . esc_html( implode( ' · ', $bits ) ) . '</p>' . $content;
}
add_filter( 'render_block_woocommerce/product-price', 'aoi_hanga_rib_line', 10, 2 );

/**
 * The canopy rail is a horizontal scroll-snap track. So it can be scrolled with the keyboard (arrow keys) it gets
 * tabindex="0", a region role and a label; nothing else changes. Works for the WooCommerce rail and the static one.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function aoi_hanga_rail_track( $content, $block ) {
	if ( empty( $block['attrs']['className'] ) || ! preg_match( '/(^|\s)ah-rail(\s|$)/', $block['attrs']['className'] ) || preg_match( '/(^|\s)ah-rail--grid(\s|$)/', $block['attrs']['className'] ) ) {
		return $content;
	}
	$attrs = ' tabindex="0" role="region" aria-label="' . esc_attr__( 'Canopy rail: scroll sideways', 'aoi-hanga' ) . '"';
	if ( 'woocommerce/product-collection' === $block['blockName'] ) {
		// The scrolling element is the product list inside the collection.
		return preg_replace( '/<ul\b/', '<ul' . $attrs, $content, 1 );
	}
	return preg_replace( '/^(\s*<div\b)/', '$1' . $attrs, $content, 1 );
}
add_filter( 'render_block_core/group', 'aoi_hanga_rail_track', 10, 2 );
add_filter( 'render_block_woocommerce/product-collection', 'aoi_hanga_rail_track', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function aoi_hanga_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.ah-nav .wp-block-navigation__responsive-container-open{display:none!important}.ah-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.ah-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;justify-content:center;gap:.5rem 1rem!important}.ah-header__bar{flex-wrap:wrap!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'aoi_hanga_noscript_menu' );
