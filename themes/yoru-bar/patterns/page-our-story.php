<?php
/**
 * Title: Page: Our Story
 * Slug: yoru-bar/page-our-story
 * Categories: yoru-bar
 * Inserter: false
 * Viewport Width: 1440
 * Description: Framed head, Since 2017 panel, three narrative sections, Margit circle.
 */

$yb = array(
	yoru_bar_pagehead( 'Y6', 'ou' ),
	yoru_bar_intro( 'ou_intro' ),
	yoru_bar_panel( 'Y14', 'ou_p_sub', 'ou_p_h', array( 'ou_s0b' ) ),
	yoru_bar_sect( 'ou_s1h', array( 'ou_s1b' ) ),
	yoru_bar_sect( 'ou_s2h', array( 'ou_s2b' ) ),
	yoru_bar_circle( 'Y5', 'ou_c_sub', 'ou_c_h', array( 'os_margit' ) ),
	yoru_bar_next( 'private-counter' ),
);
echo implode( "\n\n", $yb ); // phpcs:ignore WordPress.Security.EscapeOutput
