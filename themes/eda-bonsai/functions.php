<?php
/**
 * Eda Bonsai — functions and definitions.
 *
 * @package eda-bonsai
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'EDA_BONSAI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function eda_bonsai_setup() {
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
add_action( 'after_setup_theme', 'eda_bonsai_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. The only script is the small chapter
 * cross-fade (assets/js/chapters.js), loaded only where the chapters are (see eda_bonsai_group_render).
 */
function eda_bonsai_enqueue() {
	wp_enqueue_style( 'eda-bonsai-style', get_stylesheet_uri(), array(), EDA_BONSAI_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'eda-bonsai-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'eda-bonsai-style' ), EDA_BONSAI_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'eda_bonsai_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function eda_bonsai_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'eda_bonsai_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit under the menu in the right-edge rail (beside the Menu button on phones) (Block Hooks
 * API). WooCommerce does this itself only on some installs; this adds them otherwise, never twice. Without
 * WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function eda_bonsai_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'eda_bonsai_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function eda_bonsai_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'eda-bonsai' ),
			'lead'  => __( 'Lead paragraph', 'eda-bonsai' ),
			'fine'  => __( 'Fine print', 'eda-bonsai' ),
		),
		'core/separator' => array(
			'branch' => __( 'Branch line (a fine hairline with one twig)', 'eda-bonsai' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'eda-bonsai' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'eda-bonsai' ),
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
add_action( 'init', 'eda_bonsai_block_styles' );

/**
 * Pattern category.
 */
function eda_bonsai_pattern_categories() {
	register_block_pattern_category(
		'eda-bonsai',
		array(
			'label'       => __( 'Eda Bonsai', 'eda-bonsai' ),
			'description' => __( 'Quiet sections for a small bonsai nursery: the title, four chapters beside a sticky tree photograph, featured trees, the care calendar, workshops, the nursery, the journal and the synced nursery, care + delivery and calendar cards.', 'eda-bonsai' ),
		)
	);
}
add_action( 'init', 'eda_bonsai_pattern_categories' );

/**
 * The age · height · care level line. Its single source is each product's "Age", "Height" and "Care level" attributes
 * (pots, tools and soil use "Size" and "Made from" instead); up to three of them are printed under the price in the grid
 * and on the product page, after a small growth-ring mark. Products without the attributes show nothing extra. Without
 * WooCommerce this filter never runs.
 *
 * @param string $content Rendered price block.
 * @param array  $block   Parsed block.
 * @return string
 */
function eda_bonsai_growth_line( $content, $block ) {
	if ( ! function_exists( 'wc_get_product' ) || '' === trim( $content ) ) {
		return $content;
	}
	$product = wc_get_product( get_the_ID() );
	if ( ! $product ) {
		return $content;
	}
	$values = array();
	foreach ( array( 'Age', 'Height', 'Size', 'Made from', 'Care level' ) as $name ) {
		$value = trim( (string) $product->get_attribute( $name ) );
		if ( '' !== $value ) {
			$values[] = '<span>' . esc_html( $value ) . '</span>';
		}
	}
	if ( ! $values ) {
		return $content;
	}
	$values = array_slice( $values, 0, 3 );
	return $content . '<p class="eb-growth"><span class="eb-growth__ring" aria-hidden="true"></span>' . implode( '<span class="eb-growth__sep" aria-hidden="true"> · </span>', $values ) . '</p>';
}
add_filter( 'render_block_woocommerce/product-price', 'eda_bonsai_growth_line', 10, 2 );

/**
 * The season of the site's own date (WordPress timezone, northern seasons): spring March to May, summer June to
 * August, autumn September to November, winter December to February.
 *
 * @return string
 */
function eda_bonsai_season() {
	$month = (int) wp_date( 'n' );
	if ( $month >= 3 && $month <= 5 ) {
		return 'spring';
	}
	if ( $month >= 6 && $month <= 8 ) {
		return 'summer';
	}
	if ( $month >= 9 && $month <= 11 ) {
		return 'autumn';
	}
	return 'winter';
}

/**
 * Group blocks: the care calendar marks the current season (class is-now and a small "This season" note), which is all
 * the home page teaser shows; the L13 chapters load their small cross-fade script only where they appear.
 *
 * @param string $content Rendered group block.
 * @param array  $block   Parsed block.
 * @return string
 */
function eda_bonsai_group_render( $content, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( '' === $class ) {
		return $content;
	}
	if ( preg_match( '/(^|\s)eb-season--' . eda_bonsai_season() . '(\s|$)/', $class ) ) {
		$note    = '<p class="eb-season__now">' . esc_html__( 'This season', 'eda-bonsai' ) . '</p>';
		$content = preg_replace( '/class="([^"]*eb-season--[a-z]+)/', 'class="$1 is-now', $content, 1 );
		$content = preg_replace( '/(<div class="wp-block-group eb-season__head[^"]*">)/', '$1' . $note, $content, 1 );
	}
	if ( preg_match( '/(^|\s)eb-chapters(\s|$)/', $class ) ) {
		wp_enqueue_script( 'eda-bonsai-chapters', get_theme_file_uri( 'assets/js/chapters.js' ), array(), EDA_BONSAI_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'eda_bonsai_group_render', 10, 2 );

/**
 * Without JavaScript the core mobile menu cannot open, so on small screens the menu is shown as a plain list instead.
 */
function eda_bonsai_noscript_menu() {
	echo '<noscript><style>@media (max-width:599px){.eb-nav .wp-block-navigation__responsive-container-open{display:none!important}.eb-nav .wp-block-navigation__responsive-container{display:block!important;position:static!important;background:none!important}.eb-nav .wp-block-navigation__container{flex-direction:row!important;flex-wrap:wrap;gap:.35rem 1rem!important}.eb-header__bar{flex-wrap:wrap!important}.eb-nav{flex:0 0 100%}}</style></noscript>' . "\n";
}
add_action( 'wp_head', 'eda_bonsai_noscript_menu' );
