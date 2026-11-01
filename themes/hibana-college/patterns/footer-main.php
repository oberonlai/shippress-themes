<?php
/**
 * Title: Footer: wordmark, contact and address
 * Slug: hibana-college/footer-main
 * Categories: hibana-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"className":"hc-foot","layout":{"type":"default"},"align":"full"} -->
<div class="wp-block-group alignfull hc-foot">
<!-- wp:group {"className":"hc-foot__row","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__row">
<!-- wp:group {"className":"hc-foot__l","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__l">
<!-- wp:site-title {"level":0,"className":"hc-foot__mark"} /-->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'foot_contact' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-foot__r","layout":{"type":"default"}} -->
<div class="wp-block-group hc-foot__r">
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'foot_addr' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hibana_college_t( 'foot_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hc-foot__base"} -->
<p class="hc-foot__base"><?php echo wp_kses_post( hibana_college_t( 'foot_base' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hc-top"} -->
<p class="hc-top"><a href="#top"><?php echo wp_kses_post( hibana_college_t( 'foot_top' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
