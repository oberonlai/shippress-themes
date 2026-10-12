<?php
/**
 * Mizuha Glass — functions and definitions.
 *
 * @package mizuha-glass
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'MIZUHA_GLASS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function mizuha_glass_setup() {
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
add_action( 'after_setup_theme', 'mizuha_glass_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The only script is the header (H8): over the
 * home photograph it turns solid once the page scrolls, in browsers without CSS scroll-driven animations
 * (assets/js/header.js).
 */
function mizuha_glass_enqueue() {
	wp_enqueue_style( 'mizuha-glass-style', get_stylesheet_uri(), array(), MIZUHA_GLASS_VERSION );
	wp_enqueue_script( 'mizuha-glass-header', get_theme_file_uri( 'assets/js/header.js' ), array(), MIZUHA_GLASS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'mizuha-glass-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'mizuha-glass-style' ), MIZUHA_GLASS_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'mizuha_glass_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function mizuha_glass_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'mizuha_glass_editor_shop_styles' );

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
function mizuha_glass_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'mizuha_glass_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function mizuha_glass_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'mizuha-glass' ),
			'lead'  => __( 'Lead paragraph', 'mizuha-glass' ),
			'fine'  => __( 'Fine print', 'mizuha-glass' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Mist panel with a glass edge', 'mizuha-glass' ),
		),
		'core/separator' => array(
			'edge' => __( 'Glass edge (sage hairline with a light inner line)', 'mizuha-glass' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'mizuha-glass' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'mizuha-glass' ),
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
add_action( 'init', 'mizuha_glass_block_styles' );

/**
 * Pattern category.
 */
function mizuha_glass_pattern_categories() {
	register_block_pattern_category(
		'mizuha-glass',
		array(
			'label'       => __( 'Mizuha Glass', 'mizuha-glass' ),
			'description' => __( 'Quiet sections for a small glass studio: the full-bleed photograph, the shelf, how we make it, the studio, shipping and care, the journal and the synced studio and policy cards.', 'mizuha-glass' ),
		)
	);
}
add_action( 'init', 'mizuha_glass_pattern_categories' );


/**
 * The size line. Its single source is each product's "Size" attribute (Product data > Attributes, e.g. Ø 7.5 cm · H 9 cm
 * · 280 ml); it is printed under the price in the grid and on the product page. Products without it show nothing.
 * Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function mizuha_glass_size_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$size = trim( (string) $product->get_attribute( 'Size' ) );
	if ( '' === $size ) {
		return $content;
	}
	return $content . '<p class="mz-size">' . esc_html( $size ) . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'mizuha_glass_size_line', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function mizuha_glass_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.mz-nav .wp-block-navigation__responsive-container-open{display:none!important}.mz-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.mz-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;justify-content:center;gap:.5rem 1rem!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'mizuha_glass_noscript_menu' );
