<?php
/**
 * Tsumugi Trading — functions and definitions.
 *
 * @package tsumugi-trading
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/shared-info.php';

define( 'TSUMUGI_TRADING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles.
 */
function tsumugi_trading_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'tsumugi_trading_setup' );

/**
 * Front-end styles.
 */
function tsumugi_trading_enqueue() {
	wp_enqueue_style( 'tsumugi-trading-style', get_stylesheet_uri(), array(), TSUMUGI_TRADING_VERSION );
}
add_action( 'wp_enqueue_scripts', 'tsumugi_trading_enqueue' );

/**
 * Block style variations. All CSS lives in style.css.
 */
function tsumugi_trading_block_styles() {
	$styles = array(
		'core/paragraph' => array(
			'label' => __( 'Label (small capitals after a lane-line dash)', 'tsumugi-trading' ),
			'lead'  => __( 'Lead paragraph', 'tsumugi-trading' ),
		),
		'core/button'    => array(
			'text-link' => __( 'Text link with an arrow', 'tsumugi-trading' ),
			'outline'   => __( 'Quiet outline button', 'tsumugi-trading' ),
		),
		'core/list'      => array(
			'ruled' => __( 'Ruled list (hairline between items)', 'tsumugi-trading' ),
		),
		'core/table'     => array(
			'fees' => __( 'Fees (ruled, tabular figures)', 'tsumugi-trading' ),
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
add_action( 'init', 'tsumugi_trading_block_styles' );

/**
 * Pattern category.
 */
function tsumugi_trading_pattern_categories() {
	register_block_pattern_category(
		'tsumugi-trading',
		array(
			'label'       => __( 'Tsumugi Trading', 'tsumugi-trading' ),
			'description' => __( 'Quiet, photograph-led sections for an independent business hotel: the room at first light, six steps from the platform to checkout, rooms and rates, the price table, the people behind the desk, journal and contact.', 'tsumugi-trading' ),
		)
	);
}
add_action( 'init', 'tsumugi_trading_pattern_categories' );
