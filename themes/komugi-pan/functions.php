<?php
/**
 * Komugi Pan — functions and definitions.
 *
 * @package komugi-pan
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'KOMUGI_PAN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function komugi_pan_setup() {
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
add_action( 'after_setup_theme', 'komugi_pan_setup' );

/**
 * Front-end styles and the bake-board clock. The shop styles load only while WooCommerce is active.
 */
function komugi_pan_enqueue() {
	wp_enqueue_style( 'komugi-pan-style', get_stylesheet_uri(), array(), KOMUGI_PAN_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'komugi-pan-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'komugi-pan-style' ), KOMUGI_PAN_VERSION );
	}
	wp_enqueue_script(
		'komugi-pan-bake-board',
		get_theme_file_uri( 'assets/js/bake-board.js' ),
		array(),
		KOMUGI_PAN_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
	// The board follows the bakery's clock, not the visitor's: the site timezone (Settings > General), its offset
	// right now (for "UTC+9"-style settings) and the server time in milliseconds.
	$now = time();
	wp_add_inline_script(
		'komugi-pan-bake-board',
		'window.komugiPanBakeBoard = ' . wp_json_encode(
			array(
				'timezone' => wp_timezone_string(),
				'offset'   => wp_timezone()->getOffset( new DateTime( '@' . $now ) ),
				'now'      => $now * 1000,
			)
		) . ';',
		'before'
	);
}
add_action( 'wp_enqueue_scripts', 'komugi_pan_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function komugi_pan_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'komugi_pan_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit after the split menu (Block Hooks API). WooCommerce
 * does this itself only on some installs; this adds them otherwise, never twice. Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function komugi_pan_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'komugi_pan_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function komugi_pan_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'tag'  => __( 'Basket tag (rounded label)', 'komugi-pan' ),
			'lead' => __( 'Lead paragraph', 'komugi-pan' ),
			'fine' => __( 'Fine print', 'komugi-pan' ),
		),
		'core/image'     => array(
			'loaf' => __( 'Loaf top (rounded arch)', 'komugi-pan' ),
			'bun'  => __( 'Round bun', 'komugi-pan' ),
			'soft' => __( 'Soft corners', 'komugi-pan' ),
		),
		'core/group'     => array(
			'rise' => __( 'Soft rise on scroll', 'komugi-pan' ),
		),
		'core/separator' => array(
			'crumbs' => __( 'A row of crumbs', 'komugi-pan' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'komugi-pan' ),
		),
		'core/list'      => array(
			'dotted' => __( 'Dotted rows', 'komugi-pan' ),
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
add_action( 'init', 'komugi_pan_block_styles' );

/**
 * Pattern category.
 */
function komugi_pan_pattern_categories() {
	register_block_pattern_category(
		'komugi-pan',
		array(
			'label'       => __( 'Komugi Pan', 'komugi-pan' ),
			'description' => __( 'Warm, playful sections for a neighbourhood bakery: the bread shelf, the daily bake board, the day in the bakery, the bakers, the journal, the loaf letter and a visit.', 'komugi-pan' ),
		)
	);
}
add_action( 'init', 'komugi_pan_pattern_categories' );
