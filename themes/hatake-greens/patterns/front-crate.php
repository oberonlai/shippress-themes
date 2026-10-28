<?php
/**
 * Title: Home: what is in the crate
 * Slug: hatake-greens/front-crate
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: A solid sage triangle holding the label and heading, followed by five 3:2 photo cards with bracket tags.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-sec hg-crate', 'section', 'full', 'crate' ) . "\n" . hg_open( 'hg-wrap' ) . "\n";
echo hg_open( 'hg-grid hg-grid--crate sp-stagger' ) . "\n";
echo hg_open( 'hg-tri-wrap sp-reveal sp-reveal--up' ) . "\n" . hg_open( 'hg-tri' ) . "\n";
echo hg_label( $t( 'crate_label' ), 'hg-label--leaf' ) . "\n\n";
echo hg_h( 2, 'hg-tri__h', esc_html( $t( 'crate_h_a' ) ) . '<br>' . esc_html( $t( 'crate_h_b' ) ) ) . "\n";
echo hg_close() . "\n" . hg_close() . "\n\n";
$imgs = array( 1 => 'hk-04', 2 => 'hk-05', 3 => 'hk-06', 4 => 'hk-07', 5 => 'hk-17' );
foreach ( $imgs as $n => $id ) {
	echo hg_card( $id . '.webp', $t( 'alt_' . $id ), $t( 'c' . $n . '_t' ), $t( 'c' . $n . '_tag' ), $t( 'c' . $n . '_p' ), $t( 'crate_link' ) ) . "\n\n";
}
echo hg_close() . "\n\n";
echo hg_p( 'hg-crate__lead', esc_html( $t( 'crate_lead' ) ) ) . "\n";
echo hg_close() . "\n" . hg_close( 'section' );
