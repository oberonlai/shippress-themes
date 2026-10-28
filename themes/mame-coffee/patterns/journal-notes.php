<?php
/**
 * Title: Page: Journal notes
 * Slug: mame-coffee/journal-notes
 * Categories: mame-coffee
 * Keywords: coffee, roastery, cafe
 * Viewport Width: 1440
 * Description: Journal notes: hairline story rows under the posts.
 */
$t = 'mame_coffee_t';
echo mc_open( 'mc-sec mc-inner mc-notes', 'section', 'full' ) . "\n" . mc_open( 'mc-wrap mc-srows' ) . "\n";
foreach ( array( 1, 2, 3 ) as $i ) {
	echo mc_srow( $t( "journal_h{$i}" ), $t( "journal_b{$i}" ) ) . "\n\n";
}
echo mc_close() . "\n" . mc_close( 'section' );
