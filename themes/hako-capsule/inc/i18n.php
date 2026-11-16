<?php
/**
 * Hako Capsule: the theme's own words (header slab, footer, patterns) in the language of the sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang()).
 * The words live in inc/i18n/<lang>.php; anything missing falls back to English.
 *
 * @package hako-capsule
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
function hako_capsule_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function hako_capsule_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( hako_capsule_lang(), 'en' ) ) as $lang ) {
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
function hako_capsule_language_attributes( $output ) {
	$lang = hako_capsule_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'hako_capsule_language_attributes' );

/**
 * A theme string as an escaped attribute value.
 *
 * @param string $key String key.
 * @return string
 */
function hako_capsule_a( $key ) {
	return esc_attr( hako_capsule_t( $key ) );
}

/**
 * URL of a theme image in assets/images/.
 *
 * @param string $file File name.
 * @return string
 */
function hako_capsule_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Site URL of a path.
 *
 * @param string $path Path such as /work/.
 * @return string
 */
function hako_capsule_url( $path ) {
	return esc_url( home_url( $path ) );
}

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key.
 * @return string Escaped HTML.
 */
function hako_capsule_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', hako_capsule_t( $key ) ) ) );
}

/**
 * Inline SVG line icon used by the header slab and the Tonight card (1px stroke, no fill).
 *
 * @param string $name Icon name: pod, tag.
 * @return string SVG markup (static, escaped by construction).
 */
function hako_capsule_icon( $name ) {
	$icons = array(
		'pod' => '<svg viewBox="0 0 32 32" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true"><rect x="3" y="8" width="26" height="16" rx="8"/><path d="M3 20h26M8 14h6"/></svg>',
		'tag' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true"><path d="M3 12 12 3h8v8l-9 9-8-8Z"/><circle cx="16" cy="8" r="1.5"/></svg>',
	);
	return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}
