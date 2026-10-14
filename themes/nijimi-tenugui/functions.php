<?php
/**
 * Nijimi Tenugui — functions and definitions.
 *
 * @package nijimi-tenugui
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'NIJIMI_TENUGUI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function nijimi_tenugui_setup() {
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
add_action( 'after_setup_theme', 'nijimi_tenugui_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The only script is the unfolding cloth on
 * the home page (L13): it swaps the pinned illustration (folded, opened, hung) as the chapters scroll past
 * (assets/js/unfold.js); without it the folded cloth stays.
 */
function nijimi_tenugui_enqueue() {
	wp_enqueue_style( 'nijimi-tenugui-style', get_stylesheet_uri(), array(), NIJIMI_TENUGUI_VERSION );
	wp_enqueue_script( 'nijimi-tenugui-unfold', get_theme_file_uri( 'assets/js/unfold.js' ), array(), NIJIMI_TENUGUI_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'nijimi-tenugui-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'nijimi-tenugui-style' ), NIJIMI_TENUGUI_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'nijimi_tenugui_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function nijimi_tenugui_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'nijimi_tenugui_editor_shop_styles' );

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
function nijimi_tenugui_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'nijimi_tenugui_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function nijimi_tenugui_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'nijimi-tenugui' ),
			'lead'  => __( 'Lead paragraph', 'nijimi-tenugui' ),
			'fine'  => __( 'Fine print', 'nijimi-tenugui' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Cloth-white card with a hairline edge', 'nijimi-tenugui' ),
		),
		'core/separator' => array(
			'edge' => __( 'Dyed edge (hairline with an indigo inner line)', 'nijimi-tenugui' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'nijimi-tenugui' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'nijimi-tenugui' ),
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
add_action( 'init', 'nijimi_tenugui_block_styles' );

/**
 * Pattern category.
 */
function nijimi_tenugui_pattern_categories() {
	register_block_pattern_category(
		'nijimi-tenugui',
		array(
			'label'       => __( 'Nijimi Tenugui', 'nijimi-tenugui' ),
			'description' => __( 'Quiet sections for a small tenugui dye workshop: the unfolding cloth, the shelf, the pour, the four patterns, use and care, the workshop, the journal and the synced workshop and care cards.', 'nijimi-tenugui' ),
		)
	);
}
add_action( 'init', 'nijimi_tenugui_pattern_categories' );


/**
 * The spec line. Its single source is each product's "Size" and "Dye" attributes (Product data > Attributes,
 * e.g. 90 × 34 cm and Two indigos); they are printed under the price in the grid and on the product page as
 * "90 × 34 cm · Two indigos".
 * Products without either show nothing. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function nijimi_tenugui_size_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$parts = array();
	foreach ( array( 'Size', 'Dye' ) as $name ) {
		$value = trim( (string) $product->get_attribute( $name ) );
		if ( '' !== $value ) {
			$parts[] = $value;
		}
	}
	if ( ! $parts ) {
		return $content;
	}
	return $content . '<p class="nt-size">' . esc_html( implode( ' · ', $parts ) ) . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'nijimi_tenugui_size_line', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function nijimi_tenugui_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.nt-nav .wp-block-navigation__responsive-container-open{display:none!important}.nt-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.nt-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;justify-content:center;gap:.5rem 1rem!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'nijimi_tenugui_noscript_menu' );
