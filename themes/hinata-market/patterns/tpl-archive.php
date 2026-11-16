<?php
/**
 * Title: Archive: notices
 * Slug: hinata-market/tpl-archive
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: Category, tag and date archives in the same three ruled columns as the notices page.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-cols hm-feed","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-cols hm-feed"><!-- wp:group {"className":"hm-col hm-col--left","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--left"><!-- wp:paragraph {"className":"hm-tab"} -->
<p class="hm-tab"><?php echo esc_html( hinata_market_t( 'ar_cat' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:categories {"showPostCounts":true,"className":"hm-catlist"} /-->

<!-- wp:paragraph {"className":"hm-tab"} -->
<p class="hm-tab"><?php echo esc_html( hinata_market_t( 'ar_tags' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:tag-cloud {"smallestFontSize":"0.875rem","largestFontSize":"0.875rem","className":"hm-tagcloud"} /-->

<!-- wp:group {"className":"hm-box hm-box--notice","layout":{"type":"default"}} -->
<div class="wp-block-group hm-box hm-box--notice"><!-- wp:paragraph {"className":"hm-body"} -->
<p class="hm-body"><?php echo esc_html( hinata_market_t( 'ar_box' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-pill hm-pill--s"} -->
<p class="hm-pill hm-pill--s"><a href="<?php echo hinata_market_url( '/weekly-list/' ); ?>"><?php echo esc_html( hinata_market_t( 'ar_box_cta' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-box__tag"} -->
<p class="hm-box__tag"><?php echo esc_html( hinata_market_t( 'ar_box_tag' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--mid","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--mid"><!-- wp:paragraph {"className":"hm-label"} -->
<p class="hm-label"><span class="hm-label__dot">H</span><span><?php echo esc_html( hinata_market_t( 'notices_label' ) ); ?></span><span class="hm-label__dot">M</span></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"hm-h1"} /-->

<!-- wp:term-description {"className":"hm-body"} /-->

<!-- wp:group {"className":"hm-listwrap hm-listwrap--feed","layout":{"type":"default"}} -->
<div class="wp-block-group hm-listwrap hm-listwrap--feed"><!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"hm-posts"} -->
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
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--right","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--right"><!-- wp:group {"className":"hm-date","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date"><!-- wp:paragraph {"className":"hm-date__year"} -->
<p class="hm-date__year"><?php echo esc_html( hinata_market_t( 'ar_d_year' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"hm-date__row","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date__row"><!-- wp:paragraph {"className":"hm-date__wd"} -->
<p class="hm-date__wd"><?php echo hinata_market_lines( 'ar_d_wd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-date__num","fontSize":"giant"} -->
<p class="hm-date__num"><?php echo esc_html( hinata_market_t( 'ar_d_num' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-date__mo"} -->
<p class="hm-date__mo"><?php echo hinata_market_lines( 'ar_d_mo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-arrow","layout":{"type":"default"}} -->
<div class="wp-block-group hm-arrow"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-cells","layout":{"type":"default"}} -->
<div class="wp-block-group hm-cells"><!-- wp:paragraph {"className":"hm-cell"} -->
<p class="hm-cell"><?php echo esc_html( hinata_market_t( 'ar_d_c1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hm-cell"} -->
<p class="hm-cell"><?php echo esc_html( hinata_market_t( 'ar_d_c2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
