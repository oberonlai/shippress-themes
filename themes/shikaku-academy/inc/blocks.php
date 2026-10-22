<?php
/**
 * Shikaku Academy: small helpers that print core block markup for the patterns (so the copy stays in inc/i18n).
 *
 * @package shikaku-academy
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** JSON for a block comment. */
function sa_json( array $a ) {
	return wp_json_encode( $a, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
}

/** Group. $inner is block markup. $tag: div, section, main, header, footer. */
function sa_g( $class, $inner, $tag = 'div', $align = '' ) {
	$a = array( 'className' => $class, 'layout' => array( 'type' => 'default' ) );
	if ( 'div' !== $tag ) {
		$a['tagName'] = $tag;
	}
	if ( $align ) {
		$a['align'] = $align;
	}
	return "<!-- wp:group " . sa_json( $a ) . " -->\n<$tag class=\"wp-block-group" . ( $align ? " align$align" : '' ) . " $class\">$inner</$tag>\n<!-- /wp:group -->\n\n";
}

/** Paragraph; $html is already escaped HTML. */
function sa_p( $class, $html ) {
	return "<!-- wp:paragraph " . sa_json( array( 'className' => $class ) ) . " -->\n<p class=\"$class\">$html</p>\n<!-- /wp:paragraph -->\n\n";
}

/** Heading; $html is already escaped HTML. */
function sa_h( $level, $class, $html ) {
	$a = array( 'className' => $class );
	if ( 2 !== $level ) {
		$a['level'] = $level;
	}
	return "<!-- wp:heading " . sa_json( $a ) . " -->\n<h$level class=\"wp-block-heading $class\">$html</h$level>\n<!-- /wp:heading -->\n\n";
}

/** Image from assets/images; alt text from an i18n key. */
function sa_img( $file, $alt_key, $class = '' ) {
	$a = array( 'sizeSlug' => 'full', 'linkDestination' => 'none' );
	if ( $class ) {
		$a['className'] = $class;
	}
	return "<!-- wp:image " . sa_json( $a ) . " -->\n<figure class=\"wp-block-image size-full" . ( $class ? " $class" : '' ) . "\"><img src=\"" . esc_url( get_theme_file_uri( 'assets/images/' . $file ) ) . "\" alt=\"" . esc_attr( sa_t( $alt_key ) ) . "\"/></figure>\n<!-- /wp:image -->\n\n";
}

/** One or more buttons. $buttons: list of array( label, href, extra class ). */
function sa_btns( $class, array $buttons ) {
	$inner = '';
	foreach ( $buttons as $b ) {
		$c      = isset( $b[2] ) ? $b[2] : '';
		$inner .= "<!-- wp:button " . sa_json( array( 'className' => $c ) ) . " -->\n<div class=\"wp-block-button $c\"><a class=\"wp-block-button__link wp-element-button\" href=\"" . esc_url( $b[1] ) . "\">" . esc_html( $b[0] ) . "</a></div>\n<!-- /wp:button -->\n\n";
	}
	return "<!-- wp:buttons " . sa_json( array( 'className' => $class, 'layout' => array( 'type' => 'flex' ) ) ) . " -->\n<div class=\"wp-block-buttons $class\">$inner</div>\n<!-- /wp:buttons -->\n\n";
}

/** Raw HTML block (the plan table keeps data-label on its cells so it can stack on small screens). */
function sa_html( $html ) {
	return "<!-- wp:html -->\n$html\n<!-- /wp:html -->\n\n";
}

/** Bracket label above a section title: { Label }. */
function sa_bracket( $key ) {
	return sa_p( 'sa-bracket', '{ ' . esc_html( sa_t( $key ) ) . ' }' );
}

/**
 * Section title: one paper strip, wiped open on scroll (clip on the child, never on the observed wrapper).
 *
 * @param string $key   i18n key.
 * @param string $class Extra class on the heading.
 * @param int    $level Heading level.
 */
function sa_title( $key, $class = '', $level = 2 ) {
	return sa_g( 'sa-title sp-reveal sp-reveal--wipe', sa_h( $level, 'sa-st ' . $class, esc_html( sa_t( $key ) ) ) );
}
