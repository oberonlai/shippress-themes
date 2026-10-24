<?php
/**
 * Title: Footer: four plain columns
 * Slug: seiwa-furniture/footer-main
 * Categories: seiwa-furniture
 * Description: Wordmark and one line, address and phone, hours and tour, plain text links, copyright.
 */
$sw_col = function ( $inner ) {
	return sw_group( 'sw-foot__col', $inner );
};
$sw_links = '<a href="/about/">' . sw_t( 'foot_about' ) . '</a><br><a href="/team/">' . sw_t( 'foot_team' ) . '</a><br><a href="/notes/">' . sw_t( 'foot_notes' ) . '</a><br><a href="/contact/">' . sw_t( 'foot_contact' ) . '</a><br><a href="/privacy/">' . sw_t( 'foot_priv' ) . '</a>';
echo sw_group( 'sw-foot', sw_group( 'sw-wrap sw-foot__in', // phpcs:ignore WordPress.Security.EscapeOutput
	$sw_col( sw_p( 'sw-foot__mark', 'Seiwa Furniture' ) . sw_p( 'sw-foot__t', sw_t( 'foot_line' ) ) ) .
	$sw_col( sw_p( 'sw-foot__t', sw_t( 'foot_addr' ) . '<br>+31 40 000 1994<br>studio@seiwa-furniture.example' ) ) .
	$sw_col( sw_p( 'sw-foot__t', sw_t( 'foot_hours' ) . '<br>' . sw_t( 'foot_sat' ) . '<br>' . sw_t( 'foot_tour' ) ) ) .
	$sw_col( sw_p( 'sw-foot__t', $sw_links ) )
) . sw_group( 'sw-wrap', sw_p( 'sw-foot__copy', sw_t( 'foot_copy' ) ) ) );
