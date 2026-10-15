<?php
/**
 * Tsuba Millinery — functions and definitions.
 *
 * @package tsuba-millinery
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'TSUBA_MILLINERY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function tsuba_millinery_setup() {
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
add_action( 'after_setup_theme', 'tsuba_millinery_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The header (H12) is pure CSS, no script.
 */
function tsuba_millinery_enqueue() {
	wp_enqueue_style( 'tsuba-millinery-style', get_stylesheet_uri(), array(), TSUBA_MILLINERY_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'tsuba-millinery-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'tsuba-millinery-style' ), TSUBA_MILLINERY_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'tsuba_millinery_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function tsuba_millinery_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'tsuba_millinery_editor_shop_styles' );

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
function tsuba_millinery_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'tsuba_millinery_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tsuba_millinery_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'tsuba-millinery' ),
			'lead'  => __( 'Lead paragraph', 'tsuba-millinery' ),
			'fine'  => __( 'Fine print', 'tsuba-millinery' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Petal panel with a hairline edge', 'tsuba-millinery' ),
		),
		'core/separator' => array(
			'edge' => __( 'Paper band (hairline with a rose-clay inner line)', 'tsuba-millinery' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'tsuba-millinery' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'tsuba-millinery' ),
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
add_action( 'init', 'tsuba_millinery_block_styles' );

/**
 * Pattern category.
 */
function tsuba_millinery_pattern_categories() {
	register_block_pattern_category(
		'tsuba-millinery',
		array(
			'label'       => __( 'Tsuba Millinery', 'tsuba-millinery' ),
			'description' => __( 'Quiet sections for a small milliner: the paper-cut hero, the find-your-shape catalogue, fit and sizing, made to order, the journal and the synced shop card, sizing guide and shapes table.', 'tsuba-millinery' ),
		)
	);
}
add_action( 'init', 'tsuba_millinery_pattern_categories' );


/**
 * The material line. Its single source is each product's "Material" and "Brim" attributes (Product data > Attributes,
 * e.g. Felt and 5 cm); they are printed under the price in the grid and on the product page as "Felt · 5 cm brim".
 * Products without either show nothing. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function tsuba_millinery_size_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$parts = array();
	foreach ( array( 'Material', 'Brim' ) as $name ) {
		$value = trim( (string) $product->get_attribute( $name ) );
		if ( '' !== $value ) {
			$parts[] = 'Brim' === $name && false === stripos( $value, 'brim' ) ? sprintf( /* translators: %s: brim width, e.g. 5 cm */ __( '%s brim', 'tsuba-millinery' ), $value ) : $value;
		}
	}
	if ( ! $parts ) {
		return $content;
	}
	return $content . '<p class="tm-size">' . esc_html( implode( ' · ', $parts ) ) . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'tsuba_millinery_size_line', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function tsuba_millinery_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.tm-nav .wp-block-navigation__responsive-container-open{display:none!important}.tm-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.tm-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;justify-content:center;gap:.5rem 1rem!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'tsuba_millinery_noscript_menu' );

/**
 * WooCommerce switched off after the demo import: the stored home page still holds a WooCommerce product grid,
 * which would print stray titles. Show the static hat shelf (pictures, prices, the no-JavaScript filter) instead,
 * once per page. With WooCommerce active this does nothing.
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function tsuba_millinery_shelf_without_shop( $content, $block ) {
	static $shown = false;
	if ( class_exists( 'WooCommerce' ) || 'woocommerce/product-collection' !== ( $block['blockName'] ?? '' ) ) {
		return $content;
	}
	if ( $shown ) {
		return '';
	}
	$shown = true;
	return do_blocks( '<!-- wp:pattern {"slug":"tsuba-millinery/shelf-cells"} /-->' );
}
add_filter( 'render_block', 'tsuba_millinery_shelf_without_shop', 10, 2 );
