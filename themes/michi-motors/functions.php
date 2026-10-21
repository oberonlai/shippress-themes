<?php
/**
 * Michi Motors: functions and definitions.
 *
 * @package michi-motors
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'MICHI_MOTORS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function michi_motors_setup() {
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
add_action( 'after_setup_theme', 'michi_motors_setup' );

/**
 * Front-end styles, and one tiny script that turns the transparent header solid after the first scroll.
 */
function michi_motors_enqueue() {
	wp_enqueue_style( 'michi-motors-style', get_stylesheet_uri(), array(), MICHI_MOTORS_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'michi-motors-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'michi-motors-style' ), MICHI_MOTORS_VERSION );
	}
	wp_enqueue_script( 'michi-motors-header', get_theme_file_uri( 'assets/js/header.js' ), array(), MICHI_MOTORS_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'michi_motors_enqueue' );

/**
 * Pattern category.
 */
function michi_motors_pattern_categories() {
	register_block_pattern_category(
		'michi-motors',
		array(
			'label'       => __( 'Michi Motors', 'michi-motors' ),
			'description' => __( 'Sections for a family car dealership: the dimmed front-on cover with a staggered light headline, the family story, the forecourt ledger, approved-used statements, the service band, location rows, the steel floor band, the journal and the test-drive close.', 'michi-motors' ),
		)
	);
}
add_action( 'init', 'michi_motors_pattern_categories' );

/**
 * The shop styles in the Site Editor too, while WooCommerce is active.
 */
function michi_motors_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'michi_motors_editor_shop_styles' );

/**
 * Link to one demo vehicle: its product page with WooCommerce, its row on the New cars page without.
 *
 * @param string $slug Product slug.
 * @return string URL.
 */
function michi_motors_car_url( $slug ) {
	if ( class_exists( 'WooCommerce' ) ) {
		return home_url( '/product/' . $slug . '/' );
	}
	$page = get_page_by_path( 'new-cars' );
	return ( $page ? get_permalink( $page ) : home_url( '/new-cars/' ) ) . '#' . $slug;
}

/**
 * With WooCommerce active, the mini cart sits after the menu in the header (Block Hooks API), never twice.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function michi_motors_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'michi_motors_header_shop_blocks', 20, 4 );
