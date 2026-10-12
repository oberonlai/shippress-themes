<?php
/**
 * Tsuya Lacquer — functions and definitions.
 *
 * @package tsuya-lacquer
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'TSUYA_LACQUER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function tsuya_lacquer_setup() {
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
add_action( 'after_setup_theme', 'tsuya_lacquer_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. No scripts: the menu is the core one.
 */
function tsuya_lacquer_enqueue() {
	wp_enqueue_style( 'tsuya-lacquer-style', get_stylesheet_uri(), array(), TSUYA_LACQUER_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'tsuya-lacquer-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'tsuya-lacquer-style' ), TSUYA_LACQUER_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'tsuya_lacquer_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function tsuya_lacquer_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'tsuya_lacquer_editor_shop_styles' );

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
function tsuya_lacquer_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'tsuya_lacquer_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tsuya_lacquer_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'tsuya-lacquer' ),
			'lead'  => __( 'Lead paragraph', 'tsuya-lacquer' ),
			'fine'  => __( 'Fine print', 'tsuya-lacquer' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Pale ivory panel', 'tsuya-lacquer' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'tsuya-lacquer' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'tsuya-lacquer' ),
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
add_action( 'init', 'tsuya_lacquer_block_styles' );

/**
 * Pattern category.
 */
function tsuya_lacquer_pattern_categories() {
	register_block_pattern_category(
		'tsuya-lacquer',
		array(
			'label'       => __( 'Tsuya Lacquer', 'tsuya-lacquer' ),
			'description' => __( 'Quiet sections for an urushi lacquer workshop: the full-bleed opening, the collections, the layers of lacquer, the craft, care, the journal and the workshop card.', 'tsuya-lacquer' ),
		)
	);
}
add_action( 'init', 'tsuya_lacquer_pattern_categories' );

/**
 * The "layers of lacquer" count. Its single source is each product's "Layers of lacquer" attribute (set in the product
 * editor under Product data > Attributes); it is printed under the price in the shop grid and on the product page.
 * Products without the attribute show nothing. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function tsuya_lacquer_layers_count( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$layers = trim( (string) $product->get_attribute( 'Layers of lacquer' ) );
	if ( '' === $layers ) {
		return $content;
	}
	/* translators: %s: number of coats of lacquer on the product. */
	$label = sprintf( _n( '%s layer of lacquer', '%s layers of lacquer', (int) $layers, 'tsuya-lacquer' ), '<span>' . esc_html( $layers ) . '</span>' );
	return $content . '<p class="ts-layers">' . $label . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'tsuya_lacquer_layers_count', 10, 2 );

/**
 * Without JavaScript the core overlay menu cannot open, so the menu is shown as a plain list under the header instead.
 */
function tsuya_lacquer_noscript_menu() {
	echo '<noscript><style>.ts-menu .wp-block-navigation__responsive-container-open{display:none!important}.ts-menu .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.ts-menu .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;gap:1rem!important}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'tsuya_lacquer_noscript_menu' );
