<?php
/**
 * Title: Home: cups, tubs and the hold shelf
 * Slug: himuro-gelato/front-prices
 * Categories: himuro-gelato
 * Viewport Width: 1440
 * Description: Prices as a full-width ruled list with right-aligned, never-cut prices, followed by the four-part set-aside sentence.
 */
?>
<!-- wp:group {"className":"hg-prices hg-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-prices hg-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:paragraph {"className":"hg-label"} -->
<p class="hg-label"><?php echo esc_html( himuro_gelato_t( 'pr_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hg-prices__body","layout":{"type":"default"}} -->
<div class="wp-block-group hg-prices__body"><!-- wp:paragraph {"className":"hg-prices__p sp-reveal sp-reveal--up"} -->
<p class="hg-prices__p sp-reveal sp-reveal--up"><?php echo esc_html( himuro_gelato_t( 'pr_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:table {"hasFixedLayout":true,"className":"hg-pl"} -->
<figure class="wp-block-table hg-pl"><table class="has-fixed-layout"><thead><tr><th><?php echo esc_html( himuro_gelato_t( 'pl_h1' ) ); ?></th><th><?php echo esc_html( himuro_gelato_t( 'pl_h2' ) ); ?></th><th><?php echo esc_html( himuro_gelato_t( 'pl_h3' ) ); ?></th></tr></thead><tbody><tr><td><?php echo esc_html( himuro_gelato_t( 'pl_n1' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_d1' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_p1' ) ); ?></td></tr><tr><td><?php echo esc_html( himuro_gelato_t( 'pl_n2' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_d2' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_p2' ) ); ?></td></tr><tr><td><?php echo esc_html( himuro_gelato_t( 'pl_n3' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_d3' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_p3' ) ); ?></td></tr><tr><td><?php echo esc_html( himuro_gelato_t( 'pl_n4' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_d4' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_p4' ) ); ?></td></tr><tr><td><?php echo esc_html( himuro_gelato_t( 'pl_n5' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_d5' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_p5' ) ); ?></td></tr><tr><td><?php echo esc_html( himuro_gelato_t( 'pl_n6' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_d6' ) ); ?></td><td><?php echo esc_html( himuro_gelato_t( 'pl_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"className":"hg-flow"} -->
<p class="hg-flow"><?php echo esc_html( himuro_gelato_t( 'pr_flow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hg-btn hg-btn--line"} -->
<div class="wp-block-button hg-btn hg-btn--line"><a class="wp-block-button__link wp-element-button" href="/tubs/"><?php echo esc_html( himuro_gelato_t( 'pr_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
