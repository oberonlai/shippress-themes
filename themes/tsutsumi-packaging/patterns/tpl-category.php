<?php
/**
 * Title: Category: head and notes
 * Slug: tsutsumi-packaging/tpl-category
 * Categories: tsutsumi-packaging
 * Keywords: packaging, boxes, manufacturer
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tp-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tp-pagehead"><!-- wp:paragraph {"className": "tp-eyebrow"} -->
<p class="tp-eyebrow"><?php echo esc_html( tsutsumi_packaging_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"tp-pagehead__title"} /-->

<!-- wp:term-description {"className":"tp-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "tp-section tp-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tp-section tp-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "tp-notes"} -->
<div class="wp-block-query alignwide tp-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tp-note__img"} /-->

<!-- wp:group {"className":"tp-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tp-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tp-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tp-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"tp-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( tsutsumi_packaging_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( tsutsumi_packaging_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( tsutsumi_packaging_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
