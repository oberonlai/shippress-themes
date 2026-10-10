<?php
/**
 * Sumai Realty: the listings directory works without JavaScript.
 *
 * The directory (the synced pattern from inc/info/directory.html) has three tabs that are plain anchor links to its
 * panels (#buy, #rent, #new-builds), and two rows of filter chips that are plain links: "?area=kitamachi#directory"
 * and "?size=m#directory". This file makes those links work on the server, so the filters also work with JavaScript
 * off (assets/js/directory.js does the same in place, without a reload):
 * - a listing row (a Group with the class sr-listing plus sr-area-<area> and sr-size-<s|m|l>) that does not match the
 *   area and size in the address is left out of the page;
 * - in each chip row (a Paragraph with the class sr-chips and sr-chips--area or sr-chips--size), the chip matching the
 *   address is marked aria-current="true", and every chip's link keeps the other row's choice.
 * Values are reduced to lowercase letters, digits and dashes before use. Nothing is stored.
 *
 * @package sumai-realty
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** The filters the chips can set. */
function sumai_realty_directory_params() {
	return array( 'area', 'size' );
}

/**
 * The current filter values from the address ('all' when not set).
 *
 * @return array<string, string>
 */
function sumai_realty_directory_state() {
	$state = array();
	foreach ( sumai_realty_directory_params() as $param ) {
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended -- read-only display filter.
		$value           = isset( $_GET[ $param ] ) ? sanitize_key( wp_unslash( $_GET[ $param ] ) ) : '';
		$state[ $param ] = '' === $value ? 'all' : $value;
	}
	return $state;
}

/**
 * Whether a block's className holds a class.
 *
 * @param array  $block Parsed block.
 * @param string $class Class name.
 * @return bool
 */
function sumai_realty_has_class( $block, $class ) {
	$classes = isset( $block['attrs']['className'] ) ? preg_split( '/\s+/', (string) $block['attrs']['className'] ) : array();
	return in_array( $class, $classes, true );
}

/**
 * Leaves out listing rows that do not match the filters, marks the current chips.
 *
 * @param string $html  Rendered block.
 * @param array  $block Parsed block.
 * @return string
 */
function sumai_realty_directory_render( $html, $block ) {
	if ( is_admin() || '' === $html ) {
		return $html;
	}
	$state = sumai_realty_directory_state();

	if ( 'core/group' === $block['blockName'] && sumai_realty_has_class( $block, 'sr-listing' ) ) {
		foreach ( $state as $param => $value ) {
			if ( 'all' !== $value && ! sumai_realty_has_class( $block, 'sr-' . $param . '-' . $value ) ) {
				return '';
			}
		}
		return $html;
	}

	if ( 'core/paragraph' === $block['blockName'] && sumai_realty_has_class( $block, 'sr-chips' ) && class_exists( 'WP_HTML_Tag_Processor' ) ) {
		$own = '';
		foreach ( array_keys( $state ) as $param ) {
			if ( sumai_realty_has_class( $block, 'sr-chips--' . $param ) ) {
				$own = $param;
			}
		}
		if ( '' === $own ) {
			return $html;
		}
		$tags = new WP_HTML_Tag_Processor( $html );
		while ( $tags->next_tag( 'a' ) ) {
			$href = (string) $tags->get_attribute( 'href' );
			$hash = strpos( $href, '#' );
			$frag = false === $hash ? '' : substr( $href, $hash );
			$path = false === $hash ? $href : substr( $href, 0, $hash );
			$q    = strpos( $path, '?' );
			if ( false === $q ) {
				continue;
			}
			parse_str( (string) substr( $path, $q + 1 ), $args );
			$mine  = isset( $args[ $own ] ) ? sanitize_key( $args[ $own ] ) : 'all';
			$query = array();
			foreach ( $state as $param => $value ) {
				$v = $param === $own ? $mine : $value;
				if ( 'all' !== $v || $param === $own ) {
					$query[ $param ] = $v;
				}
			}
			$tags->set_attribute( 'href', substr( $path, 0, $q ) . '?' . http_build_query( $query ) . $frag );
			if ( $mine === $state[ $own ] ) {
				$tags->set_attribute( 'aria-current', 'true' );
			} else {
				$tags->remove_attribute( 'aria-current' );
			}
		}
		return $tags->get_updated_html();
	}

	return $html;
}
add_filter( 'render_block', 'sumai_realty_directory_render', 10, 2 );
