<?php
/**
 * Title: Plans and fees: one plain table
 * Slug: kagi-security/home-rates
 * Categories: kagi-security
 * Keywords: plans, fees, table
 * Viewport Width: 1440
 * Description: The three plans, onboarding and contract as one plain ruled table, beside a card of good-to-know notes and a link to Getting started.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ks-section ks-rates","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ks-section ks-rates"><!-- wp:group {"align":"wide","className":"ks-rates__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ks-rates__grid"><!-- wp:group {"className":"ks-rates__main","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rates__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kagi_security_t( 'home_rates_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ks-split__title"} -->
<h2 class="wp-block-heading ks-split__title"><?php echo wp_kses_post( kagi_security_t( 'home_rates_02' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'home_rates_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"ks-rates__table"} -->
<figure class="wp-block-table ks-rates__table"><table><thead><tr><th><?php echo wp_kses_post( kagi_security_t( 'home_rates_04' ) ); ?></th><th><?php echo wp_kses_post( kagi_security_t( 'home_rates_05' ) ); ?></th><th><?php echo wp_kses_post( kagi_security_t( 'home_rates_06' ) ); ?></th><th><?php echo wp_kses_post( kagi_security_t( 'home_rates_07' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_08' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_25' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_20' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_18' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_09' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_26' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_21' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_30' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_10' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_27' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_22' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_19' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_11' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_28' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_23' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_17' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_12' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_29' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_24' ) ); ?></td><td><?php echo wp_kses_post( kagi_security_t( 'home_rates_31' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ks-rates__card","layout":{"type":"default"}} -->
<div class="wp-block-group ks-rates__card"><!-- wp:heading {"level":3,"className":"ks-rates__card-title"} -->
<h3 class="wp-block-heading ks-rates__card-title"><?php echo wp_kses_post( kagi_security_t( 'home_rates_13' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kagi_security_t( 'home_rates_14' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ks-rates__note"} -->
<p class="ks-rates__note"><?php echo wp_kses_post( kagi_security_t( 'home_rates_15' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/getting-started/"><?php echo wp_kses_post( kagi_security_t( 'home_rates_16' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
