<?php
/**
 * Yuzuriha Retreat: the theme's own words (patterns and template headings) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks follow it.
 *
 * @package yuzuriha-retreat
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
function yuzuriha_retreat_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function yuzuriha_retreat_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( yuzuriha_retreat_lang(), 'en' ) ) as $lang ) {
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
function yuzuriha_retreat_language_attributes( $output ) {
	$lang = yuzuriha_retreat_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'yuzuriha_retreat_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br> (hidden on narrow screens).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function yuzuriha_retreat_lines( $key ) {
	return implode( ' <br>', array_map( 'esc_html', explode( '|', yuzuriha_retreat_t( $key ) ) ) );
}

/**
 * A theme string for a PHP attribute (escaped for HTML attributes).
 *
 * @param string $key String key.
 * @return string
 */
function yuzuriha_retreat_a( $key ) {
	return esc_attr( yuzuriha_retreat_t( $key ) );
}

/**
 * URL of a file in assets/images.
 *
 * @param string $file File name.
 * @return string
 */
function yuzuriha_retreat_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Small decorative icons drawn for this theme (hidden from assistive technology).
 *
 * @param string $name  'chev' (14px chevron), 'circle' (24px outline circle with a chevron) or 'up' (arrow up).
 * @param string $class CSS classes for the svg.
 * @return string SVG markup.
 */
function yuzuriha_retreat_icon( $name = 'chev', $class = 'yr-chev' ) {
	$c = esc_attr( $class );
	if ( 'chev' === $name ) {
		return '<svg class="' . $c . '" viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false"><path d="M4.5 1.5 10 7l-5.500 5.500" fill="none" stroke="currentColor" stroke-width="1"/></svg>';
	}
	if ( 'circle' === $name ) {
		return '<svg class="' . $c . '" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="11.500" fill="#FFFFFF" stroke="#212227" stroke-width="1"/><path d="M10 8l4 4-4 4" fill="none" stroke="#212227" stroke-width="1"/></svg>';
	}
	if ( 'up' === $name ) {
		return '<svg class="' . $c . '" viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false"><path d="M6 10.500V1.500M2.500 5 6 1.500 9.500 5" fill="none" stroke="currentColor" stroke-width="1"/></svg>';
	}
	return '';
}

/**
 * Absolute URL of a path on this site.
 *
 * @param string $path Path such as '/calendar/'.
 * @return string
 */
function yuzuriha_retreat_url( $path = '/' ) {
	return esc_url( home_url( $path ) );
}
