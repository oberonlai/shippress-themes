<?php
/**
 * Title: Home: morning in the barn
 * Slug: hatake-greens/front-barn
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Full-bleed photograph of the packing barn, revealed with a wipe, one white caption at the bottom left.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-barn', 'section', 'full', 'barn' ) . "\n";
echo hg_open( 'hg-barn__fig sp-reveal sp-reveal--wipe' ) . "\n" . hg_img( 'hk-08.webp', $t( 'alt_hk-08' ), 'hg-barn__img' ) . "\n" . hg_close() . "\n\n";
echo hg_open( 'hg-barn__cap' ) . "\n" . hg_label( $t( 'barn_label' ), 'hg-label--leaf' ) . "\n\n" . hg_p( 'hg-barn__p', esc_html( $t( 'barn_cap' ) ) ) . "\n" . hg_close() . "\n";
echo hg_close( 'section' );
