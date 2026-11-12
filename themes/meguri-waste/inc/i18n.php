<?php
/**
 * Meguri Waste: the theme's own words (header, footer, template headings, the sample patterns) in the language of
 * the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang()). The words
 * live in inc/i18n/<lang>.php; anything missing falls back to English.
 *
 * @package meguri-waste
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
function meguri_waste_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function meguri_waste_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( meguri_waste_lang(), 'en' ) ) as $lang ) {
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
function meguri_waste_language_attributes( $output ) {
	$lang = meguri_waste_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'meguri_waste_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function meguri_waste_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', meguri_waste_t( $key ) ) ) );
}

/**
 * URL of a theme photo (assets/images/<name>.webp).
 *
 * @param string $name File name without extension.
 * @return string
 */
function meguri_waste_img( $name ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $name . '.webp' ) );
}

/**
 * Echo one theme string, escaped for HTML text.
 *
 * @param string $key String key.
 */
function meguri_waste_e( $key ) {
	echo esc_html( meguri_waste_t( $key ) );
}

/**
 * Echo one theme string, escaped for an HTML attribute.
 *
 * @param string $key String key.
 */
function meguri_waste_a( $key ) {
	echo esc_attr( meguri_waste_t( $key ) );
}

/**
 * Flat pictogram (inline SVG, slate #314A57 + grey #9AA3A6 + one teal #22B0A4 part).
 *
 * @param string $name Pictogram name (see the list below).
 * @return string SVG markup (static, no user input).
 */
function meguri_waste_icon( $name ) {
	$s = '#314A57';
	$g = '#9AA3A6';
	$t = '#22B0A4';
	$p = array(
		'notice'       => '<rect x="30" y="10" width="36" height="66" rx="5" fill="' . $s . '"/><rect x="35" y="19" width="26" height="42" fill="#fff"/><rect x="38" y="25" width="20" height="3" fill="' . $g . '"/><rect x="38" y="32" width="14" height="3" fill="' . $g . '"/><circle cx="48" cy="69" r="3" fill="' . $g . '"/><path d="M58 8h26a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H72l-7 7v-7h-7a4 4 0 0 1-4-4V12a4 4 0 0 1 4-4z" fill="' . $t . '"/>',
		'bins'         => '<rect x="10" y="34" width="34" height="42" fill="' . $s . '"/><rect x="7" y="28" width="40" height="9" fill="' . $g . '"/><rect x="52" y="40" width="30" height="36" fill="' . $s . '"/><rect x="49" y="34" width="36" height="8" fill="' . $t . '"/><circle cx="18" cy="80" r="4" fill="' . $s . '"/><circle cx="38" cy="80" r="4" fill="' . $s . '"/><circle cx="60" cy="80" r="4" fill="' . $s . '"/><circle cx="74" cy="80" r="4" fill="' . $s . '"/>',
		'truck'        => '<rect x="6" y="30" width="50" height="38" fill="' . $s . '"/><path d="M58 40h16l12 14v14H58z" fill="' . $s . '"/><path d="M63 45h10l8 9H63z" fill="' . $g . '"/><rect x="2" y="26" width="8" height="42" fill="' . $t . '"/><circle cx="24" cy="72" r="7" fill="' . $g . '" stroke="#fff" stroke-width="3"/><circle cx="72" cy="72" r="7" fill="' . $g . '" stroke="#fff" stroke-width="3"/>',
		'weigh'        => '<rect x="10" y="66" width="76" height="10" fill="' . $s . '"/><rect x="22" y="56" width="52" height="10" fill="' . $g . '"/><path d="M26 52a22 22 0 0 1 44 0z" fill="' . $s . '"/><path d="M48 52L58 36" stroke="' . $t . '" stroke-width="4" stroke-linecap="round"/><circle cx="48" cy="52" r="4" fill="' . $t . '"/>',
		'report'       => '<rect x="22" y="10" width="46" height="66" fill="' . $s . '"/><rect x="29" y="22" width="32" height="3" fill="' . $g . '"/><rect x="29" y="30" width="32" height="3" fill="' . $g . '"/><rect x="29" y="38" width="22" height="3" fill="' . $g . '"/><circle cx="66" cy="66" r="15" fill="' . $t . '"/><path d="M59 66l5 5 9-10" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>',
		'depot'        => '<rect x="14" y="38" width="68" height="38" fill="' . $s . '"/><path d="M8 40L48 18l40 22z" fill="' . $g . '"/><rect x="38" y="52" width="20" height="24" fill="' . $t . '"/><rect x="20" y="46" width="10" height="8" fill="#fff"/><rect x="66" y="46" width="10" height="8" fill="#fff"/>',
		'photo'        => '<rect x="12" y="30" width="72" height="44" fill="' . $s . '"/><rect x="34" y="22" width="28" height="10" fill="' . $g . '"/><circle cx="48" cy="52" r="15" fill="#fff"/><circle cx="48" cy="52" r="8" fill="' . $t . '"/>',
		'phone'        => '<rect x="26" y="10" width="44" height="72" rx="6" fill="' . $s . '"/><rect x="32" y="20" width="32" height="44" fill="#fff"/><circle cx="48" cy="73" r="4" fill="' . $g . '"/><circle cx="48" cy="42" r="10" fill="' . $t . '"/>',
		'plan'         => '<rect x="22" y="14" width="52" height="68" fill="' . $s . '"/><rect x="28" y="24" width="40" height="52" fill="#fff"/><rect x="38" y="8" width="20" height="10" fill="' . $g . '"/><path d="M33 34h30v22H33z" fill="none" stroke="' . $g . '" stroke-width="3"/><rect x="42" y="42" width="12" height="10" fill="' . $t . '"/>',
		'calendar'     => '<rect x="14" y="20" width="68" height="58" fill="' . $s . '"/><rect x="20" y="36" width="56" height="36" fill="#fff"/><rect x="26" y="10" width="6" height="16" fill="' . $g . '"/><rect x="64" y="10" width="6" height="16" fill="' . $g . '"/><rect x="52" y="48" width="14" height="14" fill="' . $t . '"/><rect x="28" y="48" width="14" height="4" fill="' . $g . '"/>',
		'general'      => '<rect x="22" y="30" width="40" height="46" fill="' . $s . '"/><rect x="18" y="22" width="48" height="10" fill="' . $g . '"/><rect x="32" y="42" width="20" height="14" fill="' . $t . '"/><circle cx="30" cy="80" r="4" fill="' . $s . '"/><circle cx="54" cy="80" r="4" fill="' . $s . '"/>',
		'recycling'    => '<rect x="22" y="40" width="40" height="36" fill="' . $s . '"/><rect x="22" y="40" width="40" height="8" fill="' . $g . '"/><path d="M34 22a14 14 0 0 1 22 0" fill="none" stroke="' . $t . '" stroke-width="5" stroke-linecap="round"/><path d="M58 14v10H48" fill="none" stroke="' . $t . '" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>',
		'glass'        => '<path d="M26 76V44l6-10V14h10v20l6 10v32z" fill="' . $s . '"/><rect x="26" y="52" width="22" height="12" fill="' . $g . '"/><rect x="52" y="40" width="14" height="36" fill="' . $t . '"/><rect x="55" y="32" width="8" height="10" fill="' . $t . '"/>',
		'food'         => '<path d="M18 38h52l-5 38H23z" fill="' . $s . '"/><rect x="14" y="30" width="60" height="9" fill="' . $g . '"/><path d="M44 28c0-12 8-18 18-18 0 10-6 18-18 18z" fill="' . $t . '"/>',
		'confidential' => '<rect x="20" y="34" width="46" height="42" fill="' . $s . '"/><path d="M32 34V24a11 11 0 0 1 22 0v10" fill="none" stroke="' . $g . '" stroke-width="6"/><circle cx="43" cy="52" r="6" fill="' . $t . '"/><rect x="41" y="54" width="4" height="10" fill="' . $t . '"/>',
	);
	if ( ! isset( $p[ $name ] ) ) {
		return '';
	}
	return '<svg class="mw-icon mw-icon--' . esc_attr( $name ) . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96" width="96" height="96" role="img" aria-hidden="true" focusable="false">' . $p[ $name ] . '</svg>';
}
