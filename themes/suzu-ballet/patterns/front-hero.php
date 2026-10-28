<?php
/**
 * Title: Home: arch hero
 * Slug: suzu-ballet/front-hero
 * Categories: suzu-ballet
 * Keywords: ballet, dance school, studio
 * Viewport Width: 1440
 * Description: Arch window: a high-key photograph clipped to a tall semicircle-topped arch, a thin caps headline crossing both shoulders, a spaced sub-label and a harlequin lattice in the corners.
 */
$t = 'suzu_ballet_t';
?>
<?php
echo sb_open( 'sb-hero', 'section', 'full' ) . "\n";
echo sb_deco( 'sb-lat sb-lat--l' ) . "\n\n" . sb_deco( 'sb-lat sb-lat--r' ) . "\n\n";
echo sb_open( 'sb-hero__text' ) . "\n";
echo sb_h( 1, 'sb-hero__h', '<span class="sb-l1">' . esc_html( $t( 'hero_l1' ) ) . '</span> <span class="sb-l2">' . esc_html( $t( 'hero_l2' ) ) . '</span>' ) . "\n\n";
echo sb_p( 'sb-hero__sub', $t( 'hero_sub' ) ) . "\n" . sb_close() . "\n\n";
echo sb_open( 'sb-arch sp-parallax' ) . "\n" . sb_img( 'b01-hero.webp', $t( 'hero_alt' ) ) . "\n" . sb_close() . "\n";
echo sb_close( 'section' );
