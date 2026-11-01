<?php
/**
 * Ushio Line: small helpers for the patterns.
 *
 * @package ushio-line
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * URL of a theme image.
 *
 * @param string $file File name in assets/images.
 * @return string
 */
function ushio_line_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * A wave-underline text link (the theme's only call to action): text, an arrow, and a 1px sine line under both.
 *
 * @param string $text Link text (already translated, no arrow).
 * @param string $href Link target.
 * @param string $extra Extra class names.
 * @return string Paragraph block markup.
 */
function ushio_line_go( $text, $href, $extra = '' ) {
	$class = trim( 'ul-wave ' . $extra );
	return '<!-- wp:paragraph {"className":"' . esc_attr( $class ) . '"} -->' . "\n"
		. '<p class="' . esc_attr( $class ) . '"><a href="' . esc_url( $href ) . '">' . esc_html( $text ) . ' →</a></p>' . "\n"
		. '<!-- /wp:paragraph -->';
}

/**
 * Decorative wave ticks (spans, no text). Each tick: array( left %, top %, width px, 'w' for white ).
 *
 * @param array $ticks Tick definitions.
 * @return string HTML.
 */
function ushio_line_ticks( $ticks ) {
	$out = '';
	foreach ( $ticks as $t ) {
		$out .= '<span class="ul-tick' . ( ! empty( $t[3] ) ? ' ul-tick--w' : '' ) . '" style="--x:' . (float) $t[0] . '%;--y:' . (float) $t[1] . '%;--w:' . (int) $t[2] . 'px" aria-hidden="true"></span>';
	}
	return $out;
}
