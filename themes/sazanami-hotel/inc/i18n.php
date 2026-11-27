<?php
/**
 * Sazanami Hotel: the theme's own words (patterns and template headings) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks follow it.
 *
 * @package sazanami-hotel
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
function sazanami_hotel_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function sazanami_hotel_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( sazanami_hotel_lang(), 'en' ) ) as $lang ) {
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
function sazanami_hotel_language_attributes( $output ) {
	$lang = sazanami_hotel_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'sazanami_hotel_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br class="sz-br"> (hidden on narrow screens).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function sazanami_hotel_lines( $key ) {
	return implode( ' <br class="sz-br">', array_map( 'esc_html', explode( '|', sazanami_hotel_t( $key ) ) ) );
}

/**
 * A theme string for a PHP attribute (escaped for HTML attributes).
 *
 * @param string $key String key.
 * @return string
 */
function sazanami_hotel_a( $key ) {
	return esc_attr( sazanami_hotel_t( $key ) );
}

/**
 * URL of a file in assets/images.
 *
 * @param string $file File name.
 * @return string
 */
function sazanami_hotel_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Small inline drawings made for this theme (decorative, hidden from assistive technology).
 *
 * @param string $name  'wave' (two stacked 1 px curves), 'calendar' or 'arrow' (outward corner arrow).
 * @param string $class CSS classes for the svg.
 * @return string SVG markup.
 */
function sazanami_hotel_icon( $name = 'wave', $class = 'sz-wave' ) {
	$a = 'class="' . esc_attr( $class ) . '" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1"';
	if ( 'wave' === $name ) {
		return '<svg ' . $a . ' viewBox="0 0 28 10" width="28" height="10"><path d="M0 3.500c3.500 0 3.500-2.500 7-2.500s3.500 2.500 7 2.500 3.500-2.500 7-2.500 3.500 2.500 7 2.500"/><path d="M0 8.500c3.500 0 3.500-2.500 7-2.500s3.500 2.500 7 2.500 3.500-2.500 7-2.500 3.500 2.500 7 2.500"/></svg>';
	}
	if ( 'calendar' === $name ) {
		return '<svg ' . $a . ' viewBox="0 0 16 16" width="16" height="16"><rect x="1.500" y="3" width="13" height="11.500"/><path d="M1.500 6.500h13M5 1.500v3M11 1.500v3"/></svg>';
	}
	if ( 'arrow' === $name ) {
		return '<svg ' . $a . ' viewBox="0 0 10 10" width="9" height="9"><path d="M2 8l6-6M3 2h5v5"/></svg>';
	}
	return '';
}
