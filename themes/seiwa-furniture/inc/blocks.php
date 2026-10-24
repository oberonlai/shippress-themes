<?php
/**
 * Seiwa Furniture: small helpers that print block markup for the patterns (text always comes from inc/i18n/<lang>.php).
 *
 * @package seiwa-furniture
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Text in the content language, escaped for HTML. */
function sw_t( $key ) {
	return esc_html( seiwa_furniture_t( $key ) );
}

/** Text in the content language, escaped for an attribute. */
function sw_ta( $key ) {
	return esc_attr( seiwa_furniture_t( $key ) );
}

/** URL of a file in assets/images/. */
function sw_url( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Group block.
 *
 * @param string $class Class names.
 * @param string $inner Inner block markup.
 * @param string $tag   div or section (section = full width).
 * @return string
 */
function sw_group( $class, $inner = '', $tag = 'div' ) {
	$attrs = array();
	$cls   = 'wp-block-group';
	if ( 'div' !== $tag ) {
		$attrs['tagName'] = $tag;
	}
	if ( 'section' === $tag ) {
		$attrs['align'] = 'full';
		$cls           .= ' alignfull';
	}
	$attrs['className'] = $class;
	$attrs['layout']    = array( 'type' => 'default' );
	return '<!-- wp:group ' . wp_json_encode( $attrs ) . " -->\n<" . $tag . ' class="' . $cls . ' ' . $class . '">' . $inner . '</' . $tag . ">\n<!-- /wp:group -->\n\n";
}

/** Paragraph block (HTML already safe). */
function sw_p( $class, $html ) {
	$attrs = '' === $class ? '' : ' ' . wp_json_encode( array( 'className' => $class ) );
	return '<!-- wp:paragraph' . $attrs . " -->\n<p" . ( '' === $class ? '' : ' class="' . $class . '"' ) . '>' . $html . "</p>\n<!-- /wp:paragraph -->\n\n";
}

/** Heading block (HTML already safe). */
function sw_h( $level, $class, $html ) {
	$attrs = array( 'level' => $level, 'className' => $class );
	return '<!-- wp:heading ' . wp_json_encode( $attrs ) . " -->\n<h" . $level . ' class="wp-block-heading ' . $class . '">' . $html . '</h' . $level . ">\n<!-- /wp:heading -->\n\n";
}

/** Image block; $alt is already escaped. */
function sw_img( $file, $alt, $class = '' ) {
	$attrs = array( 'sizeSlug' => 'full', 'linkDestination' => 'none' );
	if ( '' !== $class ) {
		$attrs['className'] = $class;
	}
	return '<!-- wp:image ' . wp_json_encode( $attrs ) . " -->\n<figure class=\"wp-block-image size-full" . ( '' !== $class ? ' ' . $class : '' ) . '"><img src="' . sw_url( $file ) . '" alt="' . $alt . "\"/></figure>\n<!-- /wp:image -->\n\n";
}

/** Section label: Latin word + small caption under it. */
function sw_label( $label_key, $cap_key ) {
	return sw_group( 'sw-label', sw_p( 'sw-label__w', sw_t( $label_key ) ) . sw_p( 'sw-label__c', sw_t( $cap_key ) ) );
}

/** Dashed link with the round arrow. */
function sw_more( $key, $href, $class = '' ) {
	return sw_p( trim( 'sw-more ' . $class ), '<a href="' . esc_url( $href ) . '">' . sw_t( $key ) . '</a>' );
}

/** Outlined card (T2): kicker, title, text, link on the left; photo flush right; line drawing on the top edge. */
function sw_card( $n, $file, $alt, $line, $href, $extra = '', $reveal = 'sp-reveal sp-reveal--up' ) {
	$tx = sw_p( 'sw-kick', sw_t( $n . '_k' ) ) . sw_h( 3, 'sw-card__t', sw_t( $n . '_t' ) ) . sw_p( 'sw-card__b', sw_t( $n . '_b' ) ) . $extra . sw_more( $n . '_l', $href ) . ( $line ? sw_img( $line, '', 'sw-card__ln' ) : '' );
	return sw_group( 'sw-card ' . $reveal, sw_group( 'sw-card__tx', $tx ) . sw_img( $file, $alt, 'sw-card__ph' ) );
}
