<?php
/**
 * Kouhi Service: small helpers for the patterns.
 *
 * @package kouhi-service
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
function kouhi_service_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * A small line icon (our own SVG, 32px, currentColor).
 *
 * @param string $name suits, service, visits, plans or cup.
 * @return string SVG markup (static, safe).
 */
function kouhi_service_icon( $name ) {
	$paths = array(
		'suits'   => '<path d="M5 27V8l9-4v23M14 27V12l13 4v11M3 27h26M9 12h1M9 17h1M9 22h1M20 19h2M20 23h2"/>',
		'service' => '<path d="M7 11h16v7a8 8 0 0 1-16 0v-7zM23 13h2a3 3 0 0 1 0 6h-2M11 5v3M15 5v3M19 5v3"/>',
		'visits'  => '<path d="M5 8h22v19H5zM5 14h22M11 4v6M21 4v6M10 19h3M17 19h3M10 23h3"/>',
		'plans'   => '<path d="M4 16V5h11l13 13-10 10L4 16zM10 10h.01"/>',
		'cup'     => '<path d="M7 12h15v7a7 7 0 0 1-15 0v-7zM22 14h1.5a2.7 2.7 0 0 1 0 5.4H22M11 5v3M15 5v3M19 5v3"/>',
	);
	$d     = isset( $paths[ $name ] ) ? $paths[ $name ] : '';
	return '<svg class="ks-ico" viewBox="0 0 32 32" width="32" height="32" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">' . $d . '</svg>';
}

/**
 * Escaped theme string, for pattern markup.
 *
 * @param string $key String key.
 * @return string
 */
function kouhi_service_e( $key ) {
	return esc_html( kouhi_service_t( $key ) );
}
