<?php
/**
 * Title: Home: Wednesday day strip
 * Slug: suzu-ballet/front-day-strip
 * Categories: suzu-ballet
 * Keywords: ballet, dance school, studio
 * Viewport Width: 1440
 * Description: A band with seven time cards that scroll sideways inside their own row.
 */
$t = 'suzu_ballet_t';
?>
<?php
echo sb_open( 'sb-sec sb-strip', 'section', 'full' ) . "\n" . sb_open( 'sb-wrap' ) . "\n";
echo sb_p( 'sb-label', $t( 'strip_label' ) ) . "\n\n" . sb_h( 2, 'sb-h2 sb-h2--s', $t( 'strip_h' ) ) . "\n" . sb_close() . "\n\n";
echo sb_open( 'sb-strip__frame' ) . "\n" . sb_open( 'sb-strip__row' ) . "\n";
$times = array( '07:00', '10:00', '15:45', '16:30', '17:30', '19:15', '20:30' );
foreach ( $times as $i => $time ) {
	$n = $i + 1;
	echo sb_open( 'sb-card' ) . "\n" . sb_p( 'sb-card__time', $time ) . "\n\n" . sb_h( 3, 'sb-card__n', $t( "strip_{$n}_n" ) ) . "\n\n" . sb_p( 'sb-card__m', $t( "strip_{$n}_m" ) ) . "\n\n" . sb_p( 'sb-card__s', $t( "strip_{$n}_s" ) ) . "\n" . sb_close() . "\n\n";
}
echo sb_close() . "\n\n" . sb_p( 'sb-strip__hint', $t( 'strip_hint' ) ) . "\n" . sb_close() . "\n" . sb_close( 'section' );
