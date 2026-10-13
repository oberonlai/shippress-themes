<?php
/**
 * Kurogane Ironware — functions and definitions.
 *
 * @package kurogane-ironware
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'KUROGANE_IRONWARE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kurogane_ironware_setup() {
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
add_action( 'after_setup_theme', 'kurogane_ironware_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The only script is the header (H8): over the
 * home photograph it turns solid once the page scrolls, in browsers without CSS scroll-driven animations
 * (assets/js/header.js).
 */
function kurogane_ironware_enqueue() {
	wp_enqueue_style( 'kurogane-ironware-style', get_stylesheet_uri(), array(), KUROGANE_IRONWARE_VERSION );
	wp_enqueue_script( 'kurogane-ironware-header', get_theme_file_uri( 'assets/js/header.js' ), array(), KUROGANE_IRONWARE_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'kurogane-ironware-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'kurogane-ironware-style' ), KUROGANE_IRONWARE_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'kurogane_ironware_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function kurogane_ironware_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'kurogane_ironware_editor_shop_styles' );

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
function kurogane_ironware_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'kurogane_ironware_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kurogane_ironware_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'kurogane-ironware' ),
			'lead'  => __( 'Lead paragraph', 'kurogane-ironware' ),
			'fine'  => __( 'Fine print', 'kurogane-ironware' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Cast-iron panel with a hairline edge', 'kurogane-ironware' ),
		),
		'core/separator' => array(
			'edge' => __( 'Iron edge (hairline with a rust inner line)', 'kurogane-ironware' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'kurogane-ironware' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'kurogane-ironware' ),
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
add_action( 'init', 'kurogane_ironware_block_styles' );

/**
 * Pattern category.
 */
function kurogane_ironware_pattern_categories() {
	register_block_pattern_category(
		'kurogane-ironware',
		array(
			'label'       => __( 'Kurogane Ironware', 'kurogane-ironware' ),
			'description' => __( 'Quiet sections for a small iron foundry: the full-bleed kettle photograph, the shelf, how a kettle is made, the foundry, seasoning and care, the journal and the synced foundry, care and kettle-lines cards.', 'kurogane-ironware' ),
		)
	);
}
add_action( 'init', 'kurogane_ironware_pattern_categories' );


/**
 * The spec line. Its single source is each product's "Capacity" and "Weight" attributes (Product data > Attributes,
 * e.g. 1.2 l and 1.8 kg); they are printed under the price in the grid and on the product page as "1.2 l · 1.8 kg".
 * Products without either show nothing. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kurogane_ironware_size_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$parts = array();
	foreach ( array( 'Capacity', 'Weight' ) as $name ) {
		$value = trim( (string) $product->get_attribute( $name ) );
		if ( '' !== $value ) {
			$parts[] = $value;
		}
	}
	if ( ! $parts ) {
		return $content;
	}
	return $content . '<p class="kg-size">' . esc_html( implode( ' · ', $parts ) ) . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'kurogane_ironware_size_line', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function kurogane_ironware_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.kg-nav .wp-block-navigation__responsive-container-open{display:none!important}.kg-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.kg-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;justify-content:center;gap:.5rem 1rem!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'kurogane_ironware_noscript_menu' );
