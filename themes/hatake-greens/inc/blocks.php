<?php
/**
 * Hatake Greens: small helpers that print core block markup for the patterns, so the repeated pieces (groups,
 * headings, paragraphs, images, pills, the tagged photo cards) are written once.
 *
 * @package hatake-greens
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Theme image URL. */
function hg_url( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/** Opens a group. $tag section|div|header|footer|ul; $anchor adds an id. Returns markup. */
function hg_open( $class, $tag = 'div', $align = '', $anchor = '' ) {
	$attrs = array();
	if ( 'div' !== $tag ) {
		$attrs['tagName'] = $tag;
	}
	if ( $align ) {
		$attrs['align'] = $align;
	}
	if ( $anchor ) {
		$attrs['anchor'] = $anchor;
	}
	$attrs['className'] = $class;
	$attrs['layout']    = array( 'type' => 'default' );
	$cls                = 'wp-block-group' . ( $align ? ' align' . $align : '' ) . ' ' . $class;
	return '<!-- wp:group ' . wp_json_encode( $attrs ) . " -->\n<" . $tag . ( $anchor ? ' id="' . esc_attr( $anchor ) . '"' : '' ) . ' class="' . esc_attr( $cls ) . '">';
}

/** Closes a group opened by hg_open(). */
function hg_close( $tag = 'div' ) {
	return '</' . $tag . ">\n<!-- /wp:group -->";
}

/** Paragraph. $html is trusted theme text. */
function hg_p( $class, $html ) {
	return '<!-- wp:paragraph {"className":"' . $class . "\"} -->\n<p class=\"" . esc_attr( $class ) . '">' . wp_kses_post( $html ) . "</p>\n<!-- /wp:paragraph -->";
}

/** Heading. */
function hg_h( $level, $class, $html ) {
	$attrs = ( 2 === (int) $level ? '' : '"level":' . (int) $level . ',' ) . '"className":"' . $class . '"';
	return '<!-- wp:heading {' . $attrs . "} -->\n<h" . (int) $level . ' class="wp-block-heading ' . esc_attr( $class ) . '">' . wp_kses_post( $html ) . '</h' . (int) $level . ">\n<!-- /wp:heading -->";
}

/** Image block. */
function hg_img( $file, $alt, $class = '' ) {
	$cls = trim( 'size-full ' . $class );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none"' . ( $class ? ',"className":"' . $class . '"' : '' ) . "} -->\n<figure class=\"wp-block-image " . esc_attr( $cls ) . '"><img src="' . hg_url( $file ) . '" alt="' . esc_attr( $alt ) . "\"/></figure>\n<!-- /wp:image -->";
}

/** Pill button. $style: '' (filled) or 'outline'. */
function hg_pill( $href, $text, $class = '', $style = '' ) {
	$cls = trim( ( $style ? 'is-style-' . $style . ' ' : '' ) . 'hg-pill ' . $class );
	return '<!-- wp:buttons {"className":"hg-btns"} -->' . "\n" . '<div class="wp-block-buttons hg-btns"><!-- wp:button {"className":"' . $cls . '"} -->' . "\n" . '<div class="wp-block-button ' . esc_attr( $cls ) . '"><a class="wp-block-button__link wp-element-button" href="' . esc_attr( $href ) . '">' . esc_html( $text ) . '</a></div>' . "\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->";
}

/** Section label: a small play triangle (drawn in CSS) before the text. */
function hg_label( $text, $class = '' ) {
	return hg_p( trim( 'hg-label ' . $class ), esc_html( $text ) );
}

/**
 * Tagged photo card: 3:2 photo, coloured title with a [ tag ] after it, two lines of text and a round-dot link.
 *
 * @param string $img  Image file under assets/images/.
 * @param string $alt  Alt text.
 * @param string $t    Title.
 * @param string $tag  Tag text (printed inside [ ]).
 * @param string $body Text.
 * @param string $link Link label.
 * @param string $href Link target.
 */
function hg_card( $img, $alt, $t, $tag, $body, $link, $href = '#plan' ) {
	$out  = hg_open( 'hg-card sp-reveal sp-reveal--up' ) . "\n";
	$out .= hg_img( $img, $alt, 'hg-card__img' ) . "\n\n";
	$out .= hg_h( 3, 'hg-card__t', esc_html( $t ) . ' <span class="hg-tag">[ ' . esc_html( $tag ) . ' ]</span>' ) . "\n\n";
	$out .= hg_p( 'hg-card__p', esc_html( $body ) ) . "\n\n";
	$out .= hg_p( 'hg-card__link', '<a href="' . esc_attr( $href ) . '"><span class="hg-dot" aria-hidden="true"></span>' . esc_html( $link ) . '</a>' ) . "\n";
	return $out . hg_close();
}
