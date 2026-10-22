<?php
/**
 * Yui Credit Union — functions and definitions.
 *
 * @package yui-credit-union
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'YUI_CREDIT_UNION_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function yui_credit_union_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'yui_credit_union_setup' );

/**
 * Front-end styles, plus the small calculator script on the front page only.
 */
function yui_credit_union_enqueue() {
	wp_enqueue_style( 'yui-credit-union-style', get_stylesheet_uri(), array(), YUI_CREDIT_UNION_VERSION );
	if ( is_page( 'calculator' ) ) {
		wp_enqueue_script( 'yui-credit-union-calc-full', get_theme_file_uri( 'assets/js/calc-full.js' ), array(), YUI_CREDIT_UNION_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	} elseif ( is_front_page() ) {
		wp_enqueue_script( 'yui-credit-union-calc', get_theme_file_uri( 'assets/js/calc.js' ), array(), YUI_CREDIT_UNION_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'yui_credit_union_enqueue' );

/**
 * Pattern category.
 */
function yui_credit_union_pattern_categories() {
	register_block_pattern_category(
		'yui-credit-union',
		array(
			'label'       => __( 'Yui Credit Union', 'yui-credit-union' ),
			'description' => __( 'Sections for a member-owned credit union: the inset branch hero, ruled ledger heads, the sample-rate table, the loan calculator, the uniform pickup row and the join steps.', 'yui-credit-union' ),
		)
	);
}
add_action( 'init', 'yui_credit_union_pattern_categories' );
