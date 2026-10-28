<?php
/**
 * Title: Home: three reasons
 * Slug: suzu-ballet/front-reasons
 * Categories: suzu-ballet
 * Keywords: ballet, dance school, studio
 * Viewport Width: 1440
 * Description: Three columns with 1 px vertical hairlines and 65 px thin line icons.
 */
$t = 'suzu_ballet_t';
?>
<?php
echo sb_open( 'sb-sec sb-reasons', 'section', 'full' ) . "\n" . sb_open( 'sb-wrap' ) . "\n" . sb_p( 'sb-label sb-label--c', $t( 'why_label' ) ) . "\n\n" . sb_open( 'sb-cols sp-stagger' ) . "\n";
foreach ( array( 1 => 'barre', 2 => 'keys', 3 => 'circles' ) as $n => $ico ) {
	echo sb_open( 'sb-col sp-reveal sp-reveal--up' ) . "\n" . sb_deco( 'sb-ico sb-ico--' . $ico ) . "\n\n" . sb_h( 3, 'sb-col__t', $t( "why_{$n}_t" ) ) . "\n\n" . sb_p( 'sb-col__p', $t( "why_{$n}_p" ) ) . "\n" . sb_close() . "\n\n";
}
echo sb_close() . "\n" . sb_close() . "\n" . sb_close( 'section' );
