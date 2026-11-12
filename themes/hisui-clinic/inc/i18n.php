<?php
/**
 * Hisui Clinic: the theme's own words (header, footer, template headings, the sample patterns) in the language of
 * the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang()). The words
 * live in inc/i18n/<lang>.php; anything missing falls back to English.
 *
 * @package hisui-clinic
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
function hisui_clinic_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function hisui_clinic_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( hisui_clinic_lang(), 'en' ) ) as $lang ) {
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
function hisui_clinic_language_attributes( $output ) {
	$lang = hisui_clinic_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'hisui_clinic_language_attributes' );

/**
 * URL of a theme photo (assets/images/<name>.webp).
 *
 * @param string $name File name without extension.
 * @return string
 */
function hisui_clinic_img( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . strtolower( $name ) . '.webp' ) );
}

/**
 * Echo one theme string, escaped for HTML text.
 *
 * @param string $key String key.
 */
function hisui_clinic_e( $key ) {
	echo esc_html( hisui_clinic_t( $key ) );
}

/**
 * Echo one theme string, escaped for an HTML attribute.
 *
 * @param string $key String key.
 */
function hisui_clinic_a( $key ) {
	echo esc_attr( hisui_clinic_t( $key ) );
}

/**
 * Line icons for the department band medallion and the audience legend (inline SVG, static).
 *
 * @param string $name arrow (outline circle with an arrow, 28px), droplet, gland, arc, calendar, receipt, person or steth.
 * @return string SVG markup.
 */
function hisui_clinic_icon( $name ) {
	$p = array(
		'arrow'   => '<svg class="hc-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="28" height="28" aria-hidden="true" focusable="false"><circle cx="14" cy="14" r="13.5" fill="none" stroke="currentColor"/><path d="M9.5 14h8.5M14.5 10l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'droplet' => '<svg class="hc-icon hc-icon--droplet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="36" height="36" aria-hidden="true" focusable="false"><path d="M18 5c5 6.5 8.5 10.6 8.5 15a8.5 8.5 0 0 1-17 0C9.5 15.6 13 11.5 18 5z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M12.5 22.500c2.5 1.8 5 1.8 7.5 0s3.5-1.2 4 0" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>',
		'gland'    => '<svg class="hc-icon hc-icon--gland" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="36" height="36" aria-hidden="true" focusable="false"><path d="M18 11v14M18 15c-2-4-5-6-8-5-2.500 1-2.500 6 0 9s6 3 8 1M18 15c2-4 5-6 8-5 2.500 1 2.500 6 0 9s-6 3-8 1" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'arc'      => '<svg class="hc-icon hc-icon--arc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="36" height="36" aria-hidden="true" focusable="false"><path d="M6 27a12 12 0 0 1 24 0" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M11 27a7 7 0 0 1 14 0" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="18" cy="27" r="1.600" fill="currentColor"/></svg>',
		'calendar' => '<svg class="hc-icon hc-icon--calendar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="36" height="36" aria-hidden="true" focusable="false"><rect x="7" y="9" width="22" height="20" rx="2" fill="none" stroke="currentColor" stroke-width="1.5"/><path d="M7 15h22M13 6v5M23 6v5M13 21h4M19 21h4" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>',
		'receipt'  => '<svg class="hc-icon hc-icon--receipt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="36" height="36" aria-hidden="true" focusable="false"><path d="M9 6h18v24l-3-2-3 2-3-2-3 2-3-2-3 2z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M14 13h8M14 18h8M14 23h5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>',
		'person'  => '<svg class="hc-icon hc-icon--person" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" aria-hidden="true" focusable="false"><circle cx="8" cy="5" r="3" fill="currentColor"/><path d="M2.5 14.500c0-3.3 2.5-5 5.5-5s5.5 1.7 5.5 5z" fill="currentColor"/></svg>',
		'steth'   => '<svg class="hc-icon hc-icon--steth" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" aria-hidden="true" focusable="false"><path d="M3.5 2v4a3 3 0 0 0 6 0V2M6.5 9v1.500a3 3 0 0 0 6 0" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/><circle cx="12.5" cy="7.5" r="1.7" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>',
	);
	return isset( $p[ $name ] ) ? $p[ $name ] : '';
}
