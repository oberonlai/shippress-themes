<?php
/**
 * Title: Home: question statement
 * Slug: kama-cookware/home-question
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Description: Display question with word-by-word reveal and two paragraphs right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--q","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--q"><!-- wp:group {"className":"km-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap"><!-- wp:heading {"className":"km-question sp-stagger"} -->
<h2 class="wp-block-heading km-question sp-stagger"><?php echo kama_cookware_words( 'q_h', 'sp-reveal sp-reveal--up' ); // phpcs:ignore ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"km-question__body","layout":{"type":"default"}} -->
<div class="wp-block-group km-question__body"><!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( kama_cookware_t( 'q_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sp-reveal sp-reveal--up"} -->
<p class="sp-reveal sp-reveal--up"><?php echo esc_html( kama_cookware_t( 'q_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
