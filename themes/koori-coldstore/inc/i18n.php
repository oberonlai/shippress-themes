<?php
/**
 * Koori Cold Stores: the theme's own words (header button, footer, patterns) in the language of the sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang()).
 * The words live in inc/i18n/<lang>.php; anything missing falls back to English.
 *
 * @package koori-coldstore
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
function koori_coldstore_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function koori_coldstore_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( koori_coldstore_lang(), 'en' ) ) as $lang ) {
		if ( ! isset( $tables[ $lang ] ) ) {
			$file            = __DIR__ . '/i18n/' . $lang . '.php';
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
function koori_coldstore_language_attributes( $output ) {
	$lang = koori_coldstore_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'koori_coldstore_language_attributes' );

/**
 * A theme string as an escaped attribute value.
 *
 * @param string $key String key.
 * @return string
 */
function koori_coldstore_a( $key ) {
	return esc_attr( koori_coldstore_t( $key ) );
}

/**
 * URL of a theme image in assets/images/.
 *
 * @param string $file File name.
 * @return string
 */
function koori_coldstore_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Site URL of a path.
 *
 * @param string $path Path such as /work/.
 * @return string
 */
function koori_coldstore_url( $path ) {
	return esc_url( home_url( $path ) );
}

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key.
 * @return string Escaped HTML.
 */
function koori_coldstore_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', koori_coldstore_t( $key ) ) ) );
}
