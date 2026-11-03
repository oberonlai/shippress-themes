<?php
/**
 * Title: Bottom line: bracket marks, harbour line and Book a berth
 * Slug: tomari-marina/bottom-line
 * Categories: tomari-marina
 * Keywords: bottom line, cta
 * Viewport Width: 1440
 * Description: The bottom line used under the hero, the booking close and the footer: three bracketed anchors, the harbour line, and an outline box with running chevrons.
 */
?>
<!-- wp:group {"className":"tm-bline","layout":{"type":"default"}} -->
<div class="wp-block-group tm-bline"><!-- wp:group {"className":"tm-bline__marks","layout":{"type":"flex"}} -->
<div class="wp-block-group tm-bline__marks"><!-- wp:paragraph {"className":"tm-bline__mark"} -->
<p class="tm-bline__mark"><a href="#pontoon"><?php echo wp_kses_post( tomari_marina_t( 'bottom_line_01' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tm-bline__mark"} -->
<p class="tm-bline__mark"><a href="#round"><?php echo wp_kses_post( tomari_marina_t( 'bottom_line_02' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"tm-bline__mark"} -->
<p class="tm-bline__mark"><a href="#season"><?php echo wp_kses_post( tomari_marina_t( 'bottom_line_03' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"tm-bline__harbour"} -->
<p class="tm-bline__harbour"><?php echo wp_kses_post( tomari_marina_t( 'bottom_line_04' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"tm-cta","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cta"><!-- wp:paragraph {"className":"tm-cta__text"} -->
<p class="tm-cta__text"><a href="<?php echo esc_url( home_url( '/season-fees/' ) ); ?>"><?php echo wp_kses_post( tomari_marina_t( 'bottom_line_05' ) ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"tm-cta__chev sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group tm-cta__chev sp-marquee"><!-- wp:paragraph -->
<p>››››››</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p aria-hidden="true">››››››</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->