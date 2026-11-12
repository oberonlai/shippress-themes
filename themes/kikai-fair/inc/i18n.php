<?php
/**
 * Kikai Fair: the theme's own words in the language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang()).
 * The words live in inc/i18n/<lang>.php; anything missing falls back to English.
 *
 * @package kikai-fair
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
function kikai_fair_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function kikai_fair_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( kikai_fair_lang(), 'en' ) ) as $lang ) {
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
function kikai_fair_language_attributes( $output ) {
	$lang = kikai_fair_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'kikai_fair_language_attributes' );

/**
 * A theme string for an attribute (escaped).
 *
 * @param string $key String key.
 * @return string
 */
function kikai_fair_a( $key ) {
	return esc_attr( kikai_fair_t( $key ) );
}

/**
 * Theme image URL.
 *
 * @param string $file File under assets/images/.
 * @return string
 */
function kikai_fair_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Theme decoration URL (SVG under assets/img/).
 *
 * @param string $file File under assets/img/.
 * @return string
 */
function kikai_fair_deco( $file ) {
	return esc_url( get_theme_file_uri( 'assets/img/' . $file ) );
}
