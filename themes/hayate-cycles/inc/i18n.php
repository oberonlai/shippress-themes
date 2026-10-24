<?php
/**
 * Hayate Cycles: the theme's own words (header button, footer lines, template headings, the sample patterns) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks and the vertical labels follow it.
 *
 * @package hayate-cycles
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
function hayate_cycles_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function hayate_cycles_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( hayate_cycles_lang(), 'en' ) ) as $lang ) {
		if ( ! isset( $tables[ $lang ] ) ) {
			$file             = __DIR__ . '/i18n/' . $lang . '.php';
			$tables[ $lang ] = is_readable( $file ) ? (array) include $file : array();
			// ja and zh-TW inner copy lives in a ja/ or zh-TW/ folder so the theme check allows CJK there.
			$inner = __DIR__ . '/i18n/' . $lang . '/inner.php';
			if ( ! is_readable( $inner ) ) {
				$inner = __DIR__ . '/i18n/' . $lang . '-inner.php';
			}
			if ( is_readable( $inner ) ) {
				$tables[ $lang ] += (array) include $inner;
			}
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
function hayate_cycles_language_attributes( $output ) {
	$lang = hayate_cycles_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'hayate_cycles_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function hayate_cycles_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', hayate_cycles_t( $key ) ) ) );
}
