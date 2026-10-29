<?php
/**
 * Tsuya Jewellers: the theme's own words (header line and button, footer, template headings and the sample patterns) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks, line heights and hyphenation follow it.
 *
 * @package tsuya-jewellers
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
function tsuya_jewellers_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function tsuya_jewellers_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( tsuya_jewellers_lang(), 'en' ) ) as $lang ) {
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
function tsuya_jewellers_language_attributes( $output ) {
	$lang = tsuya_jewellers_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'tsuya_jewellers_language_attributes' );

/**
 * The search results title ("Search results for: …") comes from WordPress in the site language; on a site whose sample
 * content is in another language it reads in that language instead (key search_results, %s = the search words).
 *
 * @param string $content Rendered block.
 * @param array  $block   Parsed block.
 * @return string
 */
function tsuya_jewellers_search_title( $content, $block ) {
	if ( 'en' === tsuya_jewellers_lang() || 'search' !== ( $block['attrs']['type'] ?? '' ) || ! is_search() ) {
		return $content;
	}
	$title = sprintf( tsuya_jewellers_t( 'search_results' ), get_search_query() );
	return (string) preg_replace( '#(<h[1-6][^>]*>).*?(</h[1-6]>)#s', '${1}' . str_replace( array( '\\', '$' ), array( '\\\\', '\\$' ), esc_html( $title ) ) . '${2}', $content, 1 );
}
add_filter( 'render_block_core/query-title', 'tsuya_jewellers_search_title', 10, 2 );

/**
 * Excerpts on a site whose sample content is Chinese or Japanese but whose WordPress language counts words by spaces
 * (English and most others): CJK text has no spaces, so "24 words" would be the whole page. Trim by characters instead,
 * about three per word (the measure WordPress itself uses for ja / zh).
 *
 * @param string $text          Trimmed text.
 * @param int    $num_words     Number of words asked for.
 * @param string $more          What to append when trimmed.
 * @param string $original_text Text before trimming.
 * @return string
 */
function tsuya_jewellers_cjk_excerpt( $text, $num_words, $more, $original_text ) {
	if ( ! in_array( tsuya_jewellers_lang(), array( 'zh-TW', 'ja' ), true ) || 0 === strpos( _x( 'words', 'Word count type. Do not translate!' ), 'characters' ) ) { // phpcs:ignore WordPress.WP.I18n -- WordPress's own string.
		return $text;
	}
	$plain = trim( preg_replace( '/\s+/u', ' ', wp_strip_all_tags( $original_text ) ) );
	$limit = (int) $num_words * 3;
	if ( mb_strlen( $plain ) <= $limit ) {
		return $plain;
	}
	return mb_substr( $plain, 0, $limit ) . ( null === $more ? '…' : $more );
}
add_filter( 'wp_trim_words', 'tsuya_jewellers_cjk_excerpt', 10, 4 );
