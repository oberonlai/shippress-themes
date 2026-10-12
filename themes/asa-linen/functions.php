<?php
/**
 * Asa Linen — functions and definitions.
 *
 * @package asa-linen
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'ASA_LINEN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function asa_linen_setup() {
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
add_action( 'after_setup_theme', 'asa_linen_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The only script is the header (H8): it turns
 * solid once the page scrolls, in browsers without CSS scroll-driven animations (assets/js/header.js).
 */
function asa_linen_enqueue() {
	wp_enqueue_style( 'asa-linen-style', get_stylesheet_uri(), array(), ASA_LINEN_VERSION );
	wp_enqueue_script( 'asa-linen-header', get_theme_file_uri( 'assets/js/header.js' ), array(), ASA_LINEN_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'asa-linen-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'asa-linen-style' ), ASA_LINEN_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'asa_linen_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function asa_linen_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'asa_linen_editor_shop_styles' );

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
function asa_linen_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'asa_linen_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function asa_linen_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'asa-linen' ),
			'lead'  => __( 'Lead paragraph', 'asa-linen' ),
			'fine'  => __( 'Fine print', 'asa-linen' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Pale washi panel', 'asa-linen' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'asa-linen' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'asa-linen' ),
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
add_action( 'init', 'asa_linen_block_styles' );

/**
 * Pattern category.
 */
function asa_linen_pattern_categories() {
	register_block_pattern_category(
		'asa-linen',
		array(
			'label'       => __( 'Asa Linen', 'asa-linen' ),
			'description' => __( 'Serene sections for a linen bedding atelier: the made-bed opening, four chapters beside a sticky photograph, the bedding, care, the fabric guide, the journal and the atelier card.', 'asa-linen' ),
		)
	);
}
add_action( 'init', 'asa_linen_pattern_categories' );

/**
 * The linen weight line. Its single source is each product's "Linen weight" attribute (set in the product editor under
 * Product data > Attributes, e.g. 165 gsm); it is printed under the price in the shop grid and on the product page.
 * Products without the attribute show nothing. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function asa_linen_weight_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$weight = trim( (string) $product->get_attribute( 'Linen weight' ) );
	if ( '' === $weight ) {
		return $content;
	}
	/* translators: %s: linen weight, e.g. 165 gsm. */
	$label = sprintf( __( '%s washed flax', 'asa-linen' ), '<span>' . esc_html( $weight ) . '</span>' );
	return $content . '<p class="al-weight">' . $label . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'asa_linen_weight_line', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function asa_linen_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.al-menu .wp-block-navigation__responsive-container-open{display:none!important}.al-menu .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.al-menu .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;gap:1rem!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'asa_linen_noscript_menu' );
