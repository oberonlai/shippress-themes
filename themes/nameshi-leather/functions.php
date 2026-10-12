<?php
/**
 * Nameshi Leather — functions and definitions.
 *
 * @package nameshi-leather
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'NAMESHI_LEATHER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function nameshi_leather_setup() {
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
add_action( 'after_setup_theme', 'nameshi_leather_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The only script is the small directory filter
 * (assets/js/filter.js), loaded only where the directory is (see nameshi_leather_directory_script).
 */
function nameshi_leather_enqueue() {
	wp_enqueue_style( 'nameshi-leather-style', get_stylesheet_uri(), array(), NAMESHI_LEATHER_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'nameshi-leather-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'nameshi-leather-style' ), NAMESHI_LEATHER_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'nameshi_leather_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function nameshi_leather_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'nameshi_leather_editor_shop_styles' );

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
function nameshi_leather_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'nameshi_leather_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function nameshi_leather_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'nameshi-leather' ),
			'lead'  => __( 'Lead paragraph', 'nameshi-leather' ),
			'fine'  => __( 'Fine print', 'nameshi-leather' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Pale panel with a stitched seam', 'nameshi-leather' ),
		),
		'core/separator' => array(
			'stitch' => __( 'Stitched seam (dashed hairline)', 'nameshi-leather' ),
		),
		'core/image'     => array(
			'seamed' => __( 'Seamed frame (dashed stitch inside the edge)', 'nameshi-leather' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'nameshi-leather' ),
		),
		'core/list'      => array(
			'ruled'    => __( 'Ruled rows', 'nameshi-leather' ),
			'stitched' => __( 'Stitched rows (dashed seams)', 'nameshi-leather' ),
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
add_action( 'init', 'nameshi_leather_block_styles' );

/**
 * Pattern category.
 */
function nameshi_leather_pattern_categories() {
	register_block_pattern_category(
		'nameshi-leather',
		array(
			'label'       => __( 'Nameshi Leather', 'nameshi-leather' ),
			'description' => __( 'Quiet sections for a small leather atelier: the title block, the filter-first directory, how leather ages, repairs, the patina guide, the atelier, the journal and the synced workshop and care cards.', 'nameshi-leather' ),
		)
	);
}
add_action( 'init', 'nameshi_leather_pattern_categories' );


/**
 * The leather note and the patina strip. Their single source is each product's "Leather" attribute (e.g. Natural
 * vegetable-tanned cowhide, 2 mm) and "Patina" attribute (three tones, new · 1 yr · 5 yr, separated by " · "); they are
 * printed under the price in the grid and on the product page. The product's leather tag (natural, black or indigo)
 * picks the swatch tones, and its item category and leather tag are added as data attributes for the directory filter.
 * Products without the attributes show nothing extra. Without WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function nameshi_leather_patina_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$leather = trim( (string) $product->get_attribute( 'Leather' ) );
	$patina  = trim( (string) $product->get_attribute( 'Patina' ) );
	$tags    = wp_get_post_terms( $product->get_id(), 'product_tag', array( 'fields' => 'slugs' ) );
	$cats    = wp_get_post_terms( $product->get_id(), 'product_cat', array( 'fields' => 'slugs' ) );
	$tone    = is_array( $tags ) ? array_values( array_intersect( array( 'natural', 'black', 'indigo' ), $tags ) ) : array();
	$tone    = $tone ? $tone[0] : 'natural';
	$out     = '';
	if ( '' !== $leather ) {
		$out .= '<p class="nm-cell__note">' . esc_html( $leather ) . '</p>';
	}
	$steps = '' !== $patina ? array_map( 'trim', explode( '·', $patina ) ) : array();
	if ( 3 === count( $steps ) ) {
		$when  = array( __( 'New', 'nameshi-leather' ), __( '1 yr', 'nameshi-leather' ), __( '5 yr', 'nameshi-leather' ) );
		$spans = '';
		foreach ( $steps as $i => $step ) {
			$spans .= '<span class="nm-patina__step"><span class="nm-patina__when">' . esc_html( $when[ $i ] ) . '</span><span class="screen-reader-text">: ' . esc_html( $step ) . '</span></span>';
		}
		$out .= '<p class="nm-patina nm-patina--' . esc_attr( $tone ) . '">' . $spans . '</p>';
	}
	if ( '' === $out ) {
		return $content;
	}
	$item = is_array( $cats ) && $cats ? $cats[0] : '';
	return $content . '<div class="nm-cellmeta" data-item="' . esc_attr( $item ) . '" data-leather="' . esc_attr( $tone ) . '">' . $out . '</div>';
}
add_filter( 'render_block_woocommerce/product-price', 'nameshi_leather_patina_line', 10, 2 );

/**
 * The directory filter: a few lines of script that hide cells not matching the chosen item / leather pills. Loaded only
 * on pages that hold the directory; without JavaScript every piece stays visible and the pills do nothing.
 *
 * @param string $content Rendered group block.
 * @param array  $block   Parsed block.
 * @return string
 */
function nameshi_leather_directory_script( $content, $block ) {
	if ( ! empty( $block['attrs']['className'] ) && preg_match( '/(^|\s)nm-dir(\s|$)/', $block['attrs']['className'] ) ) {
		wp_enqueue_script( 'nameshi-leather-filter', get_theme_file_uri( 'assets/js/filter.js' ), array(), NAMESHI_LEATHER_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'nameshi_leather_directory_script', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function nameshi_leather_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.nm-nav .wp-block-navigation__responsive-container-open{display:none!important}.nm-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.nm-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;justify-content:center;gap:.5rem 1rem!important}.nm-header__bar{flex-wrap:wrap!important}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'nameshi_leather_noscript_menu' );
