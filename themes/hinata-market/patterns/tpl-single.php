<?php
/**
 * Title: Single notice
 * Slug: hinata-market/tpl-single
 * Categories: hinata-market
 * Keywords: farmers market, notices, stalls
 * Viewport Width: 1440
 * Inserter: no
 * Description: Notice title, date, featured image in the lead shape, the text, and a date card with three more notices.
 */
?>
<!-- wp:group {"tagName":"section","className":"hm-cols hm-cols--head hm-single","layout":{"type":"default"},"align":"full"} -->
<section class="wp-block-group alignfull hm-cols hm-cols--head hm-single"><!-- wp:group {"className":"hm-col hm-col--mid hm-single__main","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--mid hm-single__main"><!-- wp:post-title {"level":1,"className":"hm-h1"} /-->

<!-- wp:post-date {"format":"l j F Y","className":"hm-row__date"} /-->

<!-- wp:group {"className":"hm-lead sp-parallax hm-lead--post","layout":{"type":"default"}} -->
<div class="wp-block-group hm-lead sp-parallax hm-lead--post"><!-- wp:html -->
<svg class="hm-clipdef" width="0" height="0" aria-hidden="true" focusable="false"><defs><clipPath id="hm-lead-clip" clipPathUnits="objectBoundingBox"><path d="M0.259,0 L1,0 L0.84,1 L0.259,1 A0.259,0.5 0 0 1 0.259,0 Z"/></clipPath></defs></svg>
<!-- /wp:html -->

<!-- wp:post-featured-image {"className":"hm-lead__shape"} /-->

<!-- wp:html -->
<svg class="hm-lead__line" viewBox="0 0 606 314" preserveAspectRatio="none" aria-hidden="true" focusable="false"><path d="M157,1 L605,1 L509,313 L157,313 A156,156 0 0 1 157,1 Z" fill="none" stroke="currentColor" stroke-width="2" vector-effect="non-scaling-stroke"/></svg>
<!-- /wp:html -->

<!-- wp:html -->
<p class="hm-diamond hm-diamond--tl" aria-hidden="true"><span><?php echo esc_html( hinata_market_t( 'kv_diamond_1' ) ); ?></span></p>
<!-- /wp:html -->

<!-- wp:html -->
<p class="hm-diamond hm-diamond--tr" aria-hidden="true"><span><?php echo esc_html( hinata_market_t( 'kv_diamond_2' ) ); ?></span></p>
<!-- /wp:html -->

<!-- wp:html -->
<p class="hm-diamond hm-diamond--bl" aria-hidden="true"><span><?php echo esc_html( hinata_market_t( 'kv_diamond_3' ) ); ?></span></p>
<!-- /wp:html -->

<!-- wp:html -->
<p class="hm-diamond hm-diamond--br" aria-hidden="true"><span><?php echo esc_html( hinata_market_t( 'kv_diamond_4' ) ); ?></span></p>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:post-content {"className":"hm-prose","layout":{"type":"default"}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"hm-terms"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-col hm-col--right","layout":{"type":"default"}} -->
<div class="wp-block-group hm-col hm-col--right"><!-- wp:group {"className":"hm-date hm-date--post","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date hm-date--post"><!-- wp:post-date {"format":"Y","className":"hm-date__year"} /-->

<!-- wp:group {"className":"hm-date__row hm-date__row--solo","layout":{"type":"default"}} -->
<div class="wp-block-group hm-date__row hm-date__row--solo"><!-- wp:post-date {"format":"j","className":"hm-date__num","fontSize":"giant"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-arrow","layout":{"type":"default"}} -->
<div class="wp-block-group hm-arrow"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hm-cells","layout":{"type":"default"}} -->
<div class="wp-block-group hm-cells"><!-- wp:post-date {"format":"l","className":"hm-cell"} /-->

<!-- wp:post-date {"format":"F","className":"hm-cell"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"hm-label hm-label--double"} -->
<p class="hm-label hm-label--double"><?php echo esc_html( hinata_market_t( 'more_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"hm-posts hm-posts--more"} -->
<div class="wp-block-query hm-posts hm-posts--more"><!-- wp:post-template -->
<!-- wp:group {"className":"hm-more","layout":{"type":"default"}} -->
<div class="wp-block-group hm-more"><!-- wp:post-title {"level":3,"isLink":true,"className":"hm-row__title hm-row__title--sm"} /-->

<!-- wp:post-date {"format":"j F Y","className":"hm-row__date"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
