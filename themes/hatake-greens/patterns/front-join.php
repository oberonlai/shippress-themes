<?php
/**
 * Title: Home: join band
 * Slug: hatake-greens/front-join
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Full-bleed late-afternoon table photo under a dim scrim, a huge white closing line at the bottom left and the Join pill.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-join sp-parallax', 'section', 'full', 'join' ) . "\n";
echo hg_open( 'hg-join__bg sp-parallax__layer' ) . "\n" . hg_img( 'hk-16.webp', $t( 'alt_hk-16' ), 'hg-join__img' ) . "\n" . hg_close() . "\n\n";
echo hg_open( 'hg-join__fg' ) . "\n";
echo hg_h( 2, 'hg-join__h', esc_html( $t( 'join_h' ) ) ) . "\n\n";
echo hg_p( 'hg-join__p', esc_html( $t( 'join_p' ) ) ) . "\n\n";
echo hg_pill( '/waitlist/', $t( 'join_cta' ), 'hg-pill--hero', 'outline' ) . "\n";
echo hg_close() . "\n" . hg_close( 'section' );
