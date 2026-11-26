<?php
/**
 * Enban Records: the few inline SVG glyphs the patterns use (own drawings).
 *
 * @package enban-records
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * An inline SVG glyph.
 *
 * @param string $name 'disc' (LP), 'disc7' (7-inch, large centre hole), 'plus', 'prev', 'next'.
 * @param int    $size Pixel size (disc glyphs).
 * @return string SVG markup (static, safe).
 */
function enban_records_icon( $name, $size = 20 ) {
	$size = (int) $size;
	switch ( $name ) {
		case 'disc':
			return '<svg class="eb-disc" width="' . $size . '" height="' . $size . '" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><circle cx="10" cy="10" r="10" fill="#4B4750"/><circle cx="10" cy="10" r="7" fill="none" stroke="#8C8790" stroke-width=".7"/><circle cx="10" cy="10" r="3" fill="#FFFFFF"/></svg>';
		case 'disc7':
			return '<svg class="eb-disc" width="' . $size . '" height="' . $size . '" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><circle cx="10" cy="10" r="10" fill="#4B4750"/><circle cx="10" cy="10" r="7" fill="none" stroke="#8C8790" stroke-width=".7"/><circle cx="10" cy="10" r="4.6" fill="#FFFFFF"/></svg>';
		case 'plus':
			return '<svg width="12" height="12" viewBox="0 0 12 12" aria-hidden="true" focusable="false"><path d="M6 0v12M0 6h12" stroke="currentColor" stroke-width="1.5" fill="none"/></svg>';
		case 'prev':
			return '<svg width="10" height="16" viewBox="0 0 10 16" aria-hidden="true" focusable="false"><path d="M8 1 2 8l6 7" stroke="currentColor" stroke-width="1.5" fill="none"/></svg>';
		case 'next':
			return '<svg width="10" height="16" viewBox="0 0 10 16" aria-hidden="true" focusable="false"><path d="M2 1l6 7-6 7" stroke="currentColor" stroke-width="1.5" fill="none"/></svg>';
	}
	return '';
}
