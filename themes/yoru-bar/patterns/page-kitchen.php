<?php
/**
 * Title: Page: Kitchen
 * Slug: yoru-bar/page-kitchen
 * Categories: yoru-bar
 * Inserter: false
 * Viewport Width: 1440
 * Description: Framed head, Samir's Board panel, why food circle, late seating note.
 */

$yb = array(
	yoru_bar_pagehead( 'Y15', 'kt' ),
	yoru_bar_intro( 'kt_intro' ),
	yoru_bar_panel( 'Y11', 'kt_p_sub', 'kt_p_h', array( 'kt_s0b' ) ),
	yoru_bar_circle( 'Y7', 'kt_c_sub', 'kt_c_h', array( 'kt_s1b' ) ),
	yoru_bar_sect( 'kt_s2h', array( 'kt_s2b' ) ),
	yoru_bar_next( 'visit' ),
);
echo implode( "\n\n", $yb ); // phpcs:ignore WordPress.Security.EscapeOutput
