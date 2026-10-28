<?php
/**
 * Title: Footer: wordmark and three columns
 * Slug: suzu-ballet/foot-main
 * Categories: suzu-ballet
 * Inserter: false
 */
$t = 'suzu_ballet_t';
echo sb_open( 'sb-foot-wrap' ) . "\n" . sb_p( 'sb-fname', $t( 'foot_name' ) ) . "\n\n" . sb_open( 'sb-fgrid' ) . "\n";
echo sb_open( 'sb-fcol' ) . "\n" . sb_p( 'sb-ft', $t( 'foot_addr_t' ) ) . "\n\n" . sb_p( 'sb-ftext', $t( 'foot_addr' ) ) . "\n" . sb_close() . "\n\n";
echo sb_open( 'sb-fcol' ) . "\n" . sb_p( 'sb-ft', $t( 'foot_hours_t' ) ) . "\n\n" . sb_p( 'sb-ftext', $t( 'foot_hours' ) ) . "\n" . sb_close() . "\n\n";
echo sb_open( 'sb-fcol' ) . "\n" . sb_p( 'sb-ft', $t( 'foot_nav_t' ) ) . "\n\n" . sb_p( 'sb-fnav', $t( 'foot_links' ) ) . "\n" . sb_close() . "\n" . sb_close() . "\n\n";
echo sb_p( 'sb-fcopy', $t( 'foot_copy' ) ) . "\n" . sb_close();
