<?php
/**
 * Title: Footer: wordmark and three columns
 * Slug: hatake-greens/foot-main
 * Categories: hatake-greens
 * Inserter: false
 * Viewport Width: 1440
 * Description: Wordmark with address, hours and links, a closing copyright line.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-foot-wrap' ) . "\n" . hg_p( 'hg-fname', $t( 'foot_name' ) ) . "\n\n" . hg_open( 'hg-fgrid' ) . "\n";
echo hg_open( 'hg-fcol' ) . "\n" . hg_p( 'hg-ft', $t( 'foot_addr_t' ) ) . "\n\n" . hg_p( 'hg-ftext', $t( 'foot_addr' ) ) . "\n" . hg_close() . "\n\n";
echo hg_open( 'hg-fcol' ) . "\n" . hg_p( 'hg-ft', $t( 'foot_hours_t' ) ) . "\n\n" . hg_p( 'hg-ftext', $t( 'foot_hours' ) ) . "\n" . hg_close() . "\n\n";
echo hg_open( 'hg-fcol' ) . "\n" . hg_p( 'hg-ft', $t( 'foot_nav_t' ) ) . "\n\n" . hg_p( 'hg-fnav', $t( 'foot_links' ) ) . "\n" . hg_close() . "\n" . hg_close() . "\n\n";
echo hg_p( 'hg-fcopy', $t( 'foot_copy' ) ) . "\n" . hg_close();
