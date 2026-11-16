<?php
/**
 * Title: Header: masthead strip, wordmark and menu
 * Slug: hinata-market/header-main
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: A 46px masthead strip (issue number, full date, hours pill) over a nav row with the wordmark, one menu and a Weekly list pill.
 */
?>
<!-- wp:group {"className":"hm-masthead","layout":{"type":"default"}} -->
<div class="wp-block-group hm-masthead"><!-- wp:paragraph {"className":"hm-mast__issue"} -->
<p class="hm-mast__issue"><?php echo esc_html( hinata_market_t( 'mast_issue' ) ); ?><span class="hm-mob"><?php echo esc_html( hinata_market_t( 'mast_issue_mob' ) ); ?></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-mast__date"} -->
<p class="hm-mast__date"><?php echo esc_html( hinata_market_t( 'mast_date' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-mast__hours"} -->
<p class="hm-mast__hours"><span class="hm-toggle"></span><span class="hm-long"><?php echo esc_html( hinata_market_t( 'mast_open' ) ); ?> </span><?php echo esc_html( hinata_market_t( 'mast_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-navrow","layout":{"type":"default"}} -->
<div class="wp-block-group hm-navrow"><!-- wp:paragraph {"className":"hm-wordmark"} -->
<p class="hm-wordmark"><a href="<?php echo hinata_market_url( '/' ); ?>"><span class="hm-glyph hm-glyph--awning"></span><span class="hm-wordmark__name"><?php echo esc_html( hinata_market_t( 'wm_name' ) ); ?></span></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"hm-nav","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

<!-- wp:paragraph {"className":"hm-pill hm-pill--nav"} -->
<p class="hm-pill hm-pill--nav"><a href="<?php echo hinata_market_url( '/weekly-list/' ); ?>"><?php echo esc_html( hinata_market_t( 'pill_weekly' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
