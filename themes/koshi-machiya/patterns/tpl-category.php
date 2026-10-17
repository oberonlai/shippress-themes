<?php
/**
 * Title: Category: head and notes
 * Slug: koshi-machiya/tpl-category
 * Categories: koshi-machiya
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-pagehead"><!-- wp:paragraph {"className": "kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo esc_html( koshi_machiya_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"kc-pagehead__title"} /-->

<!-- wp:term-description {"className":"kc-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-section kc-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "kc-notes"} -->
<div class="wp-block-query alignwide kc-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kc-note__img"} /-->

<!-- wp:group {"className":"kc-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kc-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kc-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( koshi_machiya_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( koshi_machiya_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( koshi_machiya_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
