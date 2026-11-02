<?php
/**
 * Mikura Storage: the theme's own words (header, footer, dock and the sample patterns) in the language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang()). Strings are looked up by a
 * short hash of the English text in inc/i18n/<lang>.php; anything missing falls back to inc/i18n/en.php.
 * Sites whose language is not English get the same html lang as their content, so the font stacks, line heights and hyphenation follow it.
 *
 * @package mikura-storage
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
function mikura_storage_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php; a short hash of the English text).
 * @return string
 */
function mikura_storage_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( mikura_storage_lang(), 'en' ) ) as $lang ) {
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
function mikura_storage_language_attributes( $output ) {
	$lang = mikura_storage_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'mikura_storage_language_attributes' );
