<?php
/**
 * Soko Hotel: the theme's own words (patterns and template headings) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks follow it.
 *
 * @package soko-hotel
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Language of the sample content: 'en', 'zh-TW', 'ja', 'fr' or 'de'.
 *
 * @return string
 */
function soko_hotel_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function soko_hotel_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( soko_hotel_lang(), 'en' ) ) as $lang ) {
		if ( ! isset( $tables[ $lang ] ) ) {
			$file             = __DIR__ . '/i18n/' . $lang . '.php';
			$tables[ $lang ] = is_readable( $file ) ? (array) include $file : array();
		}
		if ( isset( $tables[ $lang ][ $key ] ) ) {
			return (string) $tables[ $lang ][ $key ];
		}
	}
	return '';
}

/**
 * <html lang>: on a site still set to English whose sample content is in another language, the content's language.
 *
 * @param string $output The lang/dir attributes.
 * @return string
 */
function soko_hotel_language_attributes( $output ) {
	$lang = soko_hotel_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'soko_hotel_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br class="sk-br"> (hidden on narrow screens).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function soko_hotel_lines( $key ) {
	return implode( ' <br class="sk-br">', array_map( 'esc_html', explode( '|', soko_hotel_t( $key ) ) ) );
}

/**
 * A theme string for a PHP attribute (escaped for HTML attributes).
 *
 * @param string $key String key.
 * @return string
 */
function soko_hotel_a( $key ) {
	return esc_attr( soko_hotel_t( $key ) );
}

/**
 * URL of a file in assets/images.
 *
 * @param string $file File name.
 * @return string
 */
function soko_hotel_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * The bay stamp (an arched bay with a stencil seven), drawn for this theme: 1px line, no fill. Decorative, so hidden
 * from assistive technology.
 *
 * @param string $name  Icon name (only 'stamp').
 * @param string $class CSS classes for the svg.
 * @return string SVG markup.
 */
function soko_hotel_icon( $name = 'stamp', $class = 'sk-stamp' ) {
	if ( 'stamp' !== $name ) {
		return '';
	}
	return '<svg class="' . esc_attr( $class ) . '" viewBox="0 0 95 135" aria-hidden="true" focusable="false"><g fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="square"><path d="M8.500 130.500V48a39 39 0 0 1 78 0v82.500z"/><path d="M18.500 130.500V50a29 29 0 0 1 58 0v80.500"/><path d="M31 58h4M39 58h4M31 66V58M35 66V58M43 66V58"/><path d="M31 82h33l-20 36"/><path d="M40 98h8"/><path d="M4 130.500h87"/></g></svg>';
}
