<?php
/**
 * Suji Clinic: the theme's own words (header box, nav strip labels, footer lines, the sample patterns) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang()). The words
 * live in inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the
 * same html lang as their content, so the font stacks follow it.
 *
 * @package suji-clinic
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
function suji_clinic_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function suji_clinic_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( suji_clinic_lang(), 'en' ) ) as $lang ) {
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
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key.
 * @return string Escaped HTML.
 */
function suji_clinic_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', suji_clinic_t( $key ) ) ) );
}

/**
 * URL of a theme photo.
 *
 * @param string $file File name in assets/images/.
 * @return string
 */
function suji_clinic_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Site page link by slug (relative, so it works behind any host).
 *
 * @param string $slug Page slug ('' for home).
 * @return string
 */
function suji_clinic_url( $slug = '' ) {
	return esc_url( home_url( '' === $slug ? '/' : '/' . $slug . '/' ) );
}

/**
 * <html lang>: on a site still set to English whose sample content is in another language, the content's language.
 *
 * @param string $output The lang/dir attributes.
 * @return string
 */
function suji_clinic_language_attributes( $output ) {
	$lang = suji_clinic_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'suji_clinic_language_attributes' );
