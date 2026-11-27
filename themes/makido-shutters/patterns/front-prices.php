<?php
/**
 * Title: Home: prices
 * Slug: makido-shutters/front-prices
 * Categories: makido-shutters
 * Inserter: no
 * Viewport Width: 1440
 * Description: Seven-row price table (item, what is included, from) with a note and the repeated Book a site measure pill.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"prices","align":"full","className":"mk-sec mk-sec--prices","layout":{"type":"default"}} -->
<section id="prices" class="wp-block-group alignfull mk-sec mk-sec--prices">
<!-- wp:group {"className":"mk-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mk-wrap">
<!-- wp:heading {"level":2,"textAlign":"center","className":"mk-h2"} -->
<h2 class="wp-block-heading has-text-align-center mk-h2"><?php echo esc_html( makido_shutters_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<figure class="wp-block-table mk-prices"><table class="mk-pt"><thead><tr><th><?php echo esc_html( makido_shutters_t( 'pr_th_i' ) ); ?></th><th><?php echo esc_html( makido_shutters_t( 'pr_th_d' ) ); ?></th><th><?php echo esc_html( makido_shutters_t( 'pr_th_p' ) ); ?></th></tr></thead><tbody><tr><td class="mk-pt__i"><?php echo esc_html( makido_shutters_t( 'pr1_i' ) ); ?></td><td class="mk-pt__d" data-label="<?php echo makido_shutters_a( 'pr_th_d' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr1_d' ) ); ?></td><td class="mk-pt__p" data-label="<?php echo makido_shutters_a( 'pr_th_p' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr1_p' ) ); ?></td></tr><tr><td class="mk-pt__i"><?php echo esc_html( makido_shutters_t( 'pr2_i' ) ); ?></td><td class="mk-pt__d" data-label="<?php echo makido_shutters_a( 'pr_th_d' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr2_d' ) ); ?></td><td class="mk-pt__p" data-label="<?php echo makido_shutters_a( 'pr_th_p' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr2_p' ) ); ?></td></tr><tr><td class="mk-pt__i"><?php echo esc_html( makido_shutters_t( 'pr3_i' ) ); ?></td><td class="mk-pt__d" data-label="<?php echo makido_shutters_a( 'pr_th_d' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr3_d' ) ); ?></td><td class="mk-pt__p" data-label="<?php echo makido_shutters_a( 'pr_th_p' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr3_p' ) ); ?></td></tr><tr><td class="mk-pt__i"><?php echo esc_html( makido_shutters_t( 'pr4_i' ) ); ?></td><td class="mk-pt__d" data-label="<?php echo makido_shutters_a( 'pr_th_d' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr4_d' ) ); ?></td><td class="mk-pt__p" data-label="<?php echo makido_shutters_a( 'pr_th_p' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr4_p' ) ); ?></td></tr><tr><td class="mk-pt__i"><?php echo esc_html( makido_shutters_t( 'pr5_i' ) ); ?></td><td class="mk-pt__d" data-label="<?php echo makido_shutters_a( 'pr_th_d' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr5_d' ) ); ?></td><td class="mk-pt__p" data-label="<?php echo makido_shutters_a( 'pr_th_p' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr5_p' ) ); ?></td></tr><tr><td class="mk-pt__i"><?php echo esc_html( makido_shutters_t( 'pr6_i' ) ); ?></td><td class="mk-pt__d" data-label="<?php echo makido_shutters_a( 'pr_th_d' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr6_d' ) ); ?></td><td class="mk-pt__p" data-label="<?php echo makido_shutters_a( 'pr_th_p' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr6_p' ) ); ?></td></tr><tr><td class="mk-pt__i"><?php echo esc_html( makido_shutters_t( 'pr7_i' ) ); ?></td><td class="mk-pt__d" data-label="<?php echo makido_shutters_a( 'pr_th_d' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr7_d' ) ); ?></td><td class="mk-pt__p" data-label="<?php echo makido_shutters_a( 'pr_th_p' ); ?>"><?php echo esc_html( makido_shutters_t( 'pr7_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:html -->
<!-- wp:paragraph {"className":"mk-prices__note"} -->
<p class="mk-prices__note"><?php echo esc_html( makido_shutters_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"mk-cta"} -->
<div class="wp-block-buttons mk-cta"><!-- wp:button {"className":"mk-pill mk-pill--line"} -->
<div class="wp-block-button mk-pill mk-pill--line"><a class="wp-block-button__link wp-element-button" href="/contact/"><?php echo esc_html( makido_shutters_t( 'cta_book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
