<?php
/**
 * Asaoka Screening: small helpers for the patterns.
 *
 * @package asaoka-screening
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
function asaoka_screening_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Inline arrow icon used by the round and squircle buttons.
 *
 * @return string SVG markup.
 */
function asaoka_screening_arrow() {
	return '<svg viewBox="0 0 14 14" width="14" height="14" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 7h9M7.5 3l4 4-4 4"/></svg>';
}
