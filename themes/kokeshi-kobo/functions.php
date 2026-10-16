<?php
/**
 * Kokeshi Kobo — functions and definitions.
 *
 * @package kokeshi-kobo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'KOKESHI_KOBO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kokeshi_kobo_setup() {
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
add_action( 'after_setup_theme', 'kokeshi_kobo_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. No script is needed.
 */
function kokeshi_kobo_enqueue() {
	wp_enqueue_style( 'kokeshi-kobo-style', get_stylesheet_uri(), array(), KOKESHI_KOBO_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'kokeshi-kobo-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'kokeshi-kobo-style' ), KOKESHI_KOBO_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'kokeshi_kobo_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function kokeshi_kobo_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'kokeshi_kobo_editor_shop_styles' );

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
function kokeshi_kobo_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'kokeshi_kobo_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kokeshi_kobo_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'kokeshi-kobo' ),
			'lead'  => __( 'Lead paragraph', 'kokeshi-kobo' ),
			'fine'  => __( 'Fine print', 'kokeshi-kobo' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Pale mist panel', 'kokeshi-kobo' ),
		),
		'core/separator' => array(
			'ferrule' => __( 'Ferrule mark (concentric tip)', 'kokeshi-kobo' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'kokeshi-kobo' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'kokeshi-kobo' ),
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
add_action( 'init', 'kokeshi_kobo_block_styles' );

/**
 * Pattern category.
 */
function kokeshi_kobo_pattern_categories() {
	register_block_pattern_category(
		'kokeshi-kobo',
		array(
			'label'       => __( 'Kokeshi Kobo', 'kokeshi-kobo' ),
			'description' => __( 'Quiet sections for a small umbrella atelier: the opening line, the canopy rail, the atelier note, the redoll promise, the size guide, the workshop, the journal and the synced shop details and redoll terms.', 'kokeshi-kobo' ),
		)
	);
}
add_action( 'init', 'kokeshi_kobo_pattern_categories' );

/**
 * The small wood-and-height line under each doll. Its single source is each product's "Wood" and "Height" attributes
 * (e.g. Mizuki and 18), printed as "Mizuki · 18 cm" above the price on the home shelf, the shop grid and the product
 * page. Products without the attributes show nothing extra. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kokeshi_kobo_wood_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$wood = trim( (string) $product->get_attribute( 'Wood' ) );
	$age  = trim( (string) $product->get_attribute( 'Height' ) );
	$bits = array();
	if ( '' !== $wood ) {
		$bits[] = $wood;
	}
	if ( '' !== $age ) {
		/* translators: %s: height in centimetres, e.g. 18. */
		$bits[] = sprintf( __( '%s cm', 'kokeshi-kobo' ), $age );
	}
	if ( ! $bits ) {
		return $content;
	}
	return '<p class="kk-canopy__ribs">' . esc_html( implode( ' · ', $bits ) ) . '</p>' . $content;
}
add_filter( 'render_block_woocommerce/product-price', 'kokeshi_kobo_wood_line', 10, 2 );

/**
 * The kokeshi rail is a horizontal scroll-snap track. So it can be scrolled with the keyboard (arrow keys) it gets
 * kokeshindex="0", a region role and a label; nothing else changes. Works for the WooCommerce rail and the static one.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kokeshi_kobo_rail_track( $content, $block ) {
	if ( empty( $block['attrs']['className'] ) || ! preg_match( '/(^|\s)kk-rail(\s|$)/', $block['attrs']['className'] ) || preg_match( '/(^|\s)kk-rail--grid(\s|$)/', $block['attrs']['className'] ) ) {
		return $content;
	}
	$attrs = ' kokeshindex="0" role="region" aria-label="' . esc_attr__( 'Kokeshi rail: scroll sideways', 'kokeshi-kobo' ) . '"';
	if ( 'woocommerce/product-collection' === $block['blockName'] ) {
		// The scrolling element is the product list inside the collection.
		return preg_replace( '/<ul\b/', '<ul' . $attrs, $content, 1 );
	}
	return preg_replace( '/^(\s*<div\b)/', '$1' . $attrs, $content, 1 );
}
add_filter( 'render_block_core/group', 'kokeshi_kobo_rail_track', 10, 2 );
add_filter( 'render_block_woocommerce/product-collection', 'kokeshi_kobo_rail_track', 10, 2 );

/**
 * Without JavaScript the overlay menu cannot open, so the menu is shown as a plain row of links instead.
 */
function kokeshi_kobo_noscript_menu() {
	echo '<noscript><style>.kk-nav .wp-block-navigation__responsive-container-open{display:none!important}.kk-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.kk-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;gap:.5rem 1rem!important}.kk-header__bar{flex-wrap:wrap!important}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'kokeshi_kobo_noscript_menu' );
