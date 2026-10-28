<?php
/**
 * Title: Home: how a box is packed
 * Slug: hatake-greens/front-packing
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Three tagged photo cards for 5:00, 7:30 and 9:00.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-sec hg-packing', 'section', 'full', 'packing' ) . "\n" . hg_open( 'hg-wrap' ) . "\n";
echo hg_label( $t( 'pack_label' ), 'sp-reveal sp-reveal--up' ) . "\n\n";
echo hg_h( 2, 'hg-h2 sp-reveal sp-reveal--up', esc_html( $t( 'pack_h' ) ) ) . "\n\n";
echo hg_open( 'hg-grid sp-stagger' ) . "\n";
foreach ( array( 1 => 'hk-09', 2 => 'hk-10', 3 => 'hk-11' ) as $n => $id ) {
	echo hg_card( $id . '.webp', $t( 'alt_' . $id ), $t( 'p' . $n . '_t' ), $t( 'p' . $n . '_tag' ), $t( 'p' . $n . '_p' ), $t( 'pack_link' ) ) . "\n\n";
}
echo hg_close() . "\n" . hg_close() . "\n" . hg_close( 'section' );
