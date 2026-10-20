<?php
/**
 * Title: Home: plans and monthly fees
 * Slug: kagi-security/front-plans
 * Categories: kagi-security
 * Keywords: plans, prices, fees
 * Viewport Width: 1440
 * Description: Three plans with the per-device monthly price, label-chip names and a ruled list each, then onboarding and contract terms.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-plans","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-plans"><!-- wp:group {"className":"ks-plans__head","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-plans__head"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'front_plan_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"ks-plans__intro","layout":{"type":"default"}} -->
<div class="wp-block-group ks-plans__intro"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( kagi_security_t( 'front_plan_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'front_plan_p1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-plans__grid","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-plans__grid"><!-- wp:group {"className":"ks-plan","layout":{"type":"default"}} -->
<div class="wp-block-group ks-plan"><!-- wp:paragraph {"className":"ks-chip"} -->
<p class="ks-chip"><?php echo wp_kses_post( kagi_security_t( 'front_plan_name1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plan__price"} -->
<p class="ks-plan__price"><?php echo wp_kses_post( kagi_security_t( 'front_plan_price1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plan__per"} -->
<p class="ks-plan__per"><?php echo wp_kses_post( kagi_security_t( 'front_plan_per1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plan__note"} -->
<p class="ks-plan__note"><?php echo wp_kses_post( kagi_security_t( 'front_plan_note1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"ks-plan__list"} -->
<ul class="wp-block-list ks-plan__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_1_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_1_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_1_3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-plan ks-plan--marked","layout":{"type":"default"}} -->
<div class="wp-block-group ks-plan ks-plan--marked"><!-- wp:paragraph {"className":"ks-chip ks-chip--off"} -->
<p class="ks-chip ks-chip--off"><?php echo wp_kses_post( kagi_security_t( 'front_plan_name2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plan__price"} -->
<p class="ks-plan__price"><?php echo wp_kses_post( kagi_security_t( 'front_plan_price2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plan__per"} -->
<p class="ks-plan__per"><?php echo wp_kses_post( kagi_security_t( 'front_plan_per2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plan__note"} -->
<p class="ks-plan__note"><?php echo wp_kses_post( kagi_security_t( 'front_plan_note2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"ks-plan__list"} -->
<ul class="wp-block-list ks-plan__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_2_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_2_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_2_3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_2_4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --><!-- wp:group {"className":"ks-plan","layout":{"type":"default"}} -->
<div class="wp-block-group ks-plan"><!-- wp:paragraph {"className":"ks-chip"} -->
<p class="ks-chip"><?php echo wp_kses_post( kagi_security_t( 'front_plan_name3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plan__price"} -->
<p class="ks-plan__price"><?php echo wp_kses_post( kagi_security_t( 'front_plan_price3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plan__per"} -->
<p class="ks-plan__per"><?php echo wp_kses_post( kagi_security_t( 'front_plan_per3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plan__note"} -->
<p class="ks-plan__note"><?php echo wp_kses_post( kagi_security_t( 'front_plan_note3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"ks-plan__list"} -->
<ul class="wp-block-list ks-plan__list"><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_3_1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_3_2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_3_3' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo wp_kses_post( kagi_security_t( 'front_plan_3_4' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-plans__terms","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-plans__terms"><!-- wp:paragraph {"className":"ks-plans__term"} -->
<p class="ks-plans__term"><?php echo wp_kses_post( kagi_security_t( 'front_plan_t1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-plans__term"} -->
<p class="ks-plans__term"><?php echo wp_kses_post( kagi_security_t( 'front_plan_t2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/plans-and-fees/"><?php echo wp_kses_post( kagi_security_t( 'front_plan_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
