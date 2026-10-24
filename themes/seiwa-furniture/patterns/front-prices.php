<?php
/**
 * Title: Home: list prices
 * Slug: seiwa-furniture/front-prices
 * Categories: seiwa-furniture
 * Keywords: home
 * Viewport Width: 1440
 * Description: A full-width price table on a mist band: item, what is included, price.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sw-sec sw-band sw-prices","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull sw-sec sw-band sw-prices"><!-- wp:group {"className":"sw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sw-wrap"><!-- wp:group {"className":"sw-label","layout":{"type":"default"}} -->
<div class="wp-block-group sw-label"><!-- wp:paragraph {"className":"sw-label__w"} -->
<p class="sw-label__w"><?php echo esc_html( seiwa_furniture_t( 'price_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sw-label__c"} -->
<p class="sw-label__c"><?php echo esc_html( seiwa_furniture_t( 'price_cap' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:table {"className":"sw-price"} -->
<figure class="wp-block-table sw-price"><table><thead><tr><th><?php echo esc_html( seiwa_furniture_t( 'th_item' ) ); ?></th><th><?php echo esc_html( seiwa_furniture_t( 'th_inc' ) ); ?></th><th><?php echo esc_html( seiwa_furniture_t( 'th_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( seiwa_furniture_t( 'pr1_i' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr1_d' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seiwa_furniture_t( 'pr2_i' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr2_d' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seiwa_furniture_t( 'pr3_i' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr3_d' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seiwa_furniture_t( 'pr4_i' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr4_d' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seiwa_furniture_t( 'pr5_i' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr5_d' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seiwa_furniture_t( 'pr6_i' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr6_d' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr6_p' ) ); ?></td></tr><tr><td><?php echo esc_html( seiwa_furniture_t( 'pr7_i' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr7_d' ) ); ?></td><td><?php echo esc_html( seiwa_furniture_t( 'pr7_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"sw-foot-note"} -->
<p class="sw-foot-note"><?php echo esc_html( seiwa_furniture_t( 'price_foot' ) ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
