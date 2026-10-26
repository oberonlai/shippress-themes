<?php
/**
 * Kasane Venue — functions and definitions.
 *
 * @package kasane-venue
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'KASANE_VENUE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function kasane_venue_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'kasane_venue_setup' );

/**
 * Front-end styles and the scroll effects (sp-scroll). The script loads in the head, not deferred, so the hidden
 * state is set before the first paint.
 */
function kasane_venue_enqueue() {
	wp_enqueue_style( 'kasane-venue-style', get_stylesheet_uri(), array(), KASANE_VENUE_VERSION );
	wp_enqueue_style( 'kasane-venue-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'kasane-venue-style' ), KASANE_VENUE_VERSION );
	wp_enqueue_script( 'kasane-venue-sp-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), KASANE_VENUE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'kasane_venue_enqueue' );

/**
 * Pattern category.
 */
function kasane_venue_pattern_categories() {
	register_block_pattern_category(
		'kasane-venue',
		array(
			'label'       => __( 'Kasane Venue', 'kasane-venue' ),
			'description' => __( 'Sections for a wedding venue: the blob-window first screen, the opening hall, four rooms on their own colour grounds, the day, the weddings, the people, the fees and the viewing banner.', 'kasane-venue' ),
		)
	);
}
add_action( 'init', 'kasane_venue_pattern_categories' );

/**
 * The hero photo is the LCP element: add fetchpriority at render time, since the attribute is not part of
 * core/image's saved markup and would invalidate the block.
 */
function kasane_venue_hero_fetchpriority( $content, $block ) {
	if ( 'core/image' === $block['blockName'] && false !== strpos( $content, 'k01.webp' ) && false === strpos( $content, 'fetchpriority' ) ) {
		$content = preg_replace( '/<img /', '<img fetchpriority="high" ', $content, 1 );
	}
	return $content;
}
add_filter( 'render_block', 'kasane_venue_hero_fetchpriority', 10, 2 );
