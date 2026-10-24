<?php
/**
 * Madoka Childcare — functions and definitions.
 *
 * @package madoka-childcare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';
require_once get_template_directory() . '/inc/inner.php';

define( 'MADOKA_CHILDCARE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function madoka_childcare_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'madoka_childcare_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the hidden state
 * is set before the first paint.
 */
function madoka_childcare_enqueue() {
	wp_enqueue_style( 'madoka-childcare-style', get_stylesheet_uri(), array(), MADOKA_CHILDCARE_VERSION );
	wp_enqueue_style( 'madoka-childcare-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'madoka-childcare-style' ), MADOKA_CHILDCARE_VERSION );
	wp_enqueue_script( 'madoka-childcare-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), MADOKA_CHILDCARE_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'madoka_childcare_enqueue' );

/**
 * Pattern category.
 */
function madoka_childcare_pattern_categories() {
	register_block_pattern_category(
		'madoka-childcare',
		array(
			'label'       => __( 'Madoka Childcare', 'madoka-childcare' ),
			'description' => __( 'Sections for a childcare centre: a hand-torn photo frame, torn band edges, organic blob photographs with white label tabs, stripe-per-line headings and a care day set as time blobs.', 'madoka-childcare' ),
		)
	);
}
add_action( 'init', 'madoka_childcare_pattern_categories' );

/**
 * Paragraph block.
 *
 * @param string $html  Inner HTML (already escaped).
 * @param string $class Classes.
 * @return string Block markup.
 */
function madoka_childcare_para( $html, $class = '' ) {
	$attr = '' === $class ? '' : ' ' . wp_json_encode( array( 'className' => $class ) );
	$cls  = '' === $class ? '' : ' class="' . esc_attr( $class ) . '"';
	return '<!-- wp:paragraph' . $attr . ' -->' . "\n" . '<p' . $cls . '>' . $html . '</p>' . "\n" . '<!-- /wp:paragraph -->';
}

/**
 * Plain text paragraph from a string key.
 *
 * @param string $key   i18n key.
 * @param string $class Classes.
 * @return string Block markup.
 */
function madoka_childcare_text( $key, $class = '' ) {
	return madoka_childcare_para( esc_html( madoka_childcare_t( $key ) ), $class );
}

/**
 * Dotted text link (text + arrow).
 *
 * @param string $text  Link text.
 * @param string $href  Target.
 * @param string $class Extra classes.
 * @return string Block markup.
 */
function madoka_childcare_link( $text, $href, $class = '' ) {
	$class = trim( 'mc-link ' . $class );
	return madoka_childcare_para( '<a href="' . esc_url( $href ) . '">' . esc_html( $text ) . '</a>', $class );
}

/**
 * Section heading with one stripe per line ("\n" in the text becomes a line break).
 *
 * @param string $text   Heading text.
 * @param int    $level  1-6.
 * @param string $class  Extra classes (mc-stripe--white, sp-reveal ...).
 * @return string Block markup.
 */
function madoka_childcare_heading( $text, $level = 2, $class = '' ) {
	$class = trim( 'mc-stripe ' . $class );
	$html  = implode( '<br>', array_map( 'esc_html', explode( "\n", $text ) ) );
	return '<!-- wp:heading ' . wp_json_encode( array( 'level' => $level, 'className' => $class ) ) . ' -->' . "\n" . '<h' . $level . ' class="wp-block-heading ' . esc_attr( $class ) . '"><mark class="mc-stripe__in">' . $html . '</mark></h' . $level . '>' . "\n" . '<!-- /wp:heading -->';
}

/**
 * Photograph block.
 *
 * @param string $file  File name in assets/images (p01.webp).
 * @param string $alt   Alt text.
 * @param string $class Classes for the figure.
 * @return string Block markup.
 */
function madoka_childcare_photo( $file, $alt, $class = '' ) {
	$url = esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
	return '<!-- wp:image ' . wp_json_encode( array( 'sizeSlug' => 'full', 'linkDestination' => 'none', 'className' => $class ) ) . ' -->' . "\n" . '<figure class="wp-block-image size-full ' . esc_attr( $class ) . '"><img src="' . $url . '" alt="' . esc_attr( $alt ) . '"/></figure>' . "\n" . '<!-- /wp:image -->';
}

/**
 * Round "Book a visit" badge.
 *
 * @param string $class Modifier classes (mc-badge--fixed, mc-badge--inline, mc-badge--static).
 * @return string Block markup.
 */
function madoka_childcare_badge( $class ) {
	return madoka_childcare_para( '<a href="/visit/"><span class="mc-badge__t">' . wp_kses( madoka_childcare_t( 'book' ), array( 'br' => array() ) ) . '</span></a>', 'mc-badge ' . $class );
}

/**
 * Group block wrapper.
 *
 * @param string $inner Inner block markup.
 * @param string $class Classes.
 * @param string $tag   HTML tag.
 * @param string $extra Extra block attributes (JSON object body without braces) such as '"align":"full"'.
 * @return string Block markup.
 */
function madoka_childcare_group( $inner, $class = '', $tag = 'div', $extra = '' ) {
	$align = false !== strpos( $extra, '"full"' ) ? ' alignfull' : '';
	$attrs = '{' . ( 'div' === $tag ? '' : '"tagName":"' . $tag . '",' ) . ( '' === $extra ? '' : $extra . ',' ) . '"className":"' . esc_attr( $class ) . '","layout":{"type":"default"}}';
	return '<!-- wp:group ' . $attrs . ' -->' . "\n" . '<' . $tag . ' class="wp-block-group' . $align . ' ' . esc_attr( $class ) . '">' . $inner . '</' . $tag . '>' . "\n" . '<!-- /wp:group -->';
}
