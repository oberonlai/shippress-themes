<?php
/**
 * Azuke Finance: the theme's own words (header, footer, the sample patterns) in the language of the sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang()). The words
 * live in inc/i18n/<lang>.php; anything missing falls back to English.
 *
 * @package azuke-finance
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
function azuke_finance_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function azuke_finance_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( azuke_finance_lang(), 'en' ) ) as $lang ) {
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
function azuke_finance_language_attributes( $output ) {
	$lang = azuke_finance_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_match( '/lang="[^"]*"/', $output ) ? preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output ) : $output;
}
add_filter( 'language_attributes', 'azuke_finance_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key.
 * @return string Escaped HTML.
 */
function azuke_finance_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', azuke_finance_t( $key ) ) ) );
}

/**
 * A theme string where *word* marks the one accent word: escaped, with the word wrapped in <span class="az-accent">.
 *
 * @param string $key String key.
 * @return string Escaped HTML.
 */
function azuke_finance_accent( $key ) {
	$parts = array_map( 'esc_html', explode( '|', azuke_finance_t( $key ) ) );
	$out   = implode( '<br>', $parts );
	return preg_replace( '/\*([^*]+)\*/', '<span class="az-accent">$1</span>', $out );
}
