<?php
/**
 * Ashiato Hotel: the theme's own words (patterns and template headings) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks follow it.
 *
 * @package ashiato-hotel
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
function ashiato_hotel_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function ashiato_hotel_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( ashiato_hotel_lang(), 'en' ) ) as $lang ) {
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
function ashiato_hotel_language_attributes( $output ) {
	$lang = ashiato_hotel_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'ashiato_hotel_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br class="ah-br"> (hidden on narrow screens).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function ashiato_hotel_lines( $key ) {
	return implode( ' <br class="ah-br">', array_map( 'esc_html', explode( '|', ashiato_hotel_t( $key ) ) ) );
}

/**
 * A theme string for a PHP attribute (escaped for HTML attributes).
 *
 * @param string $key String key.
 * @return string
 */
function ashiato_hotel_a( $key ) {
	return esc_attr( ashiato_hotel_t( $key ) );
}

/**
 * URL of a file in assets/images.
 *
 * @param string $file File name.
 * @return string
 */
function ashiato_hotel_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * The paw print (four toes and a heel pad), drawn for this theme. Decorative, so hidden from assistive technology.
 *
 * @param string $name  Icon name (only 'paw').
 * @param string $class CSS classes for the svg.
 * @return string SVG markup.
 */
function ashiato_hotel_icon( $name = 'paw', $class = 'ah-paw' ) {
	if ( 'paw' !== $name ) {
		return '';
	}
	return '<svg class="' . esc_attr( $class ) . '" viewBox="0 0 64 64" aria-hidden="true" focusable="false"><g fill="currentColor"><ellipse cx="13" cy="27" rx="6" ry="8" transform="rotate(-22 13 27)"/><ellipse cx="25.5" cy="15" rx="6.5" ry="9" transform="rotate(-8 25.5 15)"/><ellipse cx="40.5" cy="15" rx="6.5" ry="9" transform="rotate(8 40.5 15)"/><ellipse cx="53" cy="27" rx="6" ry="8" transform="rotate(22 53 27)"/><path d="M32 29c-9 0-17 8-17 17 0 6 5 9.500 10 9.500 3 0 4.500-1.500 7-1.500s4 1.500 7 1.500c5 0 10-3.500 10-9.500 0-9-8-17-17-17z"/></g></svg>';
}
