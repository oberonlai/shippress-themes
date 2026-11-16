<?php
/**
 * Title: Search results
 * Slug: hinata-market/tpl-search
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: Search head and result rows.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-sec","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-sec"><!-- wp:group {"className":"hm-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group hm-pagehead"><!-- wp:paragraph {"className":"hm-label"} -->
<p class="hm-label"><span class="hm-label__dot">H</span><span><?php echo esc_html( hinata_market_t( 'notices_label' ) ); ?></span><span class="hm-label__dot">M</span></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","className":"hm-h1"} /-->

<!-- wp:term-description {"className":"hm-body"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-listwrap","layout":{"type":"default"}} -->
<div class="wp-block-group hm-listwrap"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":<?php echo wp_json_encode( hinata_market_t( 'search_btn' ) ); ?>,"className":"hm-search"} /-->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"hm-posts"} -->
<div class="wp-block-query hm-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"hm-row","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row"><!-- wp:group {"className":"hm-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group hm-row__text"><!-- wp:post-title {"level":3,"isLink":true,"className":"hm-row__title"} /-->

<!-- wp:post-date {"format":"l j F Y","className":"hm-row__date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"121/74","className":"hm-row__thumb"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hinata_market_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hinata_market_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hinata_market_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
