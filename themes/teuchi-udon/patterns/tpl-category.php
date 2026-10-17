<?php
/**
 * Title: Category: head and notes
 * Slug: teuchi-udon/tpl-category
 * Categories: teuchi-udon
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-pagehead"><!-- wp:paragraph {"className": "tu-eyebrow"} -->
<p class="tu-eyebrow"><?php echo esc_html( teuchi_udon_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"tu-pagehead__title"} /-->

<!-- wp:term-description {"className":"tu-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-section tu-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-section tu-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "tu-notes"} -->
<div class="wp-block-query alignwide tu-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tu-note__img"} /-->

<!-- wp:group {"className":"tu-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tu-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tu-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tu-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"tu-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( teuchi_udon_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( teuchi_udon_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teuchi_udon_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
