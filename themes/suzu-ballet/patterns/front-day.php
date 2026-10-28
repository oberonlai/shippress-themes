<?php
/**
 * Title: Home: the day, hour by hour
 * Slug: suzu-ballet/front-day
 * Categories: suzu-ballet
 * Keywords: ballet, dance school, studio
 * Viewport Width: 1440
 * Description: Three time-of-day rows, each with its own sticky 4:5 photo beside a ruled list of the Wednesday classes.
 */
$t = 'suzu_ballet_t';
?>
<?php
echo sb_open( 'sb-sec sb-day', 'section', 'full' ) . "\n" . sb_open( 'sb-wrap' ) . "\n" . sb_h( 2, 'sb-h2 sb-day__h', $t( 'day_h' ) ) . "\n\n";
$photos = array( 1 => 'b07-morning.webp', 2 => 'b08-prebal.webp', 3 => 'b09-evening.webp' );
foreach ( $photos as $n => $file ) {
	echo sb_open( 'sb-dayrow' ) . "\n" . sb_img( $file, $t( "day_{$n}_alt" ), 'sb-dayrow__photo' ) . "\n\n";
	echo sb_open( 'sb-dayrow__text sp-reveal sp-reveal--up' ) . "\n" . sb_p( 'sb-label', $t( "day_{$n}_l" ) ) . "\n\n" . sb_h( 3, 'sb-dayrow__h', $t( "day_{$n}_h" ) ) . "\n\n" . sb_p( 'sb-prose', $t( "day_{$n}_p" ) ) . "\n\n";
	foreach ( array( 'r1', 'r2' ) as $r ) {
		$row = explode( '|', $t( "day_{$n}_{$r}" ) );
		echo sb_open( 'sb-trow' ) . "\n" . sb_p( 'sb-trow__t', $row[0] ) . "\n\n" . sb_p( 'sb-trow__c', $row[1] ) . "\n\n" . sb_p( 'sb-trow__w', $row[2] ) . "\n" . sb_close() . "\n\n";
	}
	echo sb_p( 'sb-quote', $t( "day_{$n}_q" ) ) . "\n" . sb_close() . "\n" . sb_close() . "\n\n";
}
echo sb_close() . "\n" . sb_close( 'section' );
