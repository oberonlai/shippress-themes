<?php
/**
 * Hibiki Records — functions and definitions.
 *
 * @package hibiki-records
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shop-info.php';
require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'HIBIKI_RECORDS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hibiki_records_setup() {
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
add_action( 'after_setup_theme', 'hibiki_records_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The two small scripts (the footer ticker and
 * the booth / contact forms) load only where they are used (see hibiki_records_group_render).
 */
function hibiki_records_enqueue() {
	wp_enqueue_style( 'hibiki-records-style', get_stylesheet_uri(), array(), HIBIKI_RECORDS_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'hibiki-records-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'hibiki-records-style' ), HIBIKI_RECORDS_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'hibiki_records_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function hibiki_records_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'hibiki_records_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit after the menu in the header bar (beside the Menu button on phones) (Block Hooks
 * API). WooCommerce does this itself only on some installs; this adds them otherwise, never twice. Without
 * WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function hibiki_records_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'hibiki_records_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hibiki_records_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'hibiki-records' ),
			'lead'  => __( 'Lead paragraph', 'hibiki-records' ),
			'fine'  => __( 'Fine print', 'hibiki-records' ),
		),
		'core/separator' => array(
			'groove' => __( 'Groove line (a hairline with one small groove ring)', 'hibiki-records' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'hibiki-records' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'hibiki-records' ),
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
add_action( 'init', 'hibiki_records_block_styles' );

/**
 * Pattern category.
 */
function hibiki_records_pattern_categories() {
	register_block_pattern_category(
		'hibiki-records',
		array(
			'label'       => __( 'Hibiki Records', 'hibiki-records' ),
			'description' => __( 'Quiet sections for a small record shop: the intro, the record-crate mosaic of sleeves with catalogue numbers, new arrivals, the listening booth, the shop details, the journal and the synced booth terms and grading + shipping note.', 'hibiki-records' ),
		)
	);
}
add_action( 'init', 'hibiki_records_pattern_categories' );

/**
 * The catalogue number and the format · condition · year line. The catalogue number is the product's SKU (HBK-0412);
 * the line comes from its "Format", "Condition" and "Year" attributes (accessories use "Contents" instead of a year).
 * Both are printed after the price in the grid and on the product page, in Martian Mono; CSS moves the number above the
 * title. Products without them show nothing extra. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function hibiki_records_spec_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$extra = '';
	$sku   = trim( (string) $product->get_sku() );
	if ( '' !== $sku ) {
		$extra .= '<p class="hb-catno">' . esc_html( $sku ) . '</p>';
	}
	$values = array();
	foreach ( array( 'Format', 'Condition', 'Year', 'Contents' ) as $name ) {
		$value = trim( (string) $product->get_attribute( $name ) );
		if ( '' !== $value ) {
			$values[] = '<span>' . esc_html( $value ) . '</span>';
		}
	}
	if ( $values ) {
		$values = array_slice( $values, 0, 3 );
		$extra .= '<p class="hb-spec">' . implode( '<span class="hb-spec__sep" aria-hidden="true"> · </span>', $values ) . '</p>';
	}
	return $content . $extra;
}
add_filter( 'render_block_woocommerce/product-price', 'hibiki_records_spec_line', 10, 2 );

/**
 * Group blocks: the footer ticker loads its small script only where it is, and the booth / contact forms theirs only
 * on pages that hold a form.
 *
 * @param string $content Rendered group block.
 * @param array  $block   Parsed block.
 * @return string
 */
function hibiki_records_group_render( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( '' === $class ) {
		return $content;
	}
	if ( preg_match( '/(^|\s)hb-ticker(\s|$)/', $class ) ) {
		wp_enqueue_script( 'hibiki-records-ticker', get_theme_file_uri( 'assets/js/ticker.js' ), array(), HIBIKI_RECORDS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	if ( preg_match( '/(^|\s)hb-write(\s|$)/', $class ) ) {
		wp_enqueue_script( 'hibiki-records-forms', get_theme_file_uri( 'assets/js/forms.js' ), array(), HIBIKI_RECORDS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'hibiki_records_group_render', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function hibiki_records_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.hb-nav .wp-block-navigation__responsive-container-open{display:none!important}.hb-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.hb-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;gap:.35rem 1rem!important}.hb-header__bar{flex-wrap:wrap!important}.hb-state--chip{display:none!important}.hb-nav{flex:0 0 100%}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'hibiki_records_noscript_menu' );
