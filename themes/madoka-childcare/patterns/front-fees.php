<?php
/**
 * Title: Home: fees and hours
 * Slug: madoka-childcare/front-fees
 * Categories: madoka-childcare
 * Description: Stripe heading, a paragraph, the opening hours and a full-width price card.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"mc-sec mc-sec--s mc-fees","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mc-sec mc-sec--s mc-fees"><!-- wp:group {"className":"mc-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mc-wrap"><!-- wp:group {"className":"mc-fees__top","layout":{"type":"default"}} -->
<div class="wp-block-group mc-fees__top"><!-- wp:group {"className":"mc-fees__t","layout":{"type":"default"}} -->
<div class="wp-block-group mc-fees__t"><!-- wp:heading {"level":2,"className":"mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"} -->
<h2 class="wp-block-heading mc-stripe mc-stripe--white sp-reveal sp-reveal--wipe"><mark class="mc-stripe__in"><?php echo wp_kses( str_replace( "\n", '<br>', esc_html( madoka_childcare_t( 'fees_h' ) ) ), array( 'br' => array() ) ); ?></mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( madoka_childcare_t( 'fees_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"mc-link"} -->
<p class="mc-link"><a href="/fees/"><?php echo esc_html( madoka_childcare_t( 'fees_cta' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-fees__h","layout":{"type":"default"}} -->
<div class="wp-block-group mc-fees__h"><!-- wp:list {"className":"mc-hours"} -->
<ul class="wp-block-list mc-hours"><li><?php echo esc_html( madoka_childcare_t( 'hr1' ) ); ?></li><li><?php echo esc_html( madoka_childcare_t( 'hr2' ) ); ?></li><li><?php echo esc_html( madoka_childcare_t( 'hr3' ) ); ?></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mc-card mc-fees__card mc-torn-top mc-torn-bottom","layout":{"type":"default"}} -->
<div class="wp-block-group mc-card mc-fees__card mc-torn-top mc-torn-bottom"><!-- wp:list {"className":"mc-prices"} -->
<ul class="wp-block-list mc-prices"><li><span class="mc-prices__n"><strong><?php echo esc_html( madoka_childcare_t( 'pr1_n' ) ); ?></strong><small><?php echo esc_html( madoka_childcare_t( 'pr1_x' ) ); ?></small></span><span class="mc-prices__p"><?php echo esc_html( madoka_childcare_t( 'pr1_p' ) ); ?></span></li><li><span class="mc-prices__n"><strong><?php echo esc_html( madoka_childcare_t( 'pr2_n' ) ); ?></strong><small><?php echo esc_html( madoka_childcare_t( 'pr2_x' ) ); ?></small></span><span class="mc-prices__p"><?php echo esc_html( madoka_childcare_t( 'pr2_p' ) ); ?></span></li><li><span class="mc-prices__n"><strong><?php echo esc_html( madoka_childcare_t( 'pr3_n' ) ); ?></strong><small><?php echo esc_html( madoka_childcare_t( 'pr3_x' ) ); ?></small></span><span class="mc-prices__p"><?php echo esc_html( madoka_childcare_t( 'pr3_p' ) ); ?></span></li><li><span class="mc-prices__n"><strong><?php echo esc_html( madoka_childcare_t( 'pr4_n' ) ); ?></strong><small><?php echo esc_html( madoka_childcare_t( 'pr4_x' ) ); ?></small></span><span class="mc-prices__p"><?php echo esc_html( madoka_childcare_t( 'pr4_p' ) ); ?></span></li><li><span class="mc-prices__n"><strong><?php echo esc_html( madoka_childcare_t( 'pr5_n' ) ); ?></strong><small><?php echo esc_html( madoka_childcare_t( 'pr5_x' ) ); ?></small></span><span class="mc-prices__p"><?php echo esc_html( madoka_childcare_t( 'pr5_p' ) ); ?></span></li><li><span class="mc-prices__n"><strong><?php echo esc_html( madoka_childcare_t( 'pr6_n' ) ); ?></strong><small><?php echo esc_html( madoka_childcare_t( 'pr6_x' ) ); ?></small></span><span class="mc-prices__p"><?php echo esc_html( madoka_childcare_t( 'pr6_p' ) ); ?></span></li></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"mc-card__foot"} -->
<p class="mc-card__foot"><?php echo esc_html( madoka_childcare_t( 'fees_foot' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
