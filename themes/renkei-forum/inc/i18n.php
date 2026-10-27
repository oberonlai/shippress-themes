<?php
/**
 * Renkei Forum: the theme's own words (header band, footer, patterns) in the language of the site's sample content.
 *
 * Strings are keyed by a hash of their English text (k… for text, a… for attributes); rf_t() also accepts the English
 * text itself. It returns the translation from inc/i18n/<lang>.php, or the key's English text when there is none.
 *
 * @package renkei-forum
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
function rf_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (the English text when there is no translation).
 *
 * @param string $en English text.
 * @return string
 */
function rf_t( $en ) {
	static $table = null;
	if ( null === $table ) {
		$file  = __DIR__ . '/i18n/' . rf_lang() . '.php';
		$table = is_readable( $file ) ? (array) include $file : array();
	}
	if ( isset( $table[ $en ] ) ) {
		return (string) $table[ $en ];
	}
	$hashed = 'k' . substr( md5( $en ), 0, 8 );
	return isset( $table[ $hashed ] ) ? (string) $table[ $hashed ] : $en;
}

/**
 * <html lang>: on a site still set to English whose sample content is in another language, the content's language.
 *
 * @param string $output The lang/dir attributes.
 * @return string
 */
function rf_language_attributes( $output ) {
	$lang = rf_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'rf_language_attributes' );
