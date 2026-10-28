<?php
/**
 * Title: Home: member stories
 * Slug: hatake-greens/front-stories
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Three plain columns with a small square photo or initials, the household and one quote each.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-sec hg-stories', 'section', 'full', 'stories' ) . "\n" . hg_open( 'hg-wrap' ) . "\n";
echo hg_label( $t( 'st_label' ), 'sp-reveal sp-reveal--up' ) . "\n\n";
echo hg_h( 2, 'hg-h2 sp-reveal sp-reveal--up', esc_html( $t( 'st_h' ) ) ) . "\n\n";
echo hg_open( 'hg-stories__row sp-stagger' ) . "\n";
foreach ( array( 1, 2, 3 ) as $n ) {
	echo hg_open( 'hg-story sp-reveal sp-reveal--up' ) . "\n";
	if ( 1 === $n ) {
		echo hg_img( 'hk-14.webp', $t( 'alt_hk-14' ), 'hg-story__img' ) . "\n\n";
	} else {
		echo hg_p( 'hg-story__ini', esc_html( $t( 'st' . $n . '_i' ) ) ) . "\n\n";
	}
	echo hg_p( 'hg-story__q', esc_html( $t( 'st' . $n . '_q' ) ) ) . "\n\n";
	echo hg_p( 'hg-story__n', esc_html( $t( 'st' . $n . '_n' ) ) . ' <span>' . esc_html( $t( 'st' . $n . '_m' ) ) . '</span>' ) . "\n";
	echo hg_close() . "\n\n";
}
echo hg_close() . "\n" . hg_close() . "\n" . hg_close( 'section' );
