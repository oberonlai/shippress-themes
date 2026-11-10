<?php
/**
 * Kamotsu Academy: the theme's own words (header button, footer lines, template headings, the sample patterns) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content.
 *
 * @package kamotsu-academy
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
function kamotsu_academy_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function kamotsu_academy_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( kamotsu_academy_lang(), 'en' ) ) as $lang ) {
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
function kamotsu_academy_language_attributes( $output ) {
	$lang = kamotsu_academy_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'kamotsu_academy_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function kamotsu_academy_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', kamotsu_academy_t( $key ) ) ) );
}

/**
 * A theme string, escaped for HTML text.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped text.
 */
function kamotsu_academy_e( $key ) {
	return esc_html( kamotsu_academy_t( $key ) );
}

/**
 * A theme string, escaped for an HTML attribute.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped text.
 */
function kamotsu_academy_a( $key ) {
	return esc_attr( kamotsu_academy_t( $key ) );
}

/**
 * URL of a photograph in assets/images/.
 *
 * @param string $file File name without the folder.
 * @return string Escaped URL.
 */
function kamotsu_academy_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
