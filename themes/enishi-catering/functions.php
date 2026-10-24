<?php
/**
 * Enishi Catering — functions and definitions.
 *
 * @package enishi-catering
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/demo-import.php';
require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/editor-lang.php';

define( 'ENISHI_CATERING_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports + editor styles. WooCommerce support is declared either way; without the plugin it does nothing.
 */
function enishi_catering_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/sp-scroll.css' );
}
add_action( 'after_setup_theme', 'enishi_catering_setup' );

/**
 * Front-end styles and the scroll-effects script. sp-scroll.js loads in the head, not deferred, so the hidden state
 * is set before the first paint.
 */
function enishi_catering_enqueue() {
	wp_enqueue_style( 'enishi-catering-style', get_stylesheet_uri(), array(), ENISHI_CATERING_VERSION );
	wp_enqueue_style( 'enishi-catering-scroll', get_theme_file_uri( 'assets/sp-scroll.css' ), array( 'enishi-catering-style' ), ENISHI_CATERING_VERSION );
	wp_enqueue_script( 'enishi-catering-scroll', get_theme_file_uri( 'assets/sp-scroll.js' ), array(), ENISHI_CATERING_VERSION, false );
}
add_action( 'wp_enqueue_scripts', 'enishi_catering_enqueue' );

/**
 * Pattern category.
 */
function enishi_catering_pattern_categories() {
	register_block_pattern_category(
		'enishi-catering',
		array(
			'label'       => __( 'Enishi Catering', 'enishi-catering' ),
			'description' => __( 'Sections for a catering company: a full-bleed photo hero with an info bar, hairline STEP boxes joined by diagonal lines, vertical-caps course rows with wide photographs, circular portraits and a price list.', 'enishi-catering' ),
		)
	);
}
add_action( 'init', 'enishi_catering_pattern_categories' );

/**
 * Block-markup helpers used by the sample patterns.
 */

/**
 * Paragraph block.
 *
 * @param string $html  Inner HTML (already escaped).
 * @param string $class Classes.
 * @return string Block markup.
 */
function enishi_catering_para( $html, $class = '' ) {
	$attr = '' === $class ? '' : ' ' . wp_json_encode( array( 'className' => $class ) );
	$cls  = '' === $class ? '' : ' class="' . esc_attr( $class ) . '"';
	return '<!-- wp:paragraph' . $attr . ' -->' . "\n" . '<p' . $cls . '>' . $html . '</p>' . "\n" . '<!-- /wp:paragraph -->';
}

/**
 * Heading block.
 *
 * @param string $text  Heading text (plain; "\n" becomes a line break).
 * @param int    $level 1-6.
 * @param string $class Classes.
 * @return string Block markup.
 */
function enishi_catering_heading( $text, $level = 2, $class = '' ) {
	$html = implode( '<br>', array_map( 'esc_html', explode( "\n", $text ) ) );
	$attr = array( 'level' => $level );
	if ( '' !== $class ) {
		$attr['className'] = $class;
	}
	return '<!-- wp:heading ' . wp_json_encode( $attr ) . ' -->' . "\n" . '<h' . $level . ' class="wp-block-heading' . ( '' === $class ? '' : ' ' . esc_attr( $class ) ) . '">' . $html . '</h' . $level . '>' . "\n" . '<!-- /wp:heading -->';
}

/**
 * Photograph block.
 *
 * @param string $file  File name in assets/images.
 * @param string $alt   Alt text.
 * @param string $class Classes for the figure.
 * @return string Block markup.
 */
function enishi_catering_photo( $file, $alt, $class = '' ) {
	$url = esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
	return '<!-- wp:image ' . wp_json_encode( array( 'sizeSlug' => 'full', 'linkDestination' => 'none', 'className' => $class ) ) . ' -->' . "\n" . '<figure class="wp-block-image size-full ' . esc_attr( $class ) . '"><img src="' . $url . '" alt="' . esc_attr( $alt ) . '"/></figure>' . "\n" . '<!-- /wp:image -->';
}

/**
 * Group block wrapper.
 *
 * @param string $inner Inner block markup.
 * @param string $class Classes.
 * @param string $tag   HTML tag.
 * @param bool   $full  Full width.
 * @return string Block markup.
 */
function enishi_catering_group( $inner, $class = '', $tag = 'div', $full = false ) {
	$attrs = array();
	if ( 'div' !== $tag ) {
		$attrs['tagName'] = $tag;
	}
	if ( $full ) {
		$attrs['align'] = 'full';
	}
	$attrs['className'] = $class;
	$attrs['layout']    = array( 'type' => 'default' );
	return '<!-- wp:group ' . wp_json_encode( $attrs ) . ' -->' . "\n" . '<' . $tag . ' class="wp-block-group' . ( $full ? ' alignfull' : '' ) . ' ' . esc_attr( $class ) . '">' . $inner . '</' . $tag . '>' . "\n" . '<!-- /wp:group -->';
}

/**
 * Outline or filled button as a paragraph link (arrow added in CSS).
 *
 * @param string $text  Link text.
 * @param string $href  Target.
 * @param string $class Extra classes (enc-btn--fill, enc-btn--pill).
 * @return string Block markup.
 */
function enishi_catering_btn( $text, $href, $class = '' ) {
	return enishi_catering_para( '<a href="' . esc_url( $href ) . '">' . esc_html( $text ) . '</a>', trim( 'enc-btn ' . $class ) );
}
