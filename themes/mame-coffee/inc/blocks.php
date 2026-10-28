<?php
/**
 * Mame Coffee: small helpers that print core block markup for the patterns, so the repeated card pieces (the broken
 * 3 px rule, the round outline arrow, the chip, the rating bars) are written once.
 *
 * @package mame-coffee
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Theme image URL. */
function mc_url( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/** Opens a group. $tag section|div|header|footer|ul; returns markup. */
function mc_open( $class, $tag = 'div', $align = '' ) {
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

/** Closes a group opened by mc_open(). */
function mc_close( $tag = 'div' ) {
	return '</' . $tag . ">\n<!-- /wp:group -->";
}

/** Paragraph. $html is trusted theme text (may hold <span class="mc-u">). */
function mc_p( $class, $html ) {
	return '<!-- wp:paragraph {"className":"' . $class . "\"} -->\n<p class=\"" . esc_attr( $class ) . '">' . wp_kses_post( $html ) . "</p>\n<!-- /wp:paragraph -->";
}

/** Heading. */
function mc_h( $level, $class, $html ) {
	$attrs = ( 2 === (int) $level ? '' : '"level":' . (int) $level . ',' ) . '"className":"' . $class . '"';
	return '<!-- wp:heading {' . $attrs . "} -->\n<h" . (int) $level . ' class="wp-block-heading ' . esc_attr( $class ) . '">' . wp_kses_post( $html ) . '</h' . (int) $level . ">\n<!-- /wp:heading -->";
}

/** Image block. */
function mc_img( $file, $alt, $class = '' ) {
	$cls = trim( 'size-full ' . $class );
	return '<!-- wp:image {"sizeSlug":"full","linkDestination":"none"' . ( $class ? ',"className":"' . $class . '"' : '' ) . "} -->\n<figure class=\"wp-block-image " . esc_attr( $cls ) . '"><img src="' . mc_url( $file ) . '" alt="' . esc_attr( $alt ) . "\"/></figure>\n<!-- /wp:image -->";
}

/** The 3 px rule with the broken end (a decorative group; the break is drawn by CSS). */
function mc_rule() {
	return mc_open( 'mc-rule' ) . "\n" . mc_close();
}

/** Round 24 px outline arrow link (text is for screen readers). */
function mc_arrow( $href, $label ) {
	return '<!-- wp:paragraph {"className":"mc-arrow"} -->' . "\n" . '<p class="mc-arrow"><a href="' . esc_attr( $href ) . '"><span class="screen-reader-text">' . esc_html( $label ) . '</span></a></p>' . "\n<!-- /wp:paragraph -->";
}

/** Text link followed by the round arrow. */
function mc_more( $href, $text ) {
	return '<!-- wp:paragraph {"className":"mc-more"} -->' . "\n" . '<p class="mc-more"><a href="' . esc_attr( $href ) . '">' . esc_html( $text ) . '</a></p>' . "\n<!-- /wp:paragraph -->";
}

/** Title row: caps Newsreader title (left) and the round arrow (right). */
function mc_title_row( $title, $href, $class = '' ) {
	return mc_open( trim( 'mc-trow ' . $class ) ) . "\n" . mc_h( 3, 'mc-card__title', $title ) . "\n\n" . mc_arrow( $href, wp_strip_all_tags( $title ) ) . "\n" . mc_close();
}

/** Five-block rating row (Sweetness / Acidity / Body); the bars are plain HTML so the markup is stable. */
function mc_rating( $label, $value ) {
	$bars = '';
	for ( $i = 1; $i <= 5; $i++ ) {
		$bars .= '<i' . ( $i <= $value ? ' class="on"' : '' ) . '></i>';
	}
	return '<!-- wp:html -->' . "\n" . '<div class="mc-bars" role="img" aria-label="' . esc_attr( $label . ' ' . $value . '/5' ) . '"><span class="mc-bars__label">' . esc_html( $label ) . '</span><span class="mc-bars__row">' . $bars . '</span></div>' . "\n<!-- /wp:html -->";
}

/** Grey panel with a photo and an optional white chip. */
function mc_panel( $file, $alt, $chip = '', $class = '' ) {
	$out = mc_open( trim( 'mc-panel ' . $class ) ) . "\n";
	if ( $chip ) {
		$out .= mc_p( 'mc-chip', $chip ) . "\n\n";
	}
	return $out . mc_img( $file, $alt ) . "\n" . mc_close();
}

/**
 * Inner-page head (T1, smaller): a full-bleed backdrop photograph, a sharp 1.53 : 1 frame offset to the right and the
 * page title (h1) crossing the frame's lower-left corner, one intro line under it. No parallax in the head.
 */
function mc_pagehead( $bg, $bg_alt, $frame, $frame_alt, $title, $intro, $low = false ) {
	$url = mc_url( $bg );
	$out = '<!-- wp:cover {"url":"' . $url . '","alt":"' . esc_attr( $bg_alt ) . '","dimRatio":40,"overlayColor":"roast","minHeight":760,"align":"full","className":"mc-ph","layout":{"type":"default"}} -->' . "\n";
	$out .= '<div class="wp-block-cover alignfull mc-ph" style="min-height:760px"><img class="wp-block-cover__image-background" alt="' . esc_attr( $bg_alt ) . '" src="' . $url . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-roast-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container">';
	$out .= mc_open( 'mc-ph__stage' ) . "\n" . mc_img( $frame, $frame_alt, 'mc-ph__frame' . ( $low ? ' mc-ph__frame--low' : '' ) ) . "\n\n";
	$out .= mc_open( 'mc-ph__id' ) . "\n" . mc_h( 1, 'mc-ph__title', $title ) . "\n\n" . mc_p( 'mc-ph__intro', $intro ) . "\n" . mc_close() . "\n" . mc_close();
	return $out . '</div></div>' . "\n<!-- /wp:cover -->";
}

/** Full-bleed photograph band with parallax (the foreground label never moves). */
function mc_band( $file, $alt, $label = '', $class = '' ) {
	$url = mc_url( $file );
	$cls = trim( 'mc-band sp-parallax ' . $class );
	$out = '<!-- wp:cover {"url":"' . $url . '","alt":"' . esc_attr( $alt ) . '","dimRatio":30,"overlayColor":"roast","minHeight":560,"align":"full","className":"' . $cls . '","layout":{"type":"default"}} -->' . "\n";
	$out .= '<div class="wp-block-cover alignfull ' . esc_attr( $cls ) . '" style="min-height:560px"><img class="wp-block-cover__image-background" alt="' . esc_attr( $alt ) . '" src="' . $url . '" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-roast-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container">';
	if ( $label ) {
		$out .= mc_p( 'mc-band__label', $label );
	}
	return $out . '</div></div>' . "\n<!-- /wp:cover -->";
}

/** Rule, heading and paragraph: one text column (heading is a sentence, so not in caps). */
function mc_sect( $heading, $body, $class = '' ) {
	return mc_open( trim( 'mc-card mc-card--text ' . $class ) ) . "\n" . mc_rule() . "\n\n" . mc_h( 3, 'mc-qh', $heading ) . "\n\n" . mc_p( 'mc-prose', $body ) . "\n" . mc_close();
}

/** Hairline story row: heading left, text right. */
function mc_srow( $heading, $body ) {
	return mc_open( 'mc-srow' ) . "\n" . mc_h( 3, 'mc-qh', $heading ) . "\n\n" . mc_p( 'mc-prose', $body ) . "\n" . mc_close();
}

/** Hairline price row (name, note, price); price column never cut. */
function mc_prow( $name, $note, $price ) {
	return mc_open( 'mc-price' ) . "\n" . mc_p( 'mc-price__n', $name ) . "\n\n" . mc_p( 'mc-price__d', $note ) . "\n\n" . mc_p( 'mc-price__p', $price ) . "\n" . mc_close();
}

/** Hairline spec row (label, value). */
function mc_spec( $label, $value ) {
	return mc_open( 'mc-spec' ) . "\n" . mc_p( 'mc-spec__k', $label ) . "\n\n" . mc_p( 'mc-spec__v', $value ) . "\n" . mc_close();
}

/** Closing row: the rule, one line and the round arrow link. */
function mc_closing( $text, $href, $more ) {
	return mc_open( 'mc-sec mc-closing', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap' ) . "\n" . mc_rule() . "\n\n" . mc_open( 'mc-closing__row' ) . "\n" . mc_p( 'mc-closing__t', $text ) . "\n\n" . mc_more( $href, $more ) . "\n" . mc_close() . "\n" . mc_close() . "\n" . mc_close( 'section' );
}

/** Wide photograph (wipe reveal on the figure's child, like the home pour photo). */
function mc_wide( $file, $alt ) {
	return mc_img( $file, $alt, 'mc-wide sp-reveal sp-reveal--wipe' );
}
