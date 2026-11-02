<?php
/**
 * Noboru Lifts — functions and definitions.
 *
 * @package noboru-lifts
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'NOBORU_LIFTS_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function noboru_lifts_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'noboru_lifts_setup' );

/**
 * Front-end styles and the scroll-effect script. The script is loaded in the head, not deferred, so the
 * hidden start state of a reveal is set before the first paint.
 */
function noboru_lifts_enqueue() {
	wp_enqueue_style( 'noboru-lifts-style', get_stylesheet_uri(), array(), NOBORU_LIFTS_VERSION );
	wp_enqueue_style( 'noboru-lifts-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'noboru-lifts-style' ), NOBORU_LIFTS_VERSION );
	wp_enqueue_script( 'noboru-lifts-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NOBORU_LIFTS_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'noboru_lifts_enqueue' );

/**
 * The first screen's large photograph loads eagerly with high priority; everything else keeps the default.
 *
 * @param string|bool $value   Loading attribute value.
 * @param string      $image   The img tag.
 * @param string      $context Context.
 * @return string|bool
 */
function noboru_lifts_eager_hero( $value, $image, $context ) {
	if ( false !== strpos( $image, 'p01-landing' ) || false !== strpos( $image, 'p06-sill' ) ) {
		return false;
	}
	return $value;
}
add_filter( 'wp_img_tag_add_loading_attr', 'noboru_lifts_eager_hero', 10, 3 );

/**
 * Pattern category.
 */
function noboru_lifts_pattern_categories() {
	register_block_pattern_category(
		'noboru-lifts',
		array(
			'label'       => __( 'Noboru Lifts', 'noboru-lifts' ),
			'description' => __( 'Sections for a lift inspection contractor: the open paper first screen with a drifting photo row, the strip-heading intro, pinned visit cards, the checkerboard, the parallax band, the checklist rows, fees, crew, buildings and the booking card.', 'noboru-lifts' ),
		)
	);
}
add_action( 'init', 'noboru_lifts_pattern_categories' );

/**
 * The posts page has no archive title; show the page's own title in its query-title block.
 *
 * @param string $html Rendered block.
 * @return string
 */
function noboru_lifts_posts_page_title( $html ) {
	if ( is_home() && ! is_front_page() && '' === trim( wp_strip_all_tags( $html ) ) ) {
		$title = get_the_title( (int) get_option( 'page_for_posts' ) );
		return '<h1 class="wp-block-query-title nl-pagehead__h1">' . esc_html( $title ) . '</h1>';
	}
	return $html;
}
add_filter( 'render_block_core/query-title', 'noboru_lifts_posts_page_title' );

/* The marquee's second copy is decorative; aria-hidden is not saved by core/group, so add it on render. */
function noboru_lifts_hide_marquee_copy( $html ) {
	$p = new WP_HTML_Tag_Processor( $html );
	if ( $p->next_tag( array( 'class_name' => 'nl-set--dup' ) ) ) {
		$p->set_attribute( 'aria-hidden', 'true' );
		return $p->get_updated_html();
	}
	return $html;
}
add_filter( 'render_block_core/group', 'noboru_lifts_hide_marquee_copy' );
