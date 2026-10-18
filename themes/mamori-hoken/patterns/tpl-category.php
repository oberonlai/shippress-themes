<?php
/**
 * Title: Category: head and notes
 * Slug: mamori-hoken/tpl-category
 * Categories: mamori-hoken
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mh-pagehead"><!-- wp:paragraph {"className": "mh-eyebrow"} -->
<p class="mh-eyebrow"><?php echo esc_html( mamori_hoken_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"mh-pagehead__title"} /-->

<!-- wp:term-description {"className":"mh-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "mh-section mh-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mh-section mh-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "mh-notes"} -->
<div class="wp-block-query alignwide mh-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"mh-note__img"} /-->

<!-- wp:group {"className":"mh-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group mh-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"mh-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mh-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"mh-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( mamori_hoken_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( mamori_hoken_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( mamori_hoken_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
