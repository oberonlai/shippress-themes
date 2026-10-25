<?php
/**
 * Title: Home: how a booking runs
 * Slug: kaigi-centre/front-process
 * Categories: kaigi-centre
 * Keywords: conference, front-process
 * Viewport Width: 1440
 * Description: Four-step horizontal ruled row, staggered.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kc-process","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-process">
<!-- wp:group {"className":"kc-process__head","layout":{"type":"default"}} -->
<div class="wp-block-group kc-process__head">
<!-- wp:paragraph {"className":"kc-label"} -->
<p class="kc-label"><?php echo esc_html( kaigi_centre_t( 'proc_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"kc-h2"} -->
<h2 class="wp-block-heading kc-h2"><?php echo esc_html( kaigi_centre_t( 'proc_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-steps sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group kc-steps sp-stagger">
<!-- wp:group {"className":"kc-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kc-step__n"} -->
<p class="kc-step__n">1</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"kc-step__t"} -->
<h3 class="wp-block-heading kc-step__t"><?php echo esc_html( kaigi_centre_t( 's0_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-step__d"} -->
<p class="kc-step__d"><?php echo esc_html( kaigi_centre_t( 's0_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kc-step__n"} -->
<p class="kc-step__n">2</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"kc-step__t"} -->
<h3 class="wp-block-heading kc-step__t"><?php echo esc_html( kaigi_centre_t( 's1_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-step__d"} -->
<p class="kc-step__d"><?php echo esc_html( kaigi_centre_t( 's1_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kc-step__n"} -->
<p class="kc-step__n">3</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"kc-step__t"} -->
<h3 class="wp-block-heading kc-step__t"><?php echo esc_html( kaigi_centre_t( 's2_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-step__d"} -->
<p class="kc-step__d"><?php echo esc_html( kaigi_centre_t( 's2_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-step sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kc-step sp-reveal sp-reveal--up">
<!-- wp:paragraph {"className":"kc-step__n"} -->
<p class="kc-step__n">4</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"kc-step__t"} -->
<h3 class="wp-block-heading kc-step__t"><?php echo esc_html( kaigi_centre_t( 's3_t' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"kc-step__d"} -->
<p class="kc-step__d"><?php echo esc_html( kaigi_centre_t( 's3_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"kc-textlink"} -->
<p class="kc-textlink"><a href="<?php echo esc_url( home_url( '/plan-an-event/' ) ); ?>"><?php echo esc_html( kaigi_centre_t( 'proc_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
