<?php
/**
 * Enogu Supply: the theme's own words (patterns and template headings) in the language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks follow it.
 *
 * @package enogu-supply
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
function enogu_supply_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function enogu_supply_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( enogu_supply_lang(), 'en' ) ) as $lang ) {
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
function enogu_supply_language_attributes( $output ) {
	$lang = enogu_supply_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'enogu_supply_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function enogu_supply_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', enogu_supply_t( $key ) ) ) );
}

/**
 * A theme string for a PHP attribute (escaped for HTML attributes).
 *
 * @param string $key String key.
 * @return string
 */
function enogu_supply_a( $key ) {
	return esc_attr( enogu_supply_t( $key ) );
}

/**
 * URL of a file in assets/images.
 *
 * @param string $file File name.
 * @return string
 */
function enogu_supply_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * The six category line icons (own drawings, 1.25 px stroke, decorative so hidden from assistive technology).
 *
 * @param string $name  paper, pigment, brush, tool, mill or price.
 * @param string $class CSS classes for the svg.
 * @return string SVG markup.
 */
function enogu_supply_icon( $name, $class = 'en-icon' ) {
	$paths = array(
		'paper'   => '<path d="M26 14h34l12 12v56H26z"/><path d="M60 14v12h12"/><path d="M34 44h30M34 54h30M34 64h22"/><path d="M22 20c-4 8 4 14 0 22s4 14 0 22 4 14 0 22" opacity=".45"/>',
		'pigment' => '<path d="M34 22h28v10H34z"/><path d="M32 32h32c4 6 6 12 6 20v24c0 4-3 8-8 8H34c-5 0-8-4-8-8V52c0-8 2-14 6-20z"/><path d="M26 58c8-5 14 5 22 0s14-5 22 0"/><path d="M40 16h16"/>',
		'brush'   => '<path d="M72 14 40 58"/><path d="M76 18 44 62"/><path d="M72 14l4 4"/><path d="M40 58c-8 2-12 8-12 16-2 6-6 8-10 10 10 2 22 0 28-8 4-5 3-12-6-18z"/>',
		'tool'    => '<path d="M20 78 50 46c6-6 14-6 22-4-2 8-2 16-8 22L34 90z" transform="translate(0 -6)"/><path d="M62 22l12-8 8 8-8 12"/><path d="M20 80l10 10" opacity=".45"/><path d="M44 48 70 74"/>',
		'mill'    => '<path d="M18 36h60v34H18z"/><path d="M18 44h60M18 52h60" opacity=".45"/><path d="M48 30v46M18 53h60" /><path d="M48 24c-6-8-14-4-12 2s10 6 12 4c2 2 10 2 12-4s-6-10-12-2z"/>',
		'price'   => '<path d="M14 50 50 14h30v30L44 80z"/><circle cx="64" cy="30" r="5"/><path d="M34 62 56 40" opacity=".45"/>',
	);
	if ( ! isset( $paths[ $name ] ) ) {
		return '';
	}
	return '<svg class="' . esc_attr( $class ) . '" viewBox="0 0 96 96" width="96" height="96" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">' . $paths[ $name ] . '</svg>';
}
