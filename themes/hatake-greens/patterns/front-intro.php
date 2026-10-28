<?php
/**
 * Title: Home: intro strip
 * Slug: hatake-greens/front-intro
 * Categories: hatake-greens
 * Viewport Width: 1440
 * Description: Sage-white strip with two paragraphs and one tall portrait photo.
 */
$t = 'hatake_greens_t';
?>
<?php
echo hg_open( 'hg-sec hg-intro', 'section', 'full', 'intro' ) . "\n" . hg_open( 'hg-wrap hg-intro__in' ) . "\n";
echo hg_open( 'hg-intro__txt' ) . "\n";
echo hg_label( $t( 'intro_label' ), 'sp-reveal sp-reveal--up' ) . "\n\n";
echo hg_h( 2, 'hg-h2 sp-reveal sp-reveal--up', esc_html( $t( 'intro_h' ) ) ) . "\n\n";
echo hg_p( 'hg-prose sp-reveal sp-reveal--up', esc_html( $t( 'intro_p1' ) ) ) . "\n\n";
echo hg_p( 'hg-prose sp-reveal sp-reveal--up', esc_html( $t( 'intro_p2' ) ) ) . "\n" . hg_close() . "\n\n";
echo hg_img( 'hk-02.webp', $t( 'alt_hk-02' ), 'hg-intro__img' ) . "\n";
echo hg_close() . "\n" . hg_close( 'section' );
