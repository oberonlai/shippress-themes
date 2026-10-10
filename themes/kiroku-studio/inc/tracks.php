<?php
/**
 * Kiroku Studio: sideways tracks (the case-study reel, the process steps, the home page's journal row) that a keyboard
 * can scroll.
 *
 * A track is a Group block with the "Sideways track" style (class is-style-track) or a Query Loop with the class
 * ks-posts--track. It scrolls horizontally with CSS scroll-snap (style.css). So that someone without a mouse or a
 * touch screen can scroll it too, the scrolling element is made focusable here, when the page is rendered: it gets
 * tabindex="0", an aria-label and (for a Group) role="region", so Tab reaches it and the arrow keys scroll it (the links inside
 * are reachable with Tab as well, and the browser scrolls each one into view). Nothing is stored in the post, so the
 * blocks stay exactly as the editor saves them.
 *
 * @package kiroku-studio
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Adds keyboard access to the scrolling element of a track.
 *
 * @param string $html  Rendered block.
 * @param array  $block Parsed block.
 * @return string
 */
function kiroku_studio_track_a11y( $html, $block ) {
	$class = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
	if ( '' === $class || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $html;
	}
	$label = __( 'Scrolls sideways: swipe, or use the arrow keys', 'kiroku-studio' );
	if ( 'core/group' === $block['blockName'] && preg_match( '/(^|\s)is-style-track(\s|$)/', $class ) ) {
		$p = new WP_HTML_Tag_Processor( $html );
		if ( $p->next_tag() ) {
			kiroku_studio_track_attrs( $p, $label, true );
		}
		return $p->get_updated_html();
	}
	if ( 'core/query' === $block['blockName'] && preg_match( '/(^|\s)ks-posts--track(\s|$)/', $class ) ) {
		$p = new WP_HTML_Tag_Processor( $html );
		if ( $p->next_tag( array( 'class_name' => 'wp-block-post-template' ) ) ) {
			kiroku_studio_track_attrs( $p, $label, false );
		}
		return $p->get_updated_html();
	}
	return $html;
}
add_filter( 'render_block', 'kiroku_studio_track_a11y', 10, 2 );

/**
 * Sets the focus attributes on the current tag (an aria-label the user gave the block is kept). A list (the query
 * loop's <ul>) keeps its list role; a plain <div> becomes a named region.
 *
 * @param WP_HTML_Tag_Processor $p      Processor at the scrolling element.
 * @param string                $label  Fallback accessible name.
 * @param bool                  $region Whether to add role="region".
 */
function kiroku_studio_track_attrs( $p, $label, $region ) {
	if ( null === $p->get_attribute( 'tabindex' ) ) {
		$p->set_attribute( 'tabindex', '0' );
	}
	if ( $region && null === $p->get_attribute( 'role' ) ) {
		$p->set_attribute( 'role', 'region' );
	}
	if ( null === $p->get_attribute( 'aria-label' ) ) {
		$p->set_attribute( 'aria-label', $label );
	}
}
