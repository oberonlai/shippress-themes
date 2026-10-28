<?php
/**
 * Title: Page: Private Counter
 * Slug: yoru-bar/page-private-counter
 * Categories: yoru-bar
 * Inserter: false
 * Viewport Width: 1440
 * Description: Framed head, Mondays/Tuesdays panel, facts rows, menus circle, how to arrange.
 */

$yb = array(
	yoru_bar_pagehead( 'Y14', 'pc' ),
	yoru_bar_intro( 'pc_intro' ),
	yoru_bar_panel( 'Y12', 'pc_p_sub', 'pc_p_h', array( 'pc_s0b' ) ),
	yoru_bar_tablesect( 'pc_facts_h', yoru_bar_table( array( array( 'pc_f1', 'pc_v1' ), array( 'pc_f2', 'pc_v2' ), array( 'pc_f3', 'pc_v3' ), array( 'pc_f4', 'pc_v4' ), array( 'pc_f5', 'pc_v5' ), array( 'pc_f6', 'pc_v6' ) ), 'yb-table--facts' ) ),
	yoru_bar_circle( 'Y11', 'pc_c_sub', 'pc_c_h', array( 'pc_s1b' ) ),
	yoru_bar_sect( 'pc_s2h', array( 'pc_s2b' ) ),
	yoru_bar_mailto( 'pc_mail' ),
	yoru_bar_next( 'kitchen' ),
);
echo implode( "\n\n", $yb ); // phpcs:ignore WordPress.Security.EscapeOutput
