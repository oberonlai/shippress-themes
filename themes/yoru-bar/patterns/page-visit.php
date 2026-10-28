<?php
/**
 * Title: Page: Visit
 * Slug: yoru-bar/page-visit
 * Categories: yoru-bar
 * Inserter: false
 * Viewport Width: 1440
 * Description: Framed head, Find Maanstraat panel, opening hours, access, contact circle.
 */

$yb = array(
	yoru_bar_pagehead( 'Y6', 'vs' ),
	yoru_bar_intro( 'vs_intro' ),
	yoru_bar_panel( 'Y16', 'vs_p_sub', 'vs_p_h', array( 'vs_s0b' ) ),
	yoru_bar_tablesect( 'vs_hours_h', yoru_bar_table( array( array( 'vs_d1', 'vs_t1', 'vs_n1' ), array( 'vs_d2', 'vs_t2', 'vs_n2' ) ), 'yb-table--hours' ) ),
	yoru_bar_sect( 'vs_s1h', array( 'vs_s1b' ) ),
	yoru_bar_circle( 'Y12', 'vs_c_sub', 'vs_c_h', array( 'vs_s2b', 'vs_email', 'vs_phone' ) ),
	yoru_bar_next( 'reserve' ),
);
echo implode( "\n\n", $yb ); // phpcs:ignore WordPress.Security.EscapeOutput
