<?php
/**
 * Title: Home: questions
 * Slug: shizuku-filter/front-faq
 * Categories: shizuku-filter
 * Keywords: water filter, crowdfunding, landing
 * Viewport Width: 1440
 * Description: Five questions as capsule rows.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"faq","className":"sf-sec ","layout":{"type":"default"}} -->
<section id="faq" class="wp-block-group alignfull sf-sec ">
<!-- wp:paragraph {"className":"sf-rail"} -->
<p class="sf-rail"><span><?php echo wp_kses_post( shizuku_filter_t( 'faq_label' ) ); ?></span></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"sf-body","layout":{"type":"default"}} -->
<div class="wp-block-group sf-body">
<!-- wp:heading {"className":"sf-kv sp-reveal sp-reveal--wipe sf-wipe"} -->
<h2 class="wp-block-heading sf-kv sp-reveal sp-reveal--wipe sf-wipe"><span><?php echo wp_kses_post( shizuku_filter_t( 'faq_h' ) ); ?></span></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"sf-faq sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sf-faq sp-stagger">
<!-- wp:details {"className":"sf-faq__item sp-reveal sp-reveal--up"} -->
<details class="wp-block-details sf-faq__item sp-reveal sp-reveal--up"><summary><?php echo wp_kses_post( shizuku_filter_t( 'q1' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuku_filter_t( 'a1' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"sf-faq__item sp-reveal sp-reveal--up"} -->
<details class="wp-block-details sf-faq__item sp-reveal sp-reveal--up"><summary><?php echo wp_kses_post( shizuku_filter_t( 'q2' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuku_filter_t( 'a2' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"sf-faq__item sp-reveal sp-reveal--up"} -->
<details class="wp-block-details sf-faq__item sp-reveal sp-reveal--up"><summary><?php echo wp_kses_post( shizuku_filter_t( 'q3' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuku_filter_t( 'a3' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"sf-faq__item sp-reveal sp-reveal--up"} -->
<details class="wp-block-details sf-faq__item sp-reveal sp-reveal--up"><summary><?php echo wp_kses_post( shizuku_filter_t( 'q4' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuku_filter_t( 'a4' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
<!-- wp:details {"className":"sf-faq__item sp-reveal sp-reveal--up"} -->
<details class="wp-block-details sf-faq__item sp-reveal sp-reveal--up"><summary><?php echo wp_kses_post( shizuku_filter_t( 'q5' ) ); ?></summary><!-- wp:paragraph -->
<p><?php echo wp_kses_post( shizuku_filter_t( 'a5' ) ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
