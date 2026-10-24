<?php
/**
 * Hayate Cycles — functions and definitions.
 *
 * @package hayate-cycles
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'HAYATE_CYCLES_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles (the scroll effects show their final state in the editor).
 */
function hayate_cycles_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'hayate_cycles_setup' );

/**
 * Front-end styles and the scroll-effects script (in <head>, not deferred, so the hidden states exist before first paint).
 */
function hayate_cycles_enqueue() {
	wp_enqueue_style( 'hayate-cycles-style', get_stylesheet_uri(), array(), HAYATE_CYCLES_VERSION );
	wp_enqueue_style( 'hayate-cycles-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'hayate-cycles-style' ), HAYATE_CYCLES_VERSION );
	wp_enqueue_script( 'hayate-cycles-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), HAYATE_CYCLES_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'hayate_cycles_enqueue' );

/**
 * With WooCommerce active, the account link and the mini cart sit beside the menu button in the header (Block Hooks
 * API), never twice. Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function hayate_cycles_header_shop_blocks( $hooked, $position, $anchor, $context ) {
	if ( 'after' !== $position || 'core/navigation' !== $anchor || ! class_exists( 'WooCommerce' ) ) {
		return $hooked;
	}
	if ( ! ( $context instanceof WP_Block_Template ) || 'wp_template_part' !== $context->type || 'header' !== $context->slug ) {
		return $hooked;
	}
	$block = 'woocommerce/mini-cart';
	if ( ! in_array( $block, $hooked, true ) && WP_Block_Type_Registry::get_instance()->is_registered( $block ) && false === strpos( (string) $context->content, 'wp:' . $block ) ) {
		$hooked[] = $block;
	}
	return $hooked;
}
add_filter( 'hooked_block_types', 'hayate_cycles_header_shop_blocks', 20, 4 );

/**
 * Pattern category.
 */
function hayate_cycles_pattern_categories() {
	register_block_pattern_category(
		'hayate-cycles',
		array(
			'label'       => __( 'Hayate Cycles', 'hayate-cycles' ),
			'description' => __( 'Sections for a bicycle shop and workshop: three off-grid photographs bleeding off both edges, the hairline service index, capsule photographs with a dashed road line, the parallax ride band, the workshop price table and the ink contact band.', 'hayate-cycles' ),
		)
	);
}
add_action( 'init', 'hayate_cycles_pattern_categories' );
