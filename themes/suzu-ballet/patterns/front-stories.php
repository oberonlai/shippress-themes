<?php
/**
 * Title: Home: stories
 * Slug: suzu-ballet/front-stories
 * Categories: suzu-ballet
 * Keywords: ballet, dance school, studio
 * Viewport Width: 1440
 * Description: Three horizontal story rows with round masked thumbnails; one small photo chip sits inside the heading.
 */
$t = 'suzu_ballet_t';
?>
<?php
echo sb_open( 'sb-sec sb-stories', 'section', 'full' ) . "\n" . sb_open( 'sb-wrap' ) . "\n";
echo sb_h( 2, 'sb-h2 sb-stories__h sp-reveal sp-reveal--up', esc_html( $t( 'sto_h1' ) ) . ' <img class="sb-chip" src="' . sb_url( 'b10-juniors.webp' ) . '" alt="' . esc_attr( $t( 'sto_chip_alt' ) ) . '"/> ' . $t( 'sto_h2' ) ) . "\n\n";
foreach ( array( 1 => 'b12-bench.webp', 2 => 'b13-ribbons.webp', 3 => 'b14-pianist-hands.webp' ) as $n => $file ) {
	echo sb_open( 'sb-story' ) . "\n" . sb_img( $file, $t( "sto_{$n}_alt" ), 'sb-story__thumb sp-reveal sp-reveal--mask' ) . "\n\n";
	echo sb_open( 'sb-story__body' ) . "\n" . sb_h( 3, 'sb-story__t', $t( "sto_{$n}_t" ) ) . "\n\n" . sb_p( 'sb-story__p', $t( "sto_{$n}_p" ) ) . "\n" . sb_close() . "\n\n";
	echo sb_p( 'sb-story__more', '<a href="/journal/">' . esc_html( $t( 'sto_read' ) ) . '</a>' ) . "\n" . sb_close() . "\n\n";
}
echo sb_close() . "\n" . sb_close( 'section' );
