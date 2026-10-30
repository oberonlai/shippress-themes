<?php
/**
 * Title: Home: plans
 * Slug: kouhi-service/front-plans
 * Categories: kouhi-service
 * Keywords: office coffee, coffee service, landing
 * Viewport Width: 1440
 * Description: Price table over the full inner width, a note on terms and one booking button.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","anchor":"plans","className":"ks-sec ks-plans-sec","layout":{"type":"default"}} -->
<section id="plans" class="wp-block-group alignfull ks-sec ks-plans-sec"><?php $ks_cols = explode( '|', kouhi_service_t( 'plans_cols' ) ); ?>
<!-- wp:group {"className":"ks-in","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo esc_html( kouhi_service_t( 'lbl_plans' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-h2"} -->
<h2 class="wp-block-heading ks-h2"><?php echo esc_html( kouhi_service_t( 'plans_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:table {"className":"ks-plans"} -->
<figure class="wp-block-table ks-plans"><table><thead><tr><th><?php echo esc_html( $ks_cols[0] ); ?></th><th><?php echo esc_html( $ks_cols[1] ); ?></th><th><?php echo esc_html( $ks_cols[2] ); ?></th></tr></thead><tbody><tr><td><strong><?php echo esc_html( kouhi_service_t( 'plan_0_n' ) ); ?></strong></td><td><?php echo esc_html( kouhi_service_t( 'plan_0_d' ) ); ?></td><td><?php echo esc_html( kouhi_service_t( 'plan_0_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( kouhi_service_t( 'plan_1_n' ) ); ?></strong></td><td><?php echo esc_html( kouhi_service_t( 'plan_1_d' ) ); ?></td><td><?php echo esc_html( kouhi_service_t( 'plan_1_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( kouhi_service_t( 'plan_2_n' ) ); ?></strong></td><td><?php echo esc_html( kouhi_service_t( 'plan_2_d' ) ); ?></td><td><?php echo esc_html( kouhi_service_t( 'plan_2_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( kouhi_service_t( 'plan_3_n' ) ); ?></strong></td><td><?php echo esc_html( kouhi_service_t( 'plan_3_d' ) ); ?></td><td><?php echo esc_html( kouhi_service_t( 'plan_3_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( kouhi_service_t( 'plan_4_n' ) ); ?></strong></td><td><?php echo esc_html( kouhi_service_t( 'plan_4_d' ) ); ?></td><td><?php echo esc_html( kouhi_service_t( 'plan_4_p' ) ); ?></td></tr><tr><td><strong><?php echo esc_html( kouhi_service_t( 'plan_5_n' ) ); ?></strong></td><td><?php echo esc_html( kouhi_service_t( 'plan_5_d' ) ); ?></td><td><?php echo esc_html( kouhi_service_t( 'plan_5_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"ks-note"} -->
<p class="ks-note"><?php echo esc_html( kouhi_service_t( 'plans_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ks-plans__cta"} -->
<div class="wp-block-buttons ks-plans__cta"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#book"><?php echo esc_html( kouhi_service_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
