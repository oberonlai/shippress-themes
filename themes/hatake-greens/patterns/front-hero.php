<?php
/**
 * Title: Home: photo hero
 * Slug: hatake-greens/front-hero
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Full-bleed documentary photo that moves slower than the page, a wide-tracked white headline at the bottom left, a small Latin sub-line and one Join pill.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-hero sp-parallax', 'section', 'full', 'hero' ) . "\n";
echo hg_open( 'hg-hero__bg sp-parallax__layer' ) . "\n" . hg_img( 'hk-01.webp', $t( 'alt_hk-01' ), 'hg-hero__img' ) . "\n" . hg_close() . "\n\n";
echo hg_open( 'hg-hero__fg' ) . "\n";
echo hg_h( 1, 'hg-hero__h', esc_html( $t( 'hero_l1' ) ) . '<br>' . esc_html( $t( 'hero_l2' ) ) ) . "\n\n";
echo hg_p( 'hg-hero__sub', esc_html( $t( 'hero_sub' ) ) ) . "\n\n";
echo hg_pill( '#plan', $t( 'hero_cta' ), 'hg-pill--hero', 'outline' ) . "\n";
echo hg_close() . "\n" . hg_close( 'section' );
