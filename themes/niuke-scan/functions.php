<?php
/**
 * Niuke Scan — functions and definitions.
 *
 * @package niuke-scan
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/i18n.php';

define( 'NIUKE_SCAN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles (the same scroll CSS and theme CSS in the editor canvas).
 */
function niuke_scan_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'niuke_scan_setup' );

/**
 * Front-end styles and the small scroll script (in the head, not deferred, so the hidden state is set before first paint).
 */
function niuke_scan_enqueue() {
	wp_enqueue_style( 'niuke-scan-style', get_stylesheet_uri(), array(), NIUKE_SCAN_VERSION );
	wp_enqueue_style( 'niuke-scan-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'niuke-scan-style' ), NIUKE_SCAN_VERSION );
	wp_enqueue_script( 'niuke-scan-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NIUKE_SCAN_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'niuke_scan_enqueue' );

/**
 * Pattern category.
 */
function niuke_scan_pattern_categories() {
	register_block_pattern_category(
		'niuke-scan',
		array(
			'label'       => __( 'Niuke Scan', 'niuke-scan' ),
			'description' => __( 'Sections for a goods-in scanner landing page: the dock photograph with a floating count chip, the message, the pinned three-stop shift, ellipse photo rows, the blue spec band, the price table, stories, FAQ and the closing call.', 'niuke-scan' ),
		)
	);
}
add_action( 'init', 'niuke_scan_pattern_categories' );

/**
 * The hero photo is the LCP element: add fetchpriority at render time (not part of core/image's saved markup).
 *
 * @param string $content Block HTML.
 * @param array  $block   Block data.
 * @return string
 */
function niuke_scan_hero_fetchpriority( $content, $block ) {
	if ( 'core/image' === $block['blockName'] && false !== strpos( $content, 'hero-door.webp' ) && false === strpos( $content, 'fetchpriority' ) ) {
		$content = preg_replace( '/<img /', '<img fetchpriority="high" ', $content, 1 );
	}
	return $content;
}
add_filter( 'render_block', 'niuke_scan_hero_fetchpriority', 10, 2 );
