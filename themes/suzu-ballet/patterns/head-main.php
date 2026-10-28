<?php
/**
 * Title: Header: split navigation
 * Slug: suzu-ballet/head-main
 * Categories: suzu-ballet
 * Inserter: false
 */
$t = 'suzu_ballet_t';
echo sb_open( 'sb-header', 'header', 'full' ) . "\n" . sb_open( 'sb-header__bar' ) . "\n";
echo sb_p( 'sb-hl sb-hl--l', '<a href="/classes/">' . esc_html( $t( 'nav_classes' ) ) . '</a><a href="/timetable/">' . esc_html( $t( 'nav_timetable' ) ) . '</a><a href="/teachers/">' . esc_html( $t( 'nav_teachers' ) ) . '</a>' ) . "\n\n";
echo '<!-- wp:site-title {"level":0,"className":"sb-brand"} /-->' . "\n\n";
echo sb_open( 'sb-header__end' ) . "\n";
echo sb_p( 'sb-hl sb-hl--r', '<a href="/about/">' . esc_html( $t( 'nav_about' ) ) . '</a><a href="/contact/">' . esc_html( $t( 'nav_contact' ) ) . '</a>' ) . "\n\n";
echo sb_pill( '/trial/', $t( 'nav_book' ), 'sb-pill--head' ) . "\n\n";
echo '<!-- wp:navigation {"overlayMenu":"always","icon":"menu","overlayBackgroundColor":"base","overlayTextColor":"deep","className":"sb-nav","layout":{"type":"flex","justifyContent":"right"}} /-->' . "\n";
echo sb_close() . "\n" . sb_close() . "\n" . sb_close( 'header' );
