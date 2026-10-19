<?php
/**
 * Title: Archive: head and notes
 * Slug: asahi-gakuen/tpl-archive
 * Categories: asahi-gakuen
 * Keywords: school, high school, education
 * Viewport Width: 1440
 * Inserter: no
 * Description: The archive head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ag-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ag-pagehead"><!-- wp:paragraph {"className": "ag-eyebrow"} -->
<p class="ag-eyebrow"><?php echo esc_html( asahi_gakuen_t( 'archive' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"ag-pagehead__title"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "ag-section ag-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ag-section ag-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "ag-notes"} -->
<div class="wp-block-query alignwide ag-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ag-note__img"} /-->

<!-- wp:group {"className":"ag-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group ag-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"ag-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ag-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ag-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( asahi_gakuen_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( asahi_gakuen_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( asahi_gakuen_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
