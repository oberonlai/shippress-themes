<?php
/**
 * Ayumi Podiatry — functions and definitions.
 *
 * @package ayumi-podiatry
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'AYUMI_PODIATRY_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function ayumi_podiatry_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'ayumi_podiatry_setup' );

/**
 * Front-end styles and the scroll effects (sp-scroll). The script loads in the head, not deferred, so the hidden
 * state is set before the first paint.
 */
function ayumi_podiatry_enqueue() {
	wp_enqueue_style( 'ayumi-podiatry-style', get_stylesheet_uri(), array(), AYUMI_PODIATRY_VERSION );
	wp_enqueue_style( 'ayumi-podiatry-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'ayumi-podiatry-style' ), AYUMI_PODIATRY_VERSION );
	wp_enqueue_script( 'ayumi-podiatry-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), AYUMI_PODIATRY_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'ayumi_podiatry_enqueue' );

/**
 * Pattern category.
 */
function ayumi_podiatry_pattern_categories() {
	register_block_pattern_category(
		'ayumi-podiatry',
		array(
			'label'       => __( 'Ayumi Podiatry', 'ayumi-podiatry' ),
			'description' => __( 'Sections for a foot clinic: the flying shape field, the tilted photograph wall, the stacked method cards, one outcome, the clinicians and the booking band.', 'ayumi-podiatry' ),
		)
	);
}
add_action( 'init', 'ayumi_podiatry_pattern_categories' );

/**
 * The hero photo is the LCP element: add fetchpriority at render time, since the attribute is not part of
 * core/image's saved markup and would invalidate the block.
 */
function ayumi_podiatry_hero_fetchpriority( $content, $block ) {
	if ( 'core/image' === $block['blockName'] && false !== strpos( $content, 'a01.webp' ) && false === strpos( $content, 'fetchpriority' ) ) {
		$content = preg_replace( '/<img /', '<img fetchpriority="high" ', $content, 1 );
	}
	return $content;
}
add_filter( 'render_block', 'ayumi_podiatry_hero_fetchpriority', 10, 2 );
