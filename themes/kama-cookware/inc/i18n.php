<?php
/**
 * Kama Cookware: the theme's own words (header button, footer lines, template headings, the sample patterns) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks and the vertical labels follow it.
 *
 * @package kama-cookware
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
function kama_cookware_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function kama_cookware_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( kama_cookware_lang(), 'en' ) ) as $lang ) {
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
function kama_cookware_language_attributes( $output ) {
	$lang = kama_cookware_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'kama_cookware_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function kama_cookware_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', kama_cookware_t( $key ) ) ) );
}

/**
 * A theme string split into words, each wrapped in its own inline-block span (so each word can reveal on its own).
 * The spans are direct children of the heading; CJK strings without spaces are split per character.
 *
 * @param string $key   String key (see inc/i18n/en.php).
 * @param string $class Class for every span.
 * @return string Escaped HTML.
 */
function kama_cookware_words( $key, $class ) {
	$text  = kama_cookware_t( $key );
	$words = preg_match( '/\s/u', $text ) ? preg_split( '/\s+/u', trim( $text ) ) : preg_split( '//u', $text, -1, PREG_SPLIT_NO_EMPTY );
	$out   = array();
	foreach ( $words as $i => $word ) {
		$out[] = '<span class="' . esc_attr( $class ) . '" style="--i:' . (int) $i . '">' . esc_html( $word ) . '</span>';
	}
	return implode( ' ', $out );
}
