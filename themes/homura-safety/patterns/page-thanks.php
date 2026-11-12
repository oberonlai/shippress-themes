<?php
/**
 * Title: Page: Thank you
 * Slug: homura-safety/page-thanks
 * Categories: homura-safety
 * Viewport Width: 1440
 * Description: Thank you page: plain text under a dark page head.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hs-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hs-pagehead"><!-- wp:group {"align":"wide","className":"hs-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hs-pagehead__in"><!-- wp:paragraph {"className":"hs-barword hs-barword--page"} -->
<p class="hs-barword hs-barword--page" aria-hidden="true"><?php echo esc_html( homura_safety_t( 'pw_thanks' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hs-pagehead__title"} -->
<h1 class="wp-block-heading hs-pagehead__title"><?php echo esc_html( homura_safety_t( 'thanks_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"hs-legal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hs-legal"><!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'thanks_h1' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'thanks_b1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( homura_safety_t( 'thanks_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( homura_safety_t( 'thanks_b2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/process/"><?php echo esc_html( homura_safety_t( 'th_link1' ) ); ?></a> · <a href="/journal/"><?php echo esc_html( homura_safety_t( 'th_link2' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
