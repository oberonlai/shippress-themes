<?php
/**
 * Kensa Laboratory: small helpers for the patterns.
 *
 * @package kensa-laboratory
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
function kensa_laboratory_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}
