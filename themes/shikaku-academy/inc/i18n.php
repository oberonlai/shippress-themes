<?php
/**
 * Shikaku Academy: the theme's own words in the language of the sample content (en, zh-TW, ja, fr, de).
 * Words live in inc/i18n/<lang>.php; anything missing falls back to English.
 *
 * @package shikaku-academy
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Language of the sample content.
 *
 * @return string
 */
function sa_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function sa_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( sa_lang(), 'en' ) ) as $lang ) {
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
 * <html lang> follows the sample content's language on a site still set to English.
 *
 * @param string $output The lang/dir attributes.
 * @return string
 */
function sa_language_attributes( $output ) {
	$lang = sa_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'sa_language_attributes' );

/**
 * A theme string with "|" as a forced line break (each part escaped, joined with <br class="sa-br">).
 *
 * @param string $key String key.
 * @return string Escaped HTML.
 */
function sa_lines( $key ) {
	return implode( ' <br class="sa-br">', array_map( 'esc_html', explode( '|', sa_t( $key ) ) ) );
}
