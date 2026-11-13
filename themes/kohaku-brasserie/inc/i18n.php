<?php
/**
 * Kohaku Brasserie: the theme's own words (header, footer, template headings, the sample patterns) in the language of
 * the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang()). The words
 * live in inc/i18n/<lang>.php; anything missing falls back to English.
 *
 * @package kohaku-brasserie
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
function kohaku_brasserie_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function kohaku_brasserie_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( kohaku_brasserie_lang(), 'en' ) ) as $lang ) {
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
function kohaku_brasserie_language_attributes( $output ) {
	$lang = kohaku_brasserie_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'kohaku_brasserie_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function kohaku_brasserie_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', kohaku_brasserie_t( $key ) ) ) );
}

/**
 * URL of a theme photo (assets/images/<name>.webp).
 *
 * @param string $name File name without extension.
 * @return string
 */
function kohaku_brasserie_img( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
}

/**
 * Echo one theme string, escaped for HTML text.
 *
 * @param string $key String key.
 */
function kohaku_brasserie_e( $key ) {
	echo esc_html( kohaku_brasserie_t( $key ) );
}

/**
 * Echo one theme string, escaped for an HTML attribute.
 *
 * @param string $key String key.
 */
function kohaku_brasserie_a( $key ) {
	echo esc_attr( kohaku_brasserie_t( $key ) );
}
