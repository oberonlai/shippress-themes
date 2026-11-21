<?php
/**
 * Title: Home: questions
 * Slug: kuruma-tabi/front-faq
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: Six questions in an accordion, 760 px wide.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec","layout":{"type":"default"},"anchor":"faq"} -->
<section id="faq" class="wp-block-group alignfull kt-sec"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'faq_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'faq_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-faq","layout":{"type":"default"}} -->
<div class="wp-block-group kt-faq"><!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'faq1_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'faq1_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'faq2_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'faq2_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'faq3_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'faq3_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'faq4_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'faq4_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'faq5_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'faq5_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"kt-faq__i"} -->
<details class="wp-block-details kt-faq__i"><summary><?php echo esc_html( kuruma_tabi_t( 'faq6_q' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( kuruma_tabi_t( 'faq6_a' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
