<?php
/**
 * Title: Home: book tonight band
 * Slug: hako-capsule/front-book
 * Categories: hako-capsule
 * Keywords: capsule hotel, pods, station
 * Viewport Width: 1440
 * Description: Ink band with white text: the single way to book, as three ruled cells and one outline button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hk-sec hk-sec--book hk-dark","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hk-sec hk-sec--book hk-dark"><!-- wp:group {"className":"hk-title sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group hk-title sp-reveal sp-reveal--wipe"><!-- wp:heading {"level":2,"className":"hk-title__h"} -->
<h2 class="wp-block-heading hk-title__h"><?php echo esc_html( hako_capsule_t( 'bk_title' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-in","layout":{"type":"default"}} -->
<div class="wp-block-group hk-in"><!-- wp:paragraph {"className":"hk-book__lead"} -->
<p class="hk-book__lead"><?php echo esc_html( hako_capsule_t( 'bk_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hk-book__cells","layout":{"type":"default"}} -->
<div class="wp-block-group hk-book__cells"><!-- wp:group {"className":"hk-book__cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-book__cell"><!-- wp:heading {"level":3,"className":"hk-book__t"} -->
<h3 class="wp-block-heading hk-book__t"><?php echo esc_html( hako_capsule_t( 'bk_c1_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-book__p"} -->
<p class="hk-book__p"><?php echo esc_html( hako_capsule_t( 'bk_c1_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-book__cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-book__cell"><!-- wp:heading {"level":3,"className":"hk-book__t"} -->
<h3 class="wp-block-heading hk-book__t"><?php echo esc_html( hako_capsule_t( 'bk_c2_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-book__p"} -->
<p class="hk-book__p"><?php echo esc_html( hako_capsule_t( 'bk_c2_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hk-book__cell","layout":{"type":"default"}} -->
<div class="wp-block-group hk-book__cell"><!-- wp:heading {"level":3,"className":"hk-book__t"} -->
<h3 class="wp-block-heading hk-book__t"><?php echo esc_html( hako_capsule_t( 'bk_c3_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hk-book__p"} -->
<p class="hk-book__p"><?php echo esc_html( hako_capsule_t( 'bk_c3_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hk-pill hk-pill--white"} -->
<p class="hk-pill hk-pill--white"><a href="<?php echo hako_capsule_url( '/book/' ); ?>"><?php echo esc_html( hako_capsule_t( 'bk_btn' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
