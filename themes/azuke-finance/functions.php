<?php
/**
 * Azuke Finance — functions and definitions.
 *
 * @package azuke-finance
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'AZUKE_FINANCE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles (the scroll-effect CSS too, so the editor shows the final state).
 */
function azuke_finance_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'azuke_finance_setup' );

/**
 * Front-end styles and the scroll-effect script (head, not deferred, so the hidden state exists before first paint).
 */
function azuke_finance_enqueue() {
	wp_enqueue_style( 'azuke-finance-style', get_stylesheet_uri(), array(), AZUKE_FINANCE_VERSION );
	wp_enqueue_style( 'azuke-finance-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), AZUKE_FINANCE_VERSION );
	wp_enqueue_script( 'azuke-finance-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AZUKE_FINANCE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'azuke_finance_enqueue' );

/**
 * A body class per page slug, so the Apply tab can hide itself on the application and thank-you pages.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function azuke_finance_body_class( $classes ) {
	if ( is_page() ) {
		$classes[] = 'az-page-' . sanitize_html_class( get_post_field( 'post_name', get_queried_object_id() ) );
	}
	return $classes;
}
add_filter( 'body_class', 'azuke_finance_body_class' );

/**
 * Pattern category.
 */
function azuke_finance_pattern_categories() {
	register_block_pattern_category(
		'azuke-finance',
		array(
			'label'       => __( 'Azuke Finance', 'azuke-finance' ),
			'description' => __( 'Sections for an invoice-funding landing page: the headline over a bowed photo mosaic, the cash gap on a full-bleed photograph, the sticky chapter panel, the fee table, stories, questions and the single application band.', 'azuke-finance' ),
		)
	);
}
add_action( 'init', 'azuke_finance_pattern_categories' );
