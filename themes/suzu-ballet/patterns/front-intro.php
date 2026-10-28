<?php
/**
 * Title: Home: intro
 * Slug: suzu-ballet/front-intro
 * Categories: suzu-ballet
 * Keywords: ballet, dance school, studio
 * Viewport Width: 1440
 * Description: Two columns: two underlined statement lines on the left, two paragraphs and an outline pill on the right.
 */
$t = 'suzu_ballet_t';
?>
<?php
echo sb_open( 'sb-sec sb-intro', 'section', 'full' ) . "\n" . sb_open( 'sb-wrap sb-intro__grid' ) . "\n";
echo sb_open( 'sb-intro__lines sp-reveal sp-reveal--up' ) . "\n" . sb_p( 'sb-statement', '<span class="sb-u">' . esc_html( $t( 'intro_l1' ) ) . '</span> <span class="sb-u">' . esc_html( $t( 'intro_l2' ) ) . '</span>' ) . "\n" . sb_close() . "\n\n";
echo sb_open( 'sb-intro__text sp-reveal sp-reveal--up' ) . "\n" . sb_p( 'sb-prose', $t( 'intro_p1' ) ) . "\n\n" . sb_p( 'sb-prose', $t( 'intro_p2' ) ) . "\n\n" . sb_outline( '/about/', $t( 'intro_cta' ) ) . "\n" . sb_close() . "\n";
echo sb_close() . "\n" . sb_close( 'section' );
