<?php
/**
 * Kogarashi Inn: the theme's own words (header button, footer lines, template headings, the sample patterns) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks and the vertical labels follow it.
 *
 * @package kogarashi-inn
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
function kogarashi_inn_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function kogarashi_inn_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( kogarashi_inn_lang(), 'en' ) ) as $lang ) {
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
function kogarashi_inn_language_attributes( $output ) {
	$lang = kogarashi_inn_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'kogarashi_inn_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function kogarashi_inn_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', kogarashi_inn_t( $key ) ) ) );
}

/**
 * Language switch markup: the five sample languages, the current one marked. Links carry ?lang= for multilingual setups.
 *
 * @param string $class Wrapper class.
 * @return string Escaped HTML.
 */
function kogarashi_inn_lang_switch( $class ) {
	// Native names are \u escapes so this file stays free of CJK (check-themes allows that only in ja / zh-TW files).
	$labels  = array(
		'en'    => 'English',
		'zh-TW' => "\u{7E41}\u{4E2D}",
		'ja'    => "\u{65E5}\u{672C}\u{8A9E}",
		'fr'    => "Fran\u{00E7}ais",
		'de'    => 'Deutsch',
	);
	$current = kogarashi_inn_lang();
	$out     = '<nav class="' . esc_attr( $class ) . '" aria-label="Language">';
	foreach ( $labels as $code => $label ) {
		$cur  = $code === $current ? ' aria-current="true"' : '';
		$out .= '<a href="' . esc_url( home_url( '/?lang=' . $code ) ) . '" hreflang="' . esc_attr( $code ) . '" lang="' . esc_attr( $code ) . '"' . $cur . '>' . esc_html( $label ) . '</a>';
	}
	return $out . '</nav>';
}

/**
 * The same language switch at the foot of the opened mobile menu.
 *
 * @param string $content Rendered navigation block.
 * @return string
 */
function kogarashi_inn_menu_langs( $content ) {
	$pos = strrpos( $content, '</ul>' );
	if ( false === $pos || false === strpos( $content, 'wp-block-navigation__responsive-container-content' ) ) {
		return $content;
	}
	return substr( $content, 0, $pos + 5 ) . kogarashi_inn_lang_switch( 'ki-langs ki-langs--menu' ) . substr( $content, $pos + 5 );
}
add_filter( 'render_block_core/navigation', 'kogarashi_inn_menu_langs' );
