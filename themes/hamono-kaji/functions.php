<?php
/**
 * Hamono Kaji — functions and definitions.
 *
 * @package hamono-kaji
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'HAMONO_KAJI_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function hamono_kaji_setup() {
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
add_action( 'after_setup_theme', 'hamono_kaji_setup' );

/**
 * Front-end styles. The shop styles load only while WooCommerce is active.
 */
function hamono_kaji_enqueue() {
	wp_enqueue_style( 'hamono-kaji-style', get_stylesheet_uri(), array(), HAMONO_KAJI_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'hamono-kaji-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'hamono-kaji-style' ), HAMONO_KAJI_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'hamono_kaji_enqueue' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function hamono_kaji_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'hamono_kaji_editor_shop_styles' );

/**
 * With WooCommerce active, the account link and the mini cart sit after the index tabs (Block Hooks API). WooCommerce
 * does this itself only on some installs; this adds them otherwise, never twice. Without WooCommerce: nothing.
 *
 * @param string[]                        $hooked   Block types hooked at this position.
 * @param string                          $position before, after, first_child or last_child.
 * @param string                          $anchor   Anchor block type.
 * @param WP_Block_Template|WP_Post|array $context  Where the anchor is.
 * @return string[]
 */
function hamono_kaji_header_shop_blocks( $hooked, $position, $anchor, $context ) {
	if ( 'after' !== $position || 'core/navigation' !== $anchor || ! class_exists( 'WooCommerce' ) ) {
		return $hooked;
	}
	if ( ! ( $context instanceof WP_Block_Template ) || 'wp_template_part' !== $context->type || ! in_array( $context->slug, array( 'header' ), true ) ) {
		return $hooked;
	}
	foreach ( array( 'woocommerce/customer-account', 'woocommerce/mini-cart' ) as $block ) {
		if ( ! in_array( $block, $hooked, true ) && WP_Block_Type_Registry::get_instance()->is_registered( $block ) && false === strpos( (string) $context->content, 'wp:' . $block ) ) {
			$hooked[] = $block;
		}
	}
	return $hooked;
}
add_filter( 'hooked_block_types', 'hamono_kaji_header_shop_blocks', 20, 4 );

/**
 * Block style variations. All CSS lives in style.css.
 */
function hamono_kaji_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Index label (mono, after a short rule)', 'hamono-kaji' ),
			'lead'  => __( 'Lead paragraph', 'hamono-kaji' ),
			'fine'  => __( 'Fine print (mono)', 'hamono-kaji' ),
			'ember' => __( 'Ember dot (use once on a page)', 'hamono-kaji' ),
		),
		'core/heading'   => array(
			'label' => __( 'Index label (mono, after a short rule)', 'hamono-kaji' ),
		),
		'core/group'     => array(
			'reveal' => __( 'Slow rise on scroll', 'hamono-kaji' ),
			'ruled'  => __( 'Ruled cells (hairline grid)', 'hamono-kaji' ),
		),
		'core/image'     => array(
			'plate' => __( 'Plate (hairline frame with a numbered caption)', 'hamono-kaji' ),
		),
		'core/separator' => array(
			'ember' => __( 'Short ember rule', 'hamono-kaji' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'hamono-kaji' ),
		),
		'core/table'     => array(
			'spec' => __( 'Specification sheet (mono labels, hairline rows)', 'hamono-kaji' ),
		),
		'core/list'      => array(
			'steps'    => __( 'Steps (numbered, hairline rows)', 'hamono-kaji' ),
			'hairline' => __( 'Hairline rows', 'hamono-kaji' ),
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
add_action( 'init', 'hamono_kaji_block_styles' );

/**
 * Pattern category.
 */
function hamono_kaji_pattern_categories() {
	register_block_pattern_category(
		'hamono-kaji',
		array(
			'label'       => __( 'Hamono Kaji', 'hamono-kaji' ),
			'description' => __( 'Dark, ruled sections for a knife forge and kitchen-tool shop: the knife rack, a blade specification sheet, the forge, the sharpening service, the care guide, the journal, the letter and a visit.', 'hamono-kaji' ),
		)
	);
}
add_action( 'init', 'hamono_kaji_pattern_categories' );
