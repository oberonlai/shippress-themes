<?php
/**
 * Yoru Chocolate — functions and definitions.
 *
 * @package yoru-chocolate
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'YORU_CHOCOLATE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yoru_chocolate_setup() {
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
add_action( 'after_setup_theme', 'yoru_chocolate_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The only script is the header (H8): over the
 * home photograph it turns solid once the page scrolls, in browsers without CSS scroll-driven animations
 * (assets/js/header.js).
 */
function yoru_chocolate_enqueue() {
	wp_enqueue_style( 'yoru-chocolate-style', get_stylesheet_uri(), array(), YORU_CHOCOLATE_VERSION );
	wp_enqueue_script( 'yoru-chocolate-header', get_theme_file_uri( 'assets/js/header.js' ), array(), YORU_CHOCOLATE_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'yoru-chocolate-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'yoru-chocolate-style' ), YORU_CHOCOLATE_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'yoru_chocolate_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function yoru_chocolate_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'yoru_chocolate_editor_shop_styles' );

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
function yoru_chocolate_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'yoru_chocolate_header_shop_blocks', 20, 4 );

/**
 * The header's "Order a box" button (class yc-shop-link) is saved with the site-relative link /shop/, so it also works
 * on sites in a subfolder: it points at the WooCommerce shop page, else a page with the slug "shop", else the home page.
 *
 * @param string $content Rendered button block.
 * @param array  $block   Parsed block.
 * @return string
 */
function yoru_chocolate_shop_link( $content, $block ) {
	if ( false === strpos( (string) ( $block['attrs']['className'] ?? '' ), 'yc-shop-link' ) || false === strpos( $content, 'href="/shop/"' ) ) {
		return $content;
	}
	$url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : '';
	if ( ! $url ) {
		$page = get_page_by_path( 'shop' );
		$url  = $page ? get_permalink( $page ) : home_url( '/' );
	}
	return str_replace( 'href="/shop/"', 'href="' . esc_url( $url ) . '"', $content );
}
add_filter( 'render_block_core/button', 'yoru_chocolate_shop_link', 10, 2 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function yoru_chocolate_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'yoru-chocolate' ),
			'lead'  => __( 'Lead paragraph', 'yoru-chocolate' ),
			'fine'  => __( 'Fine print', 'yoru-chocolate' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Box-brown panel with a hairline edge', 'yoru-chocolate' ),
		),
		'core/separator' => array(
			'edge' => __( 'Paper band (hairline with a rose-clay inner line)', 'yoru-chocolate' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'yoru-chocolate' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'yoru-chocolate' ),
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
add_action( 'init', 'yoru_chocolate_block_styles' );

/**
 * Pattern category.
 */
function yoru_chocolate_pattern_categories() {
	register_block_pattern_category(
		'yoru-chocolate',
		array(
			'label'       => __( 'Yoru Chocolate', 'yoru-chocolate' ),
			'description' => __( 'Quiet sections for a small chocolatier: the hero, the box of twelve, origins, gift boxes, the journal and the synced shop, warm-weather note and origins cards.', 'yoru-chocolate' ),
		)
	);
}
add_action( 'init', 'yoru_chocolate_pattern_categories' );


/**
 * The spec line. Its single source is each product's "Capacity" and "Weight" attributes (Product data > Attributes,
 * e.g. 1.2 l and 1.8 kg); they are printed under the price in the grid and on the product page as "1.2 l · 1.8 kg".
 * Products without either show nothing. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function yoru_chocolate_size_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$parts = array();
	foreach ( array( 'Cacao', 'Origin' ) as $name ) {
		$value = trim( (string) $product->get_attribute( $name ) );
		if ( '' !== $value ) {
			$parts[] = 'Cacao' === $name ? sprintf( /* translators: %s: cacao percentage */ __( 'Cacao %s', 'yoru-chocolate' ), $value ) : $value;
		}
	}
	if ( ! $parts ) {
		return $content;
	}
	return $content . '<p class="yc-size">' . esc_html( implode( ' · ', $parts ) ) . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'yoru_chocolate_size_line', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function yoru_chocolate_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.yc-nav .wp-block-navigation__responsive-container-open{display:none!important}.yc-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.yc-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;justify-content:center;gap:.5rem 1rem!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'yoru_chocolate_noscript_menu' );
