<?php
/**
 * Kinu Kimono — functions and definitions.
 *
 * @package kinu-kimono
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/shared-info.php';
require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'KINU_KIMONO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kinu_kimono_setup() {
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
add_action( 'after_setup_theme', 'kinu_kimono_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active. No scripts: the menu is the core one.
 */
function kinu_kimono_enqueue() {
	wp_enqueue_style( 'kinu-kimono-style', get_stylesheet_uri(), array(), KINU_KIMONO_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'kinu-kimono-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'kinu-kimono-style' ), KINU_KIMONO_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'kinu_kimono_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function kinu_kimono_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'kinu_kimono_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit at the foot of the vertical menu rail (Block Hooks
 * API). WooCommerce does this itself only on some installs; this adds them otherwise, never twice. Without
 * WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function kinu_kimono_header_shop_blocks( $hooked, $position, $anchor, $context ) {
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
add_filter( 'hooked_block_types', 'kinu_kimono_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function kinu_kimono_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Small label (spaced capitals)', 'kinu-kimono' ),
			'lead'  => __( 'Lead paragraph', 'kinu-kimono' ),
			'fine'  => __( 'Fine print', 'kinu-kimono' ),
		),
		'core/group'     => array(
			'sheet' => __( 'Washi sheet (paper panel)', 'kinu-kimono' ),
		),
		'core/button'    => array(
			'arrow' => __( 'Underlined link with an arrow', 'kinu-kimono' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled rows', 'kinu-kimono' ),
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
add_action( 'init', 'kinu_kimono_block_styles' );

/**
 * Pattern category.
 */
function kinu_kimono_pattern_categories() {
	register_block_pattern_category(
		'kinu-kimono',
		array(
			'label'       => __( 'Kinu Kimono', 'kinu-kimono' ),
			'description' => __( 'Quiet sections for a small kimono rental and dressing house: the kimono rack of plans, the steps of a rental day, the dressing service, the people, the journal and the house card.', 'kinu-kimono' ),
		)
	);
}
add_action( 'init', 'kinu_kimono_pattern_categories' );
