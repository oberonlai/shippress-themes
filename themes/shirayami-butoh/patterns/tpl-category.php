<?php
/**
 * Title: Category: head and notes
 * Slug: shirayami-butoh/tpl-category
 * Categories: shirayami-butoh
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-pagehead"><!-- wp:paragraph {"className": "sb-eyebrow"} -->
<p class="sb-eyebrow"><?php echo esc_html( shirayami_butoh_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"sb-pagehead__title"} /-->

<!-- wp:term-description {"className":"sb-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-section sb-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-section sb-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "sb-notes"} -->
<div class="wp-block-query alignwide sb-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sb-note__img"} /-->

<!-- wp:group {"className":"sb-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sb-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sb-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sb-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sb-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( shirayami_butoh_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( shirayami_butoh_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( shirayami_butoh_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
