<?php
/**
 * Suzu Ballet: small helpers that print core block markup for the patterns, so the repeated pieces (groups, headings,
 * paragraphs, images, the outline and filled pills, the line icons) are written once.
 *
 * @package suzu-ballet
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Theme image URL. */
function sb_url( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/** Opens a group. $tag section|div|header|footer|ul; returns markup. */
function sb_open( $class, $tag = 'div', $align = '' ) {
	$attrs = array();
	if ( 'div' !== $tag ) {
		$attrs['tagName'] = $tag;
	}
	if ( $align ) {
		$attrs['align'] = $align;
	}
	$attrs['className'] = $class;
	$attrs['layout']    = array( 'type' => 'default' );
	$cls                = 'wp-block-group' . ( $align ? ' align' . $align : '' ) . ' ' . $class;
	return '<!-- wp:group ' . wp_json_encode( $attrs ) . " -->\n<" . $tag . ' class="' . esc_attr( $cls ) . '">';
}

/** Closes a group opened by sb_open(). */
function sb_close( $tag = 'div' ) {
	return '</' . $tag . ">\n<!-- /wp:group -->";
}

/** Paragraph. $html is trusted theme text. */
function sb_p( $class, $html ) {
	return '<!-- wp:paragraph {"className":"' . $class . "\"} -->\n<p class=\"" . esc_attr( $class ) . '">' . wp_kses_post( $html ) . "</p>\n<!-- /wp:paragraph -->";
}

/** Heading. */
function sb_h( $level, $class, $html ) {
	$attrs = ( 2 === (int) $level ? '' : '"level":' . (int) $level . ',' ) . '"className":"' . $class . '"';
	return '<!-- wp:heading {' . $attrs . "} -->\n<h" . (int) $level . ' class="wp-block-heading ' . esc_attr( $class ) . '">' . wp_kses_post( $html ) . '</h' . (int) $level . ">\n<!-- /wp:heading -->";
}

/** Image block. */
function sb_img( $file, $alt, $class = '' ) {
	$cls = trim( 'size-full ' . $class );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none"' . ( $class ? ',"className":"' . $class . '"' : '' ) . "} -->\n<figure class=\"wp-block-image " . esc_attr( $cls ) . '"><img src="' . sb_url( $file ) . '" alt="' . esc_attr( $alt ) . "\"/></figure>\n<!-- /wp:image -->";
}

/** Filled (primary) pill button. */
function sb_pill( $href, $text, $class = '' ) {
	return '<!-- wp:buttons {"className":"sb-btns"} -->' . "\n" . '<div class="wp-block-buttons sb-btns"><!-- wp:button {"className":"sb-pill ' . $class . '"} -->' . "\n" . '<div class="wp-block-button sb-pill ' . esc_attr( $class ) . '"><a class="wp-block-button__link wp-element-button" href="' . esc_attr( $href ) . '">' . esc_html( $text ) . '</a></div>' . "\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->";
}

/** Outline pill (1 px border, radius 50 px). */
function sb_outline( $href, $text, $class = '' ) {
	return '<!-- wp:buttons {"className":"sb-btns"} -->' . "\n" . '<div class="wp-block-buttons sb-btns"><!-- wp:button {"className":"is-style-outline sb-outline ' . $class . '"} -->' . "\n" . '<div class="wp-block-button is-style-outline sb-outline ' . esc_attr( $class ) . '"><a class="wp-block-button__link wp-element-button" href="' . esc_attr( $href ) . '">' . esc_html( $text ) . '</a></div>' . "\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->";
}

/** Empty decorative group (the lattice, the icons). */
function sb_deco( $class ) {
	return sb_open( $class ) . "\n" . sb_close();
}
