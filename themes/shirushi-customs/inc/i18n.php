<?php
/**
 * Shirushi Customs: the theme's own words (header button, footer lines, template headings, the sample patterns) in the
 * language of the site's sample content.
 *
 * The language is the one the shared importer used for the sample content (ShipPress_Demo_Import::lang(): the
 * `shippress_demo_lang` option ShipPress sets from its interface language, else the site language). The words live in
 * inc/i18n/<lang>.php; anything missing falls back to English. Sites whose language is not English get the same
 * html lang as their content, so the font stacks and the vertical labels follow it.
 *
 * @package shirushi_customs
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
function sc_lang() {
	return class_exists( 'ShipPress_Demo_Import' ) ? ShipPress_Demo_Import::lang() : 'en';
}

/**
 * One theme string in the content language (English when that language has none).
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string
 */
function sc_t( $key ) {
	static $tables = array();
	foreach ( array_unique( array( sc_lang(), 'en' ) ) as $lang ) {
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
function sc_language_attributes( $output ) {
	$lang = sc_lang();
	if ( 'en' === $lang || 0 !== strpos( get_locale(), 'en' ) ) {
		return $output;
	}
	return preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $output );
}
add_filter( 'language_attributes', 'sc_language_attributes' );

/**
 * A theme string with "|" as a forced line break: each part escaped, joined with <br>.
 *
 * @param string $key String key (see inc/i18n/en.php).
 * @return string Escaped HTML.
 */
function sc_lines( $key ) {
	return implode( '<br>', array_map( 'esc_html', explode( '|', sc_t( $key ) ) ) );
}

/**
 * Inner-page head (T1): a dark photograph band with the page title and lead bottom-left and the five-tick timeline
 * line along its bottom. Ticks in $lit (1–5) are lit; the others are dimmed. Returns block markup.
 *
 * @param string $key  Strings prefix: <key>_title and <key>_lead.
 * @param string $img  Image file in assets/images/.
 * @param array  $lit  Lit ticks (1–5).
 * @param string $pos  CSS object-position of the photograph.
 * @param bool   $link Link each tick to the #stage-N anchor of the page (process page).
 * @return string
 */
function sc_inner_head( $key, $img, $lit = array(), $pos = '50% 50%', $link = false ) {
	$src   = get_theme_file_uri( 'assets/images/' . $img );
	$ticks = '';
	for ( $i = 1; $i <= 5; $i++ ) {
		$cls   = 'sc-line__tick' . ( in_array( $i, $lit, true ) ? ' is-lit' : '' );
		$word  = esc_html( sc_t( 'st' . $i ) );
		$word  = $link ? '<a href="#stage-' . $i . '">' . $word . '</a>' : $word;
		$ticks .= "<!-- wp:paragraph {\"className\":\"" . $cls . "\"} -->\n<p class=\"" . $cls . "\"><span class=\"sc-n\">0" . $i . '</span> <span class="sc-w">' . $word . "</span></p>\n<!-- /wp:paragraph -->\n";
	}
	$alt = esc_attr( sc_t( $key . '_alt' ) );
	$pc  = 'sc-pos-' . preg_replace( '/[^0-9]+/', '-', trim( $pos, '% ' ) );
	$pc  = rtrim( str_replace( '%', '', $pc ), '-' );
	return '<!-- wp:group {"tagName":"section","align":"full","className":"sc-ph sp-parallax","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sc-ph sp-parallax"><!-- wp:group {"className":"sc-ph__bg sp-parallax__layer","layout":{"type":"default"}} -->
<div class="wp-block-group sc-ph__bg sp-parallax__layer"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"' . $pc . '"} -->
<figure class="wp-block-image size-full ' . $pc . '"><img src="' . esc_url( $src ) . '" alt="' . $alt . '"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sc-stage__veil","layout":{"type":"default"}} -->
<div class="wp-block-group sc-stage__veil"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sc-ph__in","layout":{"type":"default"}} -->
<div class="wp-block-group sc-ph__in"><!-- wp:heading {"level":1,"className":"sc-ph__h1"} -->
<h1 class="wp-block-heading sc-ph__h1">' . esc_html( sc_t( $key . '_title' ) ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sc-ph__lead"} -->
<p class="sc-ph__lead">' . esc_html( sc_t( $key . '_lead' ) ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sc-line","layout":{"type":"default"}} -->
<div class="wp-block-group sc-line"><!-- wp:group {"className":"sc-line__track","layout":{"type":"default"}} -->
<div class="wp-block-group sc-line__track">' . $ticks . '</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->';
}


/**
 * Inner-page head photographs keep their object-position without an inline style in the saved block markup (which the
 * block editor would flag as invalid): the sc-pos-X-Y class is turned into the style attribute at render time.
 *
 * @param string $html Rendered core/image block.
 * @return string
 */
function sc_image_position( $html ) {
	if ( preg_match( '/\bsc-pos-(\d{1,3})-(\d{1,3})\b/', $html, $m ) ) {
		$html = preg_replace( '/<img\b/', '<img style="object-position:' . (int) $m[1] . '% ' . (int) $m[2] . '%"', $html, 1 );
	}
	return $html;
}
add_filter( 'render_block_core/image', 'sc_image_position' );
