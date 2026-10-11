<?php
/**
 * Ginrin Cycle — functions and definitions.
 *
 * @package ginrin-cycle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'GINRIN_CYCLE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function ginrin_cycle_setup() {
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
add_action( 'after_setup_theme', 'ginrin_cycle_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. No scripts: the menu is the core one.
 */
function ginrin_cycle_enqueue() {
	wp_enqueue_style( 'ginrin-cycle-style', get_stylesheet_uri(), array(), GINRIN_CYCLE_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'ginrin-cycle-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'ginrin-cycle-style' ), GINRIN_CYCLE_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'ginrin_cycle_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function ginrin_cycle_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'ginrin_cycle_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart become the last cells of the ruled header (Block Hooks
 * API). WooCommerce does this itself only on some installs; this adds them otherwise, never twice. Without
 * WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function ginrin_cycle_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'ginrin_cycle_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function ginrin_cycle_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Mono label (small caps line)', 'ginrin-cycle' ),
			'lead'  => __( 'Lead paragraph', 'ginrin-cycle' ),
			'fine'  => __( 'Fine print', 'ginrin-cycle' ),
			'spec'  => __( 'Spec line (monospace)', 'ginrin-cycle' ),
		),
		'core/image'     => array(
			'drawing' => __( 'Drawing frame (hairline with corner ticks)', 'ginrin-cycle' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Paper sheet (hairline panel)', 'ginrin-cycle' ),
		),
		'core/separator' => array(
			'spoke' => __( 'Spoke wheel on a hairline', 'ginrin-cycle' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'ginrin-cycle' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'ginrin-cycle' ),
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
add_action( 'init', 'ginrin_cycle_block_styles' );

/**
 * Pattern category.
 */
function ginrin_cycle_pattern_categories() {
	register_block_pattern_category(
		'ginrin-cycle',
		array(
			'label'       => __( 'Ginrin Cycle', 'ginrin-cycle' ),
			'description' => __( 'Quiet, technical sections for a small bicycle workshop: the product grid with spec lines, the build process, the repair price list, the people at the bench, the journal and the workshop card.', 'ginrin-cycle' ),
		)
	);
}
add_action( 'init', 'ginrin_cycle_pattern_categories' );
