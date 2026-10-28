<?php
/**
 * Title: Page: The List
 * Slug: yoru-bar/page-the-list
 * Categories: yoru-bar
 * Inserter: false
 * Viewport Width: 1440
 * Description: Framed head, price table, Short List panel, Zero Proof circle.
 */

$yb = array(
	yoru_bar_pagehead( 'Y17', 'tl' ),
	yoru_bar_intro( 'tl_intro' ),
	yoru_bar_tablesect( 'tl_table_h', yoru_bar_table( array( array( 'pr1', 'pd1', 'pp1' ), array( 'pr2', 'pd2', 'pp2' ), array( 'pr3', 'pd3', 'pp3' ), array( 'pr4', 'pd4', 'pp4' ), array( 'pr5', 'pd5', 'pp5' ), array( 'pr6', 'pd6', 'pp6' ), array( 'pr7', 'pd7', 'pp7' ), array( 'pr8', 'pd8', 'pp8' ) ), 'yb-table--price' ), 'tl_note' ),
	yoru_bar_sect( 'tl_s0h', array( 'tl_s0b' ) ),
	yoru_bar_panel( 'Y10', 'tl_p_sub', 'tl_p_h', array( 'tl_s1b' ) ),
	yoru_bar_circle( 'Y9', 'tl_c_sub', 'tl_c_h', array( 'tl_s2b' ) ),
	yoru_bar_next( 'the-build' ),
);
echo implode( "\n\n", $yb ); // phpcs:ignore WordPress.Security.EscapeOutput
