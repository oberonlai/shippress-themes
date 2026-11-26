<?php
/**
 * Title: Home: round and price table
 * Slug: shikii-mats/front-prices
 * Categories: shikii-mats
 * Viewport Width: 1440
 * Description: Plain full-width price table with the trial row marked by a short yellow stub.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"prices","align":"full","className":"sm-sec sm-sec--prices","layout":{"type":"default"}} -->
<section id="prices" class="wp-block-group alignfull sm-sec sm-sec--prices">
<!-- wp:group {"className":"sm-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group sm-wrap">
<!-- wp:heading {"level":2,"className":"sm-h2"} -->
<h2 class="wp-block-heading sm-h2"><?php echo esc_html( shikii_mats_t( 'price_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sm-intro"} -->
<p class="sm-intro"><?php echo esc_html( shikii_mats_t( 'price_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"sm-prices"} -->
<figure class="wp-block-table sm-prices"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( shikii_mats_t( 'th_item' ) ); ?></th><th><?php echo esc_html( shikii_mats_t( 'th_price' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( shikii_mats_t( 'pr1' ) ); ?></td><td><?php echo esc_html( shikii_mats_t( 'pv1' ) ); ?></td></tr><tr><td><?php echo esc_html( shikii_mats_t( 'pr2' ) ); ?></td><td><?php echo esc_html( shikii_mats_t( 'pv2' ) ); ?></td></tr><tr><td><?php echo esc_html( shikii_mats_t( 'pr3' ) ); ?></td><td><?php echo esc_html( shikii_mats_t( 'pv3' ) ); ?></td></tr><tr><td><?php echo esc_html( shikii_mats_t( 'pr4' ) ); ?></td><td><?php echo esc_html( shikii_mats_t( 'pv4' ) ); ?></td></tr><tr><td><?php echo esc_html( shikii_mats_t( 'pr5' ) ); ?></td><td><?php echo esc_html( shikii_mats_t( 'pv5' ) ); ?></td></tr><tr><td><?php echo esc_html( shikii_mats_t( 'pr6' ) ); ?></td><td><?php echo esc_html( shikii_mats_t( 'pv6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"sm-fine"} -->
<p class="sm-fine"><?php echo esc_html( shikii_mats_t( 'price_note' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
