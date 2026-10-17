<?php
/**
 * Title: Tag: head and notes
 * Slug: fukusa-chado/tpl-tag
 * Categories: fukusa-chado
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The tag head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-pagehead"><!-- wp:paragraph {"className": "fc-eyebrow"} -->
<p class="fc-eyebrow"><?php echo esc_html( fukusa_chado_t( 'tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"fc-pagehead__title"} /-->

<!-- wp:term-description {"className":"fc-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "fc-section fc-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull fc-section fc-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "fc-notes"} -->
<div class="wp-block-query alignwide fc-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"fc-note__img"} /-->

<!-- wp:group {"className":"fc-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group fc-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"fc-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"fc-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"fc-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( fukusa_chado_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( fukusa_chado_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( fukusa_chado_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
