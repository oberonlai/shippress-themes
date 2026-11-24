<?php
/**
 * Yuka Tiles: the theme's own words (patterns and template headings) in the language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks follow it.
 *
 * @package yuka-tiles
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
function yuka_tiles_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * Native name of one content language, read from that language's own string table.
 *
 * Chinese and Japanese endonyms stay in inc/i18n/zh-TW.php and inc/i18n/ja.php.
 *
 * @param string $code Language code, such as zh-TW or ja.
 * @return string
 */
function yuka_tiles_endonym( $code ) {
	static $cache = array();
	if ( isset( $cache[ $code ] ) ) {
		return $cache[ $code ];
	}
	$cache[ $code ] = $code;
	if ( preg_match( '/^[a-z]{2}(?:-[A-Z]{2})?$/', $code ) ) {
		$file  = __DIR__ . '/i18n/' . $code . '.php';
		$table = is_readable( $file ) ? (array) include $file : array();
		if ( isset( $table['endonym'] ) ) {
			$cache[ $code ] = (string) $table['endonym'];
		}
	}
	return $cache[ $code ];
}

/**
 * Link to the home page in one content language (WPML or Polylang permalink when present, ?lang= otherwise).
 *
 * @param string $code Language code.
 * @return string
 */
function yuka_tiles_url( $code ) {
	if ( function_exists( 'pll_the_languages' ) || defined( 'ICL_SITEPRESS_VERSION' ) ) {
		return (string) apply_filters( 'wpml_permalink', home_url( '/' ), $code );
	}
	return add_query_arg( 'lang', $code, home_url( '/' ) );
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function yuka_tiles_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( yuka_tiles_lang(), 'en' ) ) as $lang ) {
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
function yuka_tiles_language_attributes( $output ) {
	$lang = yuka_tiles_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'yuka_tiles_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function yuka_tiles_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', yuka_tiles_t( $key ) ) ) );
}

/**
 * A theme string for a PHP attribute (escaped for HTML attributes).
 *
 * @param string $key String key.
 * @return string
 */
function yuka_tiles_a( $key ) {
	return esc_attr( yuka_tiles_t( $key ) );
}

/**
 * URL of a file in assets/images.
 *
 * @param string $file File name.
 * @return string
 */
function yuka_tiles_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
