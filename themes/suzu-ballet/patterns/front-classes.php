<?php
/**
 * Title: Home: classes and fees split
 * Slug: suzu-ballet/front-classes
 * Categories: suzu-ballet
 * Keywords: ballet, dance school, studio
 * Viewport Width: 1440
 * Description: Full-bleed 50/50: a mauve panel with a white harlequin lattice and a giant caps title on the left, one inset 3:4 portrait on white on the right.
 */
$t = 'suzu_ballet_t';
?>
<?php
echo sb_open( 'sb-split', 'section', 'full' ) . "\n";
echo sb_open( 'sb-split__panel' ) . "\n" . sb_open( 'sb-split__in sp-reveal sp-reveal--up' ) . "\n" . sb_h( 2, 'sb-split__h', $t( 'cls_h' ) ) . "\n\n" . sb_p( 'sb-split__sub', $t( 'cls_sub' ) ) . "\n\n" . sb_p( 'sb-split__p', $t( 'cls_p' ) ) . "\n\n" . sb_outline( '/classes/', $t( 'cls_cta' ) ) . "\n" . sb_close() . "\n" . sb_close() . "\n\n";
echo sb_open( 'sb-split__photo-side' ) . "\n" . sb_img( 'b06-tendu.webp', $t( 'cls_alt' ), 'sb-split__photo sp-reveal sp-reveal--mask' ) . "\n" . sb_close() . "\n";
echo sb_close( 'section' );
