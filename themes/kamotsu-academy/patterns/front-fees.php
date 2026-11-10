<?php
/**
 * Title: Home: fees, heading column and white price panel
 * Slug: kamotsu-academy/front-fees
 * Categories: kamotsu-academy
 * Viewport Width: 1440
 * Description: Heading column at the left and a white price panel with the seven course prices at the right.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"fees","className":"ka-sec ka-fees","layout":{"type":"default"}} -->
<section id="fees" class="wp-block-group alignfull ka-sec ka-fees">
<!-- wp:group {"className":"ka-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ka-wrap">
<!-- wp:group {"className":"ka-fees__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ka-fees__grid">
<!-- wp:group {"className":"ka-fees__head","layout":{"type":"default"}} -->
<div class="wp-block-group ka-fees__head">
<!-- wp:paragraph {"className":"ka-kicker"} -->
<p class="ka-kicker"><?php echo wp_kses_post( kamotsu_academy_t( 'fees_k' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"ka-h2"} -->
<h2 class="wp-block-heading ka-h2"><?php echo wp_kses_post( kamotsu_academy_t( 'fees_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"ka-lead"} -->
<p class="ka-lead"><?php echo wp_kses_post( kamotsu_academy_t( 'fees_lead' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"ka-pillrow ka-pillrow--l"} -->
<div class="wp-block-buttons ka-pillrow ka-pillrow--l">
<!-- wp:button {"className":"is-style-outline-pill ka-pill ka-pill--out"} -->
<div class="wp-block-button is-style-outline-pill ka-pill ka-pill--out"><a class="wp-block-button__link wp-element-button" href="/fees/"><?php echo wp_kses_post( kamotsu_academy_t( 'fees_pill' ) ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"ka-fees__dates"} -->
<p class="ka-fees__dates"><?php echo wp_kses_post( kamotsu_academy_t( 'fees_dates' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:html -->
<div class="ka-panel"><table class="ka-prices"><tbody><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'f1_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'f1_d' ) ); ?></span></th><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'f1_p' ) ); ?></td></tr><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'f2_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'f2_d' ) ); ?></span></th><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'f2_p' ) ); ?></td></tr><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'f3_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'f3_d' ) ); ?></span></th><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'f3_p' ) ); ?></td></tr><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'f4_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'f4_d' ) ); ?></span></th><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'f4_p' ) ); ?></td></tr><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'f5_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'f5_d' ) ); ?></span></th><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'f5_p' ) ); ?></td></tr><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'f6_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'f6_d' ) ); ?></span></th><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'f6_p' ) ); ?></td></tr><tr><th scope="row" class="ka-prices__i"><strong><?php echo wp_kses_post( kamotsu_academy_t( 'f7_t' ) ); ?></strong><span><?php echo wp_kses_post( kamotsu_academy_t( 'f7_d' ) ); ?></span></th><td class="ka-prices__p"><?php echo wp_kses_post( kamotsu_academy_t( 'f7_p' ) ); ?></td></tr></tbody></table></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
