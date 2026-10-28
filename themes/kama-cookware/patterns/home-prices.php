<?php
/**
 * Title: Home: service prices
 * Slug: kama-cookware/home-prices
 * Categories: kama-cookware
 * Keywords: cookware, pans, kitchenware, repair
 * Viewport Width: 1440
 * Description: Fixed service price table, full width from 782px and stacked on phones.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"km-sec km-sec--prices","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull km-sec km-sec--prices"><!-- wp:group {"className":"km-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group km-wrap"><!-- wp:group {"className":"km-prices__head","layout":{"type":"default"}} -->
<div class="wp-block-group km-prices__head"><!-- wp:paragraph {"className":"km-label"} -->
<p class="km-label"><?php echo esc_html( kama_cookware_t( 'pr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"km-h2"} -->
<h2 class="wp-block-heading km-h2"><?php echo esc_html( kama_cookware_t( 'pr_h' ) ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"km-prices"} -->
<figure class="wp-block-table km-prices"><table><thead><tr><th><?php echo esc_html( kama_cookware_t( 'pr_h1' ) ); ?></th><th><?php echo esc_html( kama_cookware_t( 'pr_h2' ) ); ?></th><th><?php echo esc_html( kama_cookware_t( 'pr_h3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( kama_cookware_t( 'pr1_n' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr_t' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr1_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kama_cookware_t( 'pr2_n' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr_t' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr2_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kama_cookware_t( 'pr3_n' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr_t' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr3_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kama_cookware_t( 'pr4_n' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr_t' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr4_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kama_cookware_t( 'pr5_n' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr_t' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr5_p' ) ); ?></td></tr><tr><td><?php echo esc_html( kama_cookware_t( 'pr6_n' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr_t' ) ); ?></td><td><?php echo esc_html( kama_cookware_t( 'pr6_p' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"km-note"} -->
<p class="km-note"><?php echo esc_html( kama_cookware_t( 'pr_note' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"km-pill-wrap"} -->
<div class="wp-block-buttons km-pill-wrap"><!-- wp:button {"className":"km-pill"} -->
<div class="wp-block-button km-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/repair-service/' ) ); ?>"><?php echo esc_html( kama_cookware_t( 'pr_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
