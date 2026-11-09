<?php
/**
 * Title: Home: sheet with the statement
 * Slug: koe-interpreters/front-statement
 * Categories: koe-interpreters
 * Keywords: interpreting, statement, about
 * Viewport Width: 1440
 * Description: The white sheet with 40px rounded top corners that rides over the hero: a three-line statement revealed line by line (the last line in the teal-to-amber gradient), two paragraphs and a link, with pale mint arcs in the lower-left corner.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ko-sheet ko-statement","anchor":"about","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull ko-sheet ko-statement"><!-- wp:group {"className":"ko-statement__in","layout":{"type":"default"}} -->
<div class="wp-block-group ko-statement__in"><!-- wp:group {"className":"ko-stmt sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group ko-stmt sp-stagger"><!-- wp:paragraph {"className":"ko-stmt__l sp-reveal sp-reveal--up"} -->
<p class="ko-stmt__l sp-reveal sp-reveal--up"><?php echo wp_kses_post( koe_interpreters_t( 'k0edfd0b7' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-stmt__l sp-reveal sp-reveal--up"} -->
<p class="ko-stmt__l sp-reveal sp-reveal--up"><?php echo wp_kses_post( koe_interpreters_t( 'k4080d5df' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-stmt__l sp-reveal sp-reveal--up"} -->
<p class="ko-stmt__l sp-reveal sp-reveal--up"><strong class="ko-grad"><?php echo wp_kses_post( koe_interpreters_t( 'k3f6d0d70' ) ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ko-statement__text","layout":{"type":"default"}} -->
<div class="wp-block-group ko-statement__text"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( koe_interpreters_t( 'k1849ca89' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph -->
<p><?php echo wp_kses_post( koe_interpreters_t( 'k4765335b' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ko-textlink"} -->
<p class="ko-textlink"><a href="#meeting-day"><?php echo wp_kses_post( koe_interpreters_t( 'kf32a0d7f' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
