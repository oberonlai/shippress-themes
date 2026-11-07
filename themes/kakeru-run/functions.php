<?php
/**
 * Kakeru Run — functions and definitions.
 *
 * @package kakeru-run
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'KAKERU_RUN_VERSION', wp_get_theme()->get( 'Version' ) );

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kakeru_run_setup() {
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
add_action( 'after_setup_theme', 'kakeru_run_setup' );

/**
 * Front-end styles and the scroll-effects script (head, not deferred: it adds html.sp-js before the first paint).
 */
function kakeru_run_enqueue() {
	wp_enqueue_style( 'kakeru-run-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), KAKERU_RUN_VERSION );
	wp_enqueue_style( 'kakeru-run-style', get_stylesheet_uri(), array( 'kakeru-run-sp-scroll' ), KAKERU_RUN_VERSION );
	wp_enqueue_script( 'kakeru-run-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KAKERU_RUN_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kakeru_run_enqueue' );

/**
 * With WooCommerce active, the account link and the mini cart sit after the menu in the header (Block Hooks API).
 * Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function kakeru_run_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'kakeru_run_header_shop_blocks', 20, 4 );

/**
 * Pattern category.
 */
function kakeru_run_pattern_categories() {
	register_block_pattern_category(
		'kakeru-run',
		array(
			'label'       => __( 'Kakeru Run', 'kakeru-run' ),
			'description' => __( 'Sections for a running shoe fitting shop: the hexagon stage, specimen tiles, info rows with a clay pill, the parallax gait lab, the brown order band and the stories.', 'kakeru-run' ),
		)
	);
}
add_action( 'init', 'kakeru_run_pattern_categories' );
