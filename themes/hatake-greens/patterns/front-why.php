<?php
/**
 * Title: Home: why the crate is short
 * Slug: hatake-greens/front-why
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: A huge statement, three reasons in two columns and a full-width misty field photo.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-sec hg-why', 'section', 'full', 'why' ) . "\n" . hg_open( 'hg-wrap' ) . "\n";
echo hg_label( $t( 'why_label' ), 'sp-reveal sp-reveal--up' ) . "\n\n";
echo hg_h( 2, 'hg-statement sp-reveal sp-reveal--up', esc_html( $t( 'why_h' ) ) ) . "\n\n";
echo hg_open( 'hg-why__cols' ) . "\n";
foreach ( array( 'why_p1', 'why_p2', 'why_p3' ) as $k ) {
	echo hg_p( 'hg-prose sp-reveal sp-reveal--up', esc_html( $t( $k ) ) ) . "\n\n";
}
echo hg_close() . "\n" . hg_close() . "\n\n";
echo hg_open( 'hg-band', 'div', 'full' ) . "\n" . hg_img( 'hk-03.webp', $t( 'alt_hk-03' ), 'hg-band__img' ) . "\n" . hg_close() . "\n";
echo hg_close( 'section' );
