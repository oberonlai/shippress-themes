<?php
/**
 * Title: Template: search results
 * Slug: gaku-frames/tpl-search
 * Categories: gaku-frames
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"gk-pagehead gk-mitre-field","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-pagehead gk-mitre-field"><!-- wp:group {"className":"gk-split gk-split--head","layout":{"type":"default"}} -->
<div class="wp-block-group gk-split gk-split--head"><!-- wp:query-title {"type":"search","level":1} /-->

<!-- wp:paragraph {"className":"gk-split__line2"} -->
<p class="gk-split__line2">/ Search</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-stage gk-headstage","layout":{"type":"default"}} -->
<div class="wp-block-group gk-stage gk-headstage"><!-- wp:group {"className":"gk-frame gk-frame--lg gk-headframe","layout":{"type":"default"}} -->
<div class="wp-block-group gk-frame gk-frame--lg gk-headframe"><!-- wp:group {"className":"gk-headcols gk-headcols--one sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group gk-headcols gk-headcols--one sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p12-bevel-cut.webp' ) ); ?>" alt="A hand guiding a mount cutter along a straight edge to cut a bevel in white board."/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-seam-label gk-seam-label--head","layout":{"type":"default"}} -->
<div class="wp-block-group gk-seam-label gk-seam-label--head"><!-- wp:paragraph {"className":"gk-seam-label__p"} -->
<p class="gk-seam-label__p">Finished jobs, and how they were framed</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gk-vrule","layout":{"type":"default"}} -->
<div class="wp-block-group gk-vrule"></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gk-vcaption"} -->
<p class="gk-vcaption">Journal · search</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"gk-sec gk-sec--in gk-listing","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-sec gk-sec--in gk-listing"><!-- wp:tag-cloud {"taxonomy":"post_tag","smallestFontSize":"12px","largestFontSize":"12px","className":"gk-pills gk-tagcloud"} /-->

<!-- wp:query {"queryId":4,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"gk-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"gk-card","layout":{"type":"default"}} -->
<div class="wp-block-group gk-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"gk-card__photo"} /-->

<!-- wp:post-terms {"term":"category","className":"gk-card__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"gk-card__title"} /-->

<!-- wp:post-date {"className":"gk-card__date"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
