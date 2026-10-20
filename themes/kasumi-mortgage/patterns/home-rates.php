<?php
/**
 * Title: Home: this week's rates (one quiet table and a worked example)
 * Slug: kasumi-mortgage/home-rates
 * Categories: kasumi-mortgage
 * Keywords: rates, table, example, calculator
 * Viewport Width: 1440
 * Description: Typical rates across the panel as one quiet ruled table, beside a worked monthly-payment example on a stone card and a link to Rates & costs. Placed below the first screen.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-section km-rates","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull km-section km-rates"><!-- wp:group {"align":"wide","className":"km-rates__grid","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide km-rates__grid"><!-- wp:group {"className":"km-rates__main","layout":{"type":"default"}} -->
<div class="wp-block-group km-rates__main"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_01' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-split__title"} -->
<h2 class="wp-block-heading km-split__title"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_02' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_03' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"km-rates__table"} -->
<figure class="wp-block-table km-rates__table"><table><thead><tr><th><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_04' ) ); ?></th><th><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_05' ) ); ?></th><th><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_06' ) ); ?></th><th><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_07' ) ); ?></th></tr></thead><tbody><tr><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_08' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_25' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_20' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_18' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_09' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_26' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_21' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_18' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_10' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_27' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_22' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_19' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_11' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_26' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_23' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_17' ) ); ?></td></tr><tr><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_12' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_29' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_24' ) ); ?></td><td><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_19' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"km-rates__card","layout":{"type":"default"}} -->
<div class="wp-block-group km-rates__card"><!-- wp:heading {"level":3,"className":"km-rates__card-title"} -->
<h3 class="wp-block-heading km-rates__card-title"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_13' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_14' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"km-rates__note"} -->
<p class="km-rates__note"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_15' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/rates/"><?php echo wp_kses_post( kasumi_mortgage_t( 'home_rates_16' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
