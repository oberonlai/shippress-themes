<?php
/**
 * Title: Page: About
 * Slug: mame-coffee/page-about
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: About page: backdrop-and-frame head, side label, wide photograph beside a ruled column and hairline story rows.
 */
$t = 'mame_coffee_t';
echo mc_pagehead( '03-origin.webp', $t( 'img_03' ), '17-cup.webp', $t( 'img_17' ), $t( 'about_title' ), $t( 'about_intro' ), true ) . "\n\n";
echo mc_open( 'mc-sec mc-inner', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-side-grid' ) . "\n";
echo mc_p( 'mc-side', $t( 'about_label' ) ) . "\n\n" . mc_open( 'mc-side-main' ) . "\n";
echo mc_open( 'mc-grid mc-grid--3' ) . "\n";
echo mc_open( 'mc-card mc-card--wide' ) . "\n" . mc_rule() . "\n\n" . mc_p( 'mc-card__line mc-card__line--top', $t( 'about_cap' ) ) . "\n\n" . mc_wide( '14-trip.webp', $t( 'img_14' ) ) . "\n" . mc_close() . "\n\n";
echo mc_sect( $t( 'about_h1' ), $t( 'about_b1' ) ) . "\n" . mc_close() . "\n\n";
echo mc_open( 'mc-srows' ) . "\n" . mc_srow( $t( 'about_h2' ), $t( 'about_b2' ) ) . "\n\n" . mc_srow( $t( 'about_h3' ), $t( 'about_b3' ) ) . "\n" . mc_close() . "\n";
echo mc_close() . "\n" . mc_close() . "\n" . mc_close( 'section' ) . "\n\n";
echo mc_closing( $t( 'about_close' ), '/people/', $t( 'about_close_more' ) );
