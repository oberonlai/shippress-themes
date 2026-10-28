<?php
/**
 * Title: Page: The Build
 * Slug: yoru-bar/page-the-build
 * Categories: yoru-bar
 * Inserter: false
 * Viewport Width: 1440
 * Description: Framed head, white wash with the five steps, tile strip, Forty Turns panel, ice facts.
 */

$yb = array(
	yoru_bar_pagehead( 'Y8', 'tb' ),
	yoru_bar_build_wash(),
	yoru_bar_tiles( array( 'Y3', 'Y10', 'Y11', 'Y4' ) ),
	yoru_bar_panel( 'Y13', 'tb_p_sub', 'tb_p_h', array( 'tb_s1b' ) ),
	yoru_bar_sect( 'tb_s2h', array( 'tb_s2b' ) ),
	yoru_bar_next( 'on-service' ),
);
echo implode( "\n\n", $yb ); // phpcs:ignore WordPress.Security.EscapeOutput
