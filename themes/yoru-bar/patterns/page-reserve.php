<?php
/**
 * Title: Page: Reserve
 * Slug: yoru-bar/page-reserve
 * Categories: yoru-bar
 * Inserter: false
 * Viewport Width: 1440
 * Description: Framed head, Three Seatings panel, seat arc with anchored seating rows, booking request form, house rules.
 */

$yb = array(
	yoru_bar_pagehead( 'Y12', 'rs' ),
	yoru_bar_intro( 'rs_intro' ),
	yoru_bar_panel( 'Y16', 'rs_p_sub', 'rs_p_h', array( 'rs_s0b' ) ),
	yoru_bar_reserve_rows(),
	yoru_bar_reserve_form(),
	yoru_bar_sect( 'rs_s1h', array( 'rs_s1b' ) ),
	yoru_bar_sect( 'rs_s2h', array( 'rs_s2b' ), 'yb-sect--lifted' ),
	yoru_bar_next( 'the-list' ),
);
echo implode( "\n\n", $yb ); // phpcs:ignore WordPress.Security.EscapeOutput
