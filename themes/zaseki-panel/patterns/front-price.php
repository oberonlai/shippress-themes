<?php
/**
 * Title: Home: pre-order terms and price
 * Slug: zaseki-panel/front-price
 * Categories: zaseki-panel
 * Viewport Width: 1440
 * Description: Grey band with the six-row price table, the pre-order flow and the single pre-order button.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"price","className":"zp-sec zp-price","layout":{"type":"default"}} -->
<section id="price" class="wp-block-group zp-sec zp-price">
<!-- wp:group {"className":"zp-wrap zp-wrap--c","layout":{"type":"default"}} -->
<div class="wp-block-group zp-wrap zp-wrap--c">
<!-- wp:paragraph {"className":"zp-label"} -->
<p class="zp-label"><?php echo esc_html( zaseki_panel_t( 'price_label' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"zp-h2"} -->
<h2 class="wp-block-heading zp-h2"><?php echo esc_html( zaseki_panel_t( 'price_h' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose zp-prose--wide"} -->
<p class="zp-prose zp-prose--wide"><?php echo esc_html( zaseki_panel_t( 'price_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"zp-table zp-table--price"} -->
<figure class="wp-block-table zp-table zp-table--price"><table><thead><tr><th><?php echo esc_html( zaseki_panel_t( 'th_item' ) ); ?></th><th><?php echo esc_html( zaseki_panel_t( 'th_covers' ) ); ?></th><th><?php echo esc_html( zaseki_panel_t( 'th_price' ) ); ?></th></tr></thead><tbody><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'pr_i1' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'pr_d1' ) ); ?></td><td class="zp-t-price"><?php echo esc_html( zaseki_panel_t( 'pr_p1' ) ); ?></td></tr><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'pr_i2' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'pr_d2' ) ); ?></td><td class="zp-t-price"><?php echo esc_html( zaseki_panel_t( 'pr_p2' ) ); ?></td></tr><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'pr_i3' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'pr_d3' ) ); ?></td><td class="zp-t-price"><?php echo esc_html( zaseki_panel_t( 'pr_p3' ) ); ?></td></tr><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'pr_i4' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'pr_d4' ) ); ?></td><td class="zp-t-price"><?php echo esc_html( zaseki_panel_t( 'pr_p4' ) ); ?></td></tr><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'pr_i5' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'pr_d5' ) ); ?></td><td class="zp-t-price"><?php echo esc_html( zaseki_panel_t( 'pr_p5' ) ); ?></td></tr><tr><td class="zp-t-item"><?php echo esc_html( zaseki_panel_t( 'pr_i6' ) ); ?></td><td class="zp-t-desc"><?php echo esc_html( zaseki_panel_t( 'pr_d6' ) ); ?></td><td class="zp-t-price"><?php echo esc_html( zaseki_panel_t( 'pr_p6' ) ); ?></td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"className":"zp-note"} -->
<p class="zp-note"><?php echo esc_html( zaseki_panel_t( 'price_note' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"zp-price__cols","layout":{"type":"default"}} -->
<div class="wp-block-group zp-price__cols">
<!-- wp:group {"className":"zp-flow","layout":{"type":"default"}} -->
<div class="wp-block-group zp-flow">
<!-- wp:heading {"level":3,"className":"zp-h3s"} -->
<h3 class="wp-block-heading zp-h3s"><?php echo esc_html( zaseki_panel_t( 'flow_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"className":"zp-flow__row","layout":{"type":"default"}} -->
<div class="wp-block-group zp-flow__row">
<!-- wp:paragraph {"className":"zp-flow__n"} -->
<p class="zp-flow__n">01</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-flow__t"} -->
<p class="zp-flow__t"><?php echo esc_html( zaseki_panel_t( 'flow1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-flow__row","layout":{"type":"default"}} -->
<div class="wp-block-group zp-flow__row">
<!-- wp:paragraph {"className":"zp-flow__n"} -->
<p class="zp-flow__n">02</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-flow__t"} -->
<p class="zp-flow__t"><?php echo esc_html( zaseki_panel_t( 'flow2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-flow__row","layout":{"type":"default"}} -->
<div class="wp-block-group zp-flow__row">
<!-- wp:paragraph {"className":"zp-flow__n"} -->
<p class="zp-flow__n">03</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-flow__t"} -->
<p class="zp-flow__t"><?php echo esc_html( zaseki_panel_t( 'flow3' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-flow__row","layout":{"type":"default"}} -->
<div class="wp-block-group zp-flow__row">
<!-- wp:paragraph {"className":"zp-flow__n"} -->
<p class="zp-flow__n">04</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"zp-flow__t"} -->
<p class="zp-flow__t"><?php echo esc_html( zaseki_panel_t( 'flow4' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"zp-terms","layout":{"type":"default"}} -->
<div class="wp-block-group zp-terms">
<!-- wp:heading {"level":3,"className":"zp-h3s"} -->
<h3 class="wp-block-heading zp-h3s"><?php echo esc_html( zaseki_panel_t( 'terms_h' ) ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"zp-prose"} -->
<p class="zp-prose"><?php echo esc_html( zaseki_panel_t( 'terms_p' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"zp-cta"} -->
<div class="wp-block-buttons zp-cta"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/pre-order/"><?php echo esc_html( zaseki_panel_t( 'cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
