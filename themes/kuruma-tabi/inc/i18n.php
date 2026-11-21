<?php
/**
 * Kuruma Tabi: the theme's own words (patterns and template headings) in the language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks follow it.
 *
 * @package kuruma-tabi
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
function kuruma_tabi_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function kuruma_tabi_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( kuruma_tabi_lang(), 'en' ) ) as $lang ) {
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
function kuruma_tabi_language_attributes( $output ) {
	$lang = kuruma_tabi_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'kuruma_tabi_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function kuruma_tabi_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', kuruma_tabi_t( $key ) ) ) );
}

/**
 * A theme string for a PHP attribute (escaped for HTML attributes).
 *
 * @param string $key String key.
 * @return string
 */
function kuruma_tabi_a( $key ) {
	return esc_attr( kuruma_tabi_t( $key ) );
}

/**
 * URL of a file in assets/images.
 *
 * @param string $file File name.
 * @return string
 */
function kuruma_tabi_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Inline line drawing (stroke only, currentColor): the wheel emblem and the three seam drawings.
 *
 * @param string $name wheel, binoculars, map or camera.
 * @return string SVG markup.
 */
function kuruma_tabi_icon( $name ) {
	$a = ' fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"';
	switch ( $name ) {
		case 'wheel':
			$spokes = '';
			foreach ( array( -90, -18, 54, 126, 198 ) as $deg ) {
				$r       = deg2rad( $deg );
				$spokes .= sprintf( 'M15 14L%.2f %.2f', 15 + 11.25 * cos( $r ), 14 + 11.25 * sin( $r ) );
			}
			return '<svg class="kt-ic kt-ic--wheel" viewBox="0 0 30 30" width="30" height="30"' . $a . '><circle cx="15" cy="14" r="12"/><circle cx="15" cy="14" r="2.4"/><path d="' . $spokes . '"/><path d="M2 28.5h26"/></svg>';
		case 'binoculars':
			return '<svg class="kt-ic" viewBox="0 0 150 190" width="150" height="190"' . $a . '><circle cx="40" cy="130" r="36"/><circle cx="40" cy="130" r="24"/><circle cx="110" cy="130" r="36"/><circle cx="110" cy="130" r="24"/><path d="M26 28h28v56M26 28v56M96 28h28v56M96 28v56M26 84L8 118M54 84l16 34M96 84l-16 34M124 84l18 34M58 62h34M58 74h34M40 166c0 22 70 22 70 0"/></svg>';
		case 'map':
			return '<svg class="kt-ic" viewBox="0 0 180 150" width="180" height="150"' . $a . '><path d="M10 30l55-10 55 14 50-12v96l-50 12-55-14-55 12z"/><path d="M65 20v96M120 34v96"/><path d="M26 100c26-30 52 4 74-28s40-12 56-32"/><circle cx="156" cy="40" r="4"/></svg>';
		case 'camera':
			return '<svg class="kt-ic" viewBox="0 0 160 220" width="160" height="220"' . $a . '><rect x="18" y="108" width="124" height="82" rx="8"/><circle cx="80" cy="150" r="26"/><circle cx="80" cy="150" r="14"/><path d="M52 108l8-14h40l8 14M116 122h14M32 108C18 66 46 24 60 10M128 108c14-42-14-84-28-98M60 10h40"/></svg>';
	}
	return '';
}
