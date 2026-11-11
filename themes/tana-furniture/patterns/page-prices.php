<?php
/**
 * Title: Page: Prices
 * Slug: tana-furniture/page-prices
 * Categories: tana-furniture
 * Inserter: no
 * Description: The seven-line price table on a white card, then payment terms.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'lb_prices' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"tf-lead"} -->
<p class="tf-lead"><?php echo esc_html( tana_furniture_t( 'pg_pr_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec tf-band","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec tf-band"><!-- wp:group {"align":"wide","className":"tf-textcard tf-pricecard is-style-white-card","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide tf-textcard tf-pricecard is-style-white-card"><!-- wp:paragraph {"className":"is-style-bracket-label tf-label"} -->
<p class="is-style-bracket-label tf-label"><?php echo esc_html( tana_furniture_t( 'lb_price_list' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"tf-prices"} -->
<figure class="wp-block-table tf-prices"><table><thead><tr><th><?php echo esc_html( tana_furniture_t( 'pr_col_item' ) ); ?></th><th><?php echo esc_html( tana_furniture_t( 'pr_col_note' ) ); ?></th><th><?php echo esc_html( tana_furniture_t( 'pr_col_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( tana_furniture_t( 'pr_r1_a' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r1_b' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r1_c' ) ); ?></td></tr><tr><td><?php echo esc_html( tana_furniture_t( 'pr_r2_a' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r2_b' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r2_c' ) ); ?></td></tr><tr><td><?php echo esc_html( tana_furniture_t( 'pr_r3_a' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r3_b' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r3_c' ) ); ?></td></tr><tr><td><?php echo esc_html( tana_furniture_t( 'pr_r4_a' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r4_b' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r4_c' ) ); ?></td></tr><tr><td><?php echo esc_html( tana_furniture_t( 'pr_r5_a' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r5_b' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r5_c' ) ); ?></td></tr><tr><td><?php echo esc_html( tana_furniture_t( 'pr_r6_a' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r6_b' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r6_c' ) ); ?></td></tr><tr><td><?php echo esc_html( tana_furniture_t( 'pr_r7_a' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r7_b' ) ); ?></td><td><?php echo esc_html( tana_furniture_t( 'pr_r7_c' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"tf-prices__note"} -->
<p class="tf-prices__note"><?php echo esc_html( tana_furniture_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"tf-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull tf-sec"><!-- wp:columns {"align":"wide","className":"tf-split"} -->
<div class="wp-block-columns alignwide tf-split"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tf-h3-lg"} -->
<h3 class="wp-block-heading tf-h3-lg"><?php echo esc_html( tana_furniture_t( 'pg_pr_s2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'pg_pr_s2_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tf-h3-lg"} -->
<h3 class="wp-block-heading tf-h3-lg"><?php echo esc_html( tana_furniture_t( 'pg_pr_s1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( tana_furniture_t( 'pg_pr_s1_b' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
