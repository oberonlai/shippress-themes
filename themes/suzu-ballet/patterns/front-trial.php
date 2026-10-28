<?php
/**
 * Title: Home: book a trial
 * Slug: suzu-ballet/front-trial
 * Categories: suzu-ballet
 * Keywords: ballet, dance school, studio
 * Viewport Width: 1440
 * Description: Close: the trial-class steps and address on the left, an arch-topped photograph on the right.
 */
$t = 'suzu_ballet_t';
?>
<?php
echo sb_open( 'sb-sec sb-trial', 'section', 'full' ) . "\n" . sb_open( 'sb-wrap sb-trial__grid' ) . "\n";
echo sb_open( 'sb-trial__text sp-reveal sp-reveal--up' ) . "\n" . sb_h( 2, 'sb-h2 sb-trial__h', $t( 'tri_h' ) ) . "\n\n" . sb_p( 'sb-trial__lead', $t( 'tri_lead' ) ) . "\n\n";
foreach ( array( 1, 2, 3, 4 ) as $n ) {
	echo sb_open( 'sb-step' ) . "\n" . sb_p( 'sb-step__n', (string) $n ) . "\n\n" . sb_p( 'sb-step__t', $t( "tri_{$n}" ) ) . "\n" . sb_close() . "\n\n";
}
echo sb_open( 'sb-trial__btns' ) . "\n" . sb_pill( '/trial/', $t( 'tri_cta' ) ) . "\n\n" . sb_outline( '/timetable/', $t( 'tri_cta2' ) ) . "\n" . sb_close() . "\n\n";
echo sb_p( 'sb-trial__visit', $t( 'tri_visit' ) ) . "\n" . sb_close() . "\n\n";
echo sb_img( 'b15-entrance.webp', $t( 'tri_alt' ), 'sb-trial__photo' ) . "\n";
echo sb_close() . "\n" . sb_close( 'section' );
