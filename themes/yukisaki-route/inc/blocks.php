<?php
/**
 * Yukisaki Route: small helpers for the patterns.
 *
 * @package yukisaki-route
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
function yukisaki_route_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * The route mark: three stops joined by a line (the wordmark and the card lockups).
 *
 * @return string SVG markup.
 */
function yukisaki_route_mark() {
	return '<svg class="yr-routemark" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M3.5 19.5C9 19.5 8 12 12 12s3-7.5 8.5-7.5" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><circle cx="3.5" cy="19.5" r="2.2" fill="currentColor"/><circle cx="12" cy="12" r="2.2" fill="currentColor"/><circle cx="20.5" cy="4.5" r="2.2" fill="currentColor"/></svg>';
}

/**
 * A theme string with ※1-style footnote marks set as superscripts.
 *
 * @param string $text Plain text.
 * @return string Escaped HTML.
 */
function yukisaki_route_note( $text ) {
	return preg_replace( '/(※\d)/u', '<sup class="yr-note">$1</sup>', esc_html( $text ) );
}
