<?php
/**
 * Kumo Eyewear — functions and definitions.
 *
 * @package kumo-eyewear
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'KUMO_EYEWEAR_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kumo_eyewear_setup() {
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
add_action( 'after_setup_theme', 'kumo_eyewear_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The only script is the small directory filter (assets/js/filter.js), loaded where the directory is.
 */
function kumo_eyewear_enqueue() {
	wp_enqueue_style( 'kumo-eyewear-style', get_stylesheet_uri(), array(), KUMO_EYEWEAR_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'kumo-eyewear-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'kumo-eyewear-style' ), KUMO_EYEWEAR_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'kumo_eyewear_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function kumo_eyewear_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'kumo_eyewear_editor_shop_styles' );

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
function kumo_eyewear_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'kumo_eyewear_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kumo_eyewear_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'kumo-eyewear' ),
			'lead'  => __( 'Lead paragraph', 'kumo-eyewear' ),
			'fine'  => __( 'Fine print', 'kumo-eyewear' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Card panel with a hairline', 'kumo-eyewear' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'kumo-eyewear' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'kumo-eyewear' ),
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
add_action( 'init', 'kumo_eyewear_block_styles' );

/**
 * Pattern category.
 */
function kumo_eyewear_pattern_categories() {
	register_block_pattern_category(
		'kumo-eyewear',
		array(
			'label'       => __( 'Kumo Eyewear', 'kumo-eyewear' ),
			'description' => __( 'Technical, quiet sections for a titanium eyewear atelier: the title-block opening, the filter-first frame directory, the shape drawings, the measurement line, fitting, lenses, the journal and the atelier card.', 'kumo-eyewear' ),
		)
	);
}
add_action( 'init', 'kumo_eyewear_pattern_categories' );

/**
 * The measurement line (lens □ bridge – temple, in mm). Its single source is each product's "Measurements" attribute
 * (Product data > Attributes, e.g. 47□21–145); it is printed with the material under the price in the shop grid and on
 * the product page. Products without the attribute show nothing. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kumo_eyewear_measure_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$measure = trim( (string) $product->get_attribute( 'Measurements' ) );
	if ( '' === $measure ) {
		return $content;
	}
	$material = trim( (string) $product->get_attribute( 'Material' ) );
	$fit      = trim( (string) $product->get_attribute( 'Fit' ) );
	$extra    = array_filter( array( $material, $fit ? sprintf( /* translators: %s: fit size, e.g. Narrow. */ __( '%s fit', 'kumo-eyewear' ), $fit ) : '' ) );
	$out      = '<span class="ku-measure__mm">' . esc_html( $measure ) . '</span>';
	if ( $extra ) {
		$out .= '<span>' . esc_html( implode( ' · ', $extra ) ) . '</span>';
	}
	return $content . '<p class="ku-measure">' . $out . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'kumo_eyewear_measure_line', 10, 2 );

/**
 * The frame directory filter: a few lines of script that hide cells not matching the chosen shape / material / fit
 * pills. Loaded only on pages that hold the directory; without JavaScript every frame stays visible.
 *
 * @param string $content Rendered group block.
 * @param array  $block   Parsed block.
 * @return string
 */
function kumo_eyewear_directory_script( $content, $block ) {
	if ( ! empty( $block['attrs']['className'] ) && preg_match( '/(^|\s)ku-dir(\s|$)/', $block['attrs']['className'] ) ) {
		wp_enqueue_script( 'kumo-eyewear-filter', get_theme_file_uri( 'assets/js/filter.js' ), array(), KUMO_EYEWEAR_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'kumo_eyewear_directory_script', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function kumo_eyewear_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.ku-nav .wp-block-navigation__responsive-container-open{display:none!important}.ku-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.ku-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;gap:.75rem!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'kumo_eyewear_noscript_menu' );
