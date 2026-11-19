<?php
/**
 * Shitsurae Interiors: the theme's own words (patterns and template headings) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks follow it.
 *
 * @package shitsurae-interiors
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
function shitsurae_interiors_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function shitsurae_interiors_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( shitsurae_interiors_lang(), 'en' ) ) as $lang ) {
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
function shitsurae_interiors_language_attributes( $output ) {
	$lang = shitsurae_interiors_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'shitsurae_interiors_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br> (hidden on narrow screens).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function shitsurae_interiors_lines( $key ) {
	return implode( ' <br>', array_map( 'esc_html', explode( '|', shitsurae_interiors_t( $key ) ) ) );
}

/**
 * A theme string for a PHP attribute (escaped for HTML attributes).
 *
 * @param string $key String key.
 * @return string
 */
function shitsurae_interiors_a( $key ) {
	return esc_attr( shitsurae_interiors_t( $key ) );
}

/**
 * URL of a file in assets/images.
 *
 * @param string $file File name.
 * @return string
 */
function shitsurae_interiors_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Small decorative icons drawn for this theme (hidden from assistive technology).
 *
 * @param string $name  'arrow' (solid square arrow box), 'arrow-s' (small box), 'tri' (solid triangle) or 'ring'.
 * @param string $class CSS classes for the svg.
 * @return string SVG markup.
 */
function shitsurae_interiors_icon( $name = 'arrow', $class = 'si-arrow' ) {
	$c = esc_attr( $class );
	if ( 'arrow' === $name ) {
		return '<svg class="' . $c . '" viewBox="0 0 28 18" width="28" height="18" aria-hidden="true" focusable="false"><rect width="28" height="18" fill="currentColor"/><path d="M7 9h13m-4-4 4 4-4 4" fill="none" stroke="#fff" stroke-width="1.500"/></svg>';
	}
	if ( 'arrow-s' === $name ) {
		return '<svg class="' . $c . '" viewBox="0 0 28 18" width="22" height="14" aria-hidden="true" focusable="false"><rect width="28" height="18" fill="currentColor"/><path d="M7 9h13m-4-4 4 4-4 4" fill="none" stroke="#fff" stroke-width="1.500"/></svg>';
	}
	if ( 'tri' === $name ) {
		return '<svg class="' . $c . '" viewBox="0 0 8 8" width="8" height="8" aria-hidden="true" focusable="false"><path d="M0 0v8h8z" fill="currentColor"/></svg>';
	}
	if ( 'ring' === $name ) {
		return '<svg class="' . $c . '" viewBox="0 0 16 16" width="16" height="16" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="6.500" fill="none" stroke="#D9D9D9" stroke-width="1.500"/><circle class="si-ring__bar" cx="8" cy="8" r="6.500" fill="none" stroke="#D69090" stroke-width="1.500" pathLength="100" stroke-dasharray="100" transform="rotate(-90 8 8)"/></svg>';
	}
	return '';
}
