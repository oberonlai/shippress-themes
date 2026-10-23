<?php
/**
 * Shikaku Academy — functions and definitions.
 *
 * @package shikaku-academy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/blocks.php';
require_once get_template_directory() . '/inc/pages.php';

define( 'SHIKAKU_ACADEMY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function sa_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'sa_setup' );

/**
 * Front-end styles and the scroll script. sp-scroll.js loads in the head, not deferred, so html.sp-js is set before
 * the first paint (no flash of visible content that then hides).
 */
function sa_enqueue() {
	wp_enqueue_style( 'sa-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array(), SHIKAKU_ACADEMY_VERSION );
	wp_enqueue_style( 'shikaku-academy-style', get_stylesheet_uri(), array( 'sa-sp-scroll' ), SHIKAKU_ACADEMY_VERSION );
	wp_enqueue_script( 'sa-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), SHIKAKU_ACADEMY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'sa_enqueue' );

/**
 * Pattern category.
 */
function sa_pattern_categories() {
	register_block_pattern_category(
		'shikaku-academy',
		array(
			'label'       => __( 'Shikaku Academy', 'shikaku-academy' ),
			'description' => __( 'Sections for an online certification academy: paper-strip headlines beside a photo standing on the fold, numbered-tab course cards in a descending ladder, a fan of three rotated photo cards and a single-course, bundle and all-access plan table.', 'shikaku-academy' ),
		)
	);
}
add_action( 'init', 'sa_pattern_categories' );

/**
 * Pages whose content brings its own paper-strip head hide the template's plain title (body class sa-has-head).
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function sa_body_class( $classes ) {
	if ( is_singular( 'page' ) && false !== strpos( (string) get_post_field( 'post_content', get_queried_object_id() ), 'shikaku-academy/' ) ) {
		$classes[] = 'sa-has-head';
	} elseif ( is_singular( 'page' ) && false !== strpos( (string) get_post_field( 'post_content', get_queried_object_id() ), 'sa-head' ) ) {
		$classes[] = 'sa-has-head';
	}
	return $classes;
}
add_filter( 'body_class', 'sa_body_class' );

/**
 * A page that brings its own head (its first heading is the page's h1) does not print the template's title again.
 *
 * @param string $html  Rendered title.
 * @param array  $block Block data.
 * @return string
 */
function sa_skip_auto_title( $html, $block ) {
	if ( isset( $block['attrs']['className'] ) && 'sa-pagetitle' === $block['attrs']['className'] && in_array( 'sa-has-head', get_body_class(), true ) ) {
		return '';
	}
	return $html;
}
add_filter( 'render_block_core/post-title', 'sa_skip_auto_title', 10, 2 );
