<?php
/**
 * Title: Home: intro with facts
 * Slug: homura-safety/front-intro
 * Categories: homura-safety
 * Keywords: about, intro, facts
 * Viewport Width: 1440
 * Description: A short-rule title on the left, two narrative paragraphs on the right and a hairline row of three counted facts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"about","className":"hs-sec hs-intro","layout":{"type":"default"}} -->
<section id="about" class="wp-block-group alignfull hs-sec hs-intro"><!-- wp:group {"align":"wide","className":"hs-intro__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-intro__grid"><!-- wp:group {"className":"hs-title","layout":{"type":"default"}} -->
<div class="wp-block-group hs-title"><!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up"><?php echo esc_html( homura_safety_t( 'in_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hs-title__sub"} -->
<p class="hs-title__sub"><?php echo esc_html( homura_safety_t( 'in_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-intro__body sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group hs-intro__body sp-stagger"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( homura_safety_t( 'in_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( homura_safety_t( 'in_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"hs-facts","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-facts"><!-- wp:group {"className":"hs-fact","layout":{"type":"default"}} -->
<div class="wp-block-group hs-fact"><!-- wp:paragraph {"className":"hs-fact__n sp-reveal sp-count"} -->
<p class="hs-fact__n sp-reveal sp-count"><?php echo esc_html( homura_safety_t( 'in_n1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-fact__l"} -->
<p class="hs-fact__l"><?php echo esc_html( homura_safety_t( 'in_l1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-fact","layout":{"type":"default"}} -->
<div class="wp-block-group hs-fact"><!-- wp:paragraph {"className":"hs-fact__n sp-reveal sp-count"} -->
<p class="hs-fact__n sp-reveal sp-count"><?php echo esc_html( homura_safety_t( 'in_n2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-fact__l"} -->
<p class="hs-fact__l"><?php echo esc_html( homura_safety_t( 'in_l2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hs-fact","layout":{"type":"default"}} -->
<div class="wp-block-group hs-fact"><!-- wp:paragraph {"className":"hs-fact__n sp-reveal sp-count"} -->
<p class="hs-fact__n sp-reveal sp-count"><?php echo esc_html( homura_safety_t( 'in_n3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hs-fact__l"} -->
<p class="hs-fact__l"><?php echo esc_html( homura_safety_t( 'in_l3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
