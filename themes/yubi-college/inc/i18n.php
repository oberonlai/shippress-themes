<?php
/**
 * Yubi College: the theme's own words (patterns and template headings) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks follow it.
 *
 * @package yubi-college
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
function yubi_college_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function yubi_college_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( yubi_college_lang(), 'en' ) ) as $lang ) {
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
function yubi_college_language_attributes( $output ) {
	$lang = yubi_college_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'yubi_college_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br> (hidden on narrow screens).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function yubi_college_lines( $key ) {
	return implode( ' <br>', array_map( 'esc_html', explode( '|', yubi_college_t( $key ) ) ) );
}

/**
 * A theme string for a PHP attribute (escaped for HTML attributes).
 *
 * @param string $key String key.
 * @return string
 */
function yubi_college_a( $key ) {
	return esc_attr( yubi_college_t( $key ) );
}

/**
 * URL of a file in assets/images.
 *
 * @param string $file File name.
 * @return string
 */
function yubi_college_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
