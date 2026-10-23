<?php
/**
 * Oto Audio — functions and definitions.
 *
 * @package oto-audio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/woo-import.php';

define( 'OTO_AUDIO_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function oto_audio_setup() {
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
add_action( 'after_setup_theme', 'oto_audio_setup' );

/**
 * Front-end styles and the scroll-effects script (sp-scroll). The script loads in the head, not deferred, so the
 * hidden states exist before the first paint; without JavaScript every block is visible. Fonts come from theme.json.
 */
function oto_audio_enqueue() {
	wp_enqueue_style( 'oto-audio-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), OTO_AUDIO_VERSION );
	wp_enqueue_style( 'oto-audio-style', get_stylesheet_uri(), array( 'oto-audio-sp-scroll' ), OTO_AUDIO_VERSION );
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'oto-audio-woocommerce', get_theme_file_uri( 'assets/css/woocommerce.css' ), array( 'oto-audio-style' ), OTO_AUDIO_VERSION );
	}
	wp_enqueue_script( 'oto-audio-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), OTO_AUDIO_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'oto_audio_enqueue' );

/**
 * Pattern category.
 */
function oto_audio_pattern_categories() {
	register_block_pattern_category(
		'oto-audio',
		array(
			'label'       => __( 'Oto Audio', 'oto-audio' ),
			'description' => __( 'Sections for a hi-fi shop: the photo-left hero with the featured product, the four category icons, the headphone comparison in a crosshair frame, the product trio, the parallax band, the listening hour, the price list, the journal and the visit block.', 'oto-audio' ),
		)
	);
}
add_action( 'init', 'oto_audio_pattern_categories' );

/**
 * The shop styles in the Site Editor too, so the store templates look the same while editing.
 */
function oto_audio_editor_shop_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		add_editor_style( 'assets/css/woocommerce.css' );
	}
}
add_action( 'admin_init', 'oto_audio_editor_shop_styles' );

/**
 * "Cart (0)" in the header: the real count while WooCommerce is active; without WooCommerce the link is dropped.
 *
 * @param string $html  Block HTML.
 * @param array  $block Parsed block.
 * @return string
 */
function oto_audio_header_cart( $html, $block ) {
	if ( 'core/paragraph' !== $block['blockName'] || false === strpos( $html, 'oa-header__cart' ) ) {
		return $html;
	}
	if ( ! class_exists( 'WooCommerce' ) ) {
		return '';
	}
	$count = ( function_exists( 'WC' ) && WC()->cart ) ? (int) WC()->cart->get_cart_contents_count() : 0;
	$html  = preg_replace( '/Cart \(\d+\)/', sprintf( 'Cart (%d)', $count ), $html );
	return str_replace( 'href="/cart/"', 'href="' . esc_url( wc_get_cart_url() ) . '"', $html );
}
add_filter( 'render_block', 'oto_audio_header_cart', 10, 2 );

/**
 * Product tabs: Description, Specifications (the attribute table is the spec panel) and Shipping. No reviews tab.
 *
 * @param array $tabs Tabs.
 * @return array
 */
function oto_audio_product_tabs( $tabs ) {
	unset( $tabs['reviews'] );
	if ( isset( $tabs['additional_information'] ) ) {
		$tabs['additional_information']['title']    = __( 'Specifications', 'oto-audio' );
		$tabs['additional_information']['priority'] = 20;
	}
	$tabs['oto_shipping'] = array(
		'title'    => __( 'Shipping', 'oto-audio' ),
		'priority' => 30,
		'callback' => 'oto_audio_shipping_tab',
	);
	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'oto_audio_product_tabs' );

/**
 * Shipping tab text: the shop policy in one place.
 */
function oto_audio_shipping_tab() {
	echo '<h2>' . esc_html__( 'Shipping, returns and the home trial', 'oto-audio' ) . '</h2>';
	echo '<p>' . esc_html__( 'Orders are dispatched Monday to Friday, within one working day for orders before 15:00. Delivery in the Netherlands is 1–2 working days, in the rest of the EU 2–5 working days. Free EU shipping over €150, otherwise €9 flat. The S8 floorstanders go by courier on the same rates.', 'oto-audio' ) . '</p>';
	echo '<p>' . esc_html__( 'Returns within 30 days, unused and in the original packing; the return label is free in the Netherlands. The home trial is 10 days for one headphone, €25, credited when you buy. Warranty is 2 years on the eight house products.', 'oto-audio' ) . '</p>';
}

/**
 * Show only the free rate when it is available (the flat rate is for orders under the free-shipping threshold).
 *
 * @param array $rates Rates.
 * @return array
 */
function oto_audio_shipping_rates( $rates ) {
	foreach ( $rates as $id => $rate ) {
		if ( 'free_shipping' === $rate->get_method_id() ) {
			return array( $id => $rate );
		}
	}
	return $rates;
}
add_filter( 'woocommerce_package_rates', 'oto_audio_shipping_rates', 100 );
