<?php
/**
 * Neiro Music — functions and definitions.
 *
 * @package neiro-music
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'NEIRO_MUSIC_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function neiro_music_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'neiro_music_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the hidden state
 * is set before the first paint.
 */
function neiro_music_enqueue() {
	wp_enqueue_style( 'neiro-music-style', get_stylesheet_uri(), array(), NEIRO_MUSIC_VERSION );
	wp_enqueue_style( 'neiro-music-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'neiro-music-style' ), NEIRO_MUSIC_VERSION );
	wp_enqueue_script( 'neiro-music-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), NEIRO_MUSIC_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'neiro_music_enqueue' );

/**
 * Pattern category.
 */
function neiro_music_pattern_categories() {
	register_block_pattern_category(
		'neiro-music',
		array(
			'label'       => __( 'Neiro Music', 'neiro-music' ),
			'description' => __( 'Sections for a private music school: an overlapping pair of portrait photographs, a teaching day as five stacked sticky rows, vertical rail labels, a full-bleed parallax recital band, a full-width fee list and pupils\' stories.', 'neiro-music' ),
		)
	);
}
add_action( 'init', 'neiro_music_pattern_categories' );

/**
 * Vertical rail label paragraph (horizontal below 1024px, see style.css).
 *
 * @param string $label Label text, already in the content language.
 * @return string Block markup.
 */
function neiro_music_rail( $label ) {
	return '<!-- wp:paragraph {"className":"nm-rail"} -->' . "\n" . '<p class="nm-rail">' . esc_html( $label ) . '</p>' . "\n" . '<!-- /wp:paragraph -->';
}

/**
 * Text link with the 72 x 1px line before it.
 *
 * @param string $text Link text.
 * @param string $href Link target.
 * @param string $class Extra classes on the paragraph.
 * @return string Block markup.
 */
function neiro_music_link( $text, $href, $class = '' ) {
	$class = trim( 'nm-link ' . $class );
	return '<!-- wp:paragraph {"className":"' . esc_attr( $class ) . '"} -->' . "\n" . '<p class="' . esc_attr( $class ) . '"><a href="' . esc_url( $href ) . '">' . esc_html( $text ) . '</a></p>' . "\n" . '<!-- /wp:paragraph -->';
}

/**
 * Photograph block.
 *
 * @param string $file  File name in assets/images (p01.webp).
 * @param string $alt   Alt text.
 * @param string $class Classes for the figure (first is the layout class).
 * @return string Block markup.
 */
function neiro_music_photo( $file, $alt, $class ) {
	$url = esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"' . esc_attr( $class ) . '"} -->' . "\n" . '<figure class="wp-block-image size-full ' . esc_attr( $class ) . '"><img src="' . $url . '" alt="' . esc_attr( $alt ) . '"/></figure>' . "\n" . '<!-- /wp:image -->';
}
