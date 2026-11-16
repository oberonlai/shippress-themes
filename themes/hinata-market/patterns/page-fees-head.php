<?php
/**
 * Title: Page: Pitch fees, head
 * Slug: hinata-market/page-fees-head
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: Page head with the fee date card.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-cols hm-cols--head hm-ihead","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-cols hm-cols--head hm-ihead"><!-- wp:group {"className":"hm-col hm-col--main","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--main"><!-- wp:paragraph {"className":"hm-label"} -->
<p class="hm-label"><span class="hm-label__dot">H</span><span><?php echo esc_html( hinata_market_t( 'fe_label' ) ); ?></span><span class="hm-label__dot">M</span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hm-h1"} -->
<h1 class="wp-block-heading hm-h1"><?php echo esc_html( hinata_market_t( 'fe_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hm-body hm-lead-intro"} -->
<p class="hm-body hm-lead-intro"><?php echo esc_html( hinata_market_t( 'fe_intro' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--right","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--right"><!-- wp:group {"className":"hm-date","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date"><!-- wp:paragraph {"className":"hm-date__year"} -->
<p class="hm-date__year"><?php echo esc_html( hinata_market_t( 'fe_d_year' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-date__row","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date__row"><!-- wp:paragraph {"className":"hm-date__wd"} -->
<p class="hm-date__wd"><?php echo hinata_market_lines( 'fe_d_wd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-date__num","fontSize":"giant"} -->
<p class="hm-date__num"><?php echo esc_html( hinata_market_t( 'fe_d_num' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-date__mo"} -->
<p class="hm-date__mo"><?php echo hinata_market_lines( 'fe_d_mo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-arrow","layout":{"type":"default"}} -->
<div class="wp-block-group hm-arrow"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-cells","layout":{"type":"default"}} -->
<div class="wp-block-group hm-cells"><!-- wp:paragraph {"className":"hm-cell"} -->
<p class="hm-cell"><?php echo esc_html( hinata_market_t( 'fe_d_c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-cell"} -->
<p class="hm-cell"><?php echo esc_html( hinata_market_t( 'fe_d_c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
