<?php
/**
 * Title: Page: On Service
 * Slug: yoru-bar/page-on-service
 * Categories: yoru-bar
 * Inserter: false
 * Viewport Width: 1440
 * Description: Framed head, rota table, Margit and Lucía panels, Hana circle, three people.
 */

$yb = array(
	yoru_bar_pagehead( 'Y1', 'os', '55' ),
	yoru_bar_intro( 'os_intro' ),
	yoru_bar_tablesect( 'os_rota_h', yoru_bar_table( array( array( 'rota_wed', 'rota_kt', 'rota_h' ), array( 'rota_thu', 'rota_kl', 'rota_h' ), array( 'rota_fri', 'rota_ml', 'rota_h' ), array( 'rota_sat', 'rota_mk', 'rota_h' ), array( 'rota_sun', 'rota_lt', 'rota_ht' ) ), 'yb-table--rota' ), 'os_s0b' ),
	yoru_bar_panel( 'Y5', 'os_m_sub', 'os_m_h', array( 'os_margit' ) ),
	yoru_bar_panel( 'Y2', 'os_l_sub', 'os_l_h', array( 'os_lucia' ), true ),
	yoru_bar_circle( 'Y16', 'os_c_sub', 'os_c_h', array( 'os_hana' ) ),
	yoru_bar_person( 'os_k_sub', 'os_k_h', 'os_kofi' ),
	yoru_bar_person( 'os_t_sub', 'os_t_h', 'os_theo' ),
	yoru_bar_person( 'os_s_sub', 'os_s_h', 'os_samir' ),
	yoru_bar_sect( 'os_team_h', array( 'os_team' ) ),
	yoru_bar_next( 'our-story' ),
);
echo implode( "\n\n", $yb ); // phpcs:ignore WordPress.Security.EscapeOutput
