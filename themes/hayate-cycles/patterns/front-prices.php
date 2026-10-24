<?php
/**
 * Title: Home: price list
 * Slug: hayate-cycles/front-prices
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: The workshop price list: eight jobs in a hairline table that stacks on mobile.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-section hc-section--prices","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-section hc-section--prices">
<!-- wp:group {"className":"hc-prices__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-prices__head">
<!-- wp:heading {"className":"hc-title"} -->
<h2 class="wp-block-heading hc-title"><?php echo esc_html( hayate_cycles_t( 'pr_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sub"} -->
<p class="hc-sub"><?php echo esc_html( hayate_cycles_t( 'pr_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:table {"className":"hc-prices","align":"wide"} -->
<figure class="wp-block-table alignwide hc-prices"><table><thead><tr><th><?php echo esc_html( hayate_cycles_t( 'th_n' ) ); ?></th><th><?php echo esc_html( hayate_cycles_t( 'th_service' ) ); ?></th><th><?php echo esc_html( hayate_cycles_t( 'th_includes' ) ); ?></th><th><?php echo esc_html( hayate_cycles_t( 'th_time' ) ); ?></th><th><?php echo esc_html( hayate_cycles_t( 'th_price' ) ); ?></th></tr></thead><tbody><tr><td>01</td><td><?php echo esc_html( hayate_cycles_t( 'pr_1_a' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_1_b' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_1_c' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_1_d' ) ); ?></td></tr><tr><td>02</td><td><?php echo esc_html( hayate_cycles_t( 'pr_2_a' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_2_b' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_2_c' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_2_d' ) ); ?></td></tr><tr><td>03</td><td><?php echo esc_html( hayate_cycles_t( 'pr_3_a' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_3_b' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_3_c' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_3_d' ) ); ?></td></tr><tr><td>04</td><td><?php echo esc_html( hayate_cycles_t( 'pr_4_a' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_4_b' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_4_c' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_4_d' ) ); ?></td></tr><tr><td>05</td><td><?php echo esc_html( hayate_cycles_t( 'pr_5_a' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_5_b' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_5_c' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_5_d' ) ); ?></td></tr><tr><td>06</td><td><?php echo esc_html( hayate_cycles_t( 'pr_6_a' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_6_b' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_6_c' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_6_d' ) ); ?></td></tr><tr><td>07</td><td><?php echo esc_html( hayate_cycles_t( 'pr_7_a' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_7_b' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_7_c' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_7_d' ) ); ?></td></tr><tr><td>08</td><td><?php echo esc_html( hayate_cycles_t( 'pr_8_a' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_8_b' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_8_c' ) ); ?></td><td><?php echo esc_html( hayate_cycles_t( 'pr_8_d' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:group {"className":"hc-prices__foot","layout":{"type":"default"}} -->
<div class="wp-block-group hc-prices__foot">
<!-- wp:paragraph {"className":"hc-prices__note"} -->
<p class="hc-prices__note"><?php echo esc_html( hayate_cycles_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"hc-pillwrap"} -->
<div class="wp-block-buttons hc-pillwrap"><!-- wp:button {"className":"hc-pill"} -->
<div class="wp-block-button hc-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/prices/' ) ); ?>"><?php echo esc_html( hayate_cycles_t( 'more' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
