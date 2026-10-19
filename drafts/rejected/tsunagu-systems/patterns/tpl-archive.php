<?php
/**
 * Title: Archive: head and notes
 * Slug: tsunagu-systems/tpl-archive
 * Categories: tsunagu-systems
 * Keywords: it services, managed it, support
 * Viewport Width: 1440
 * Inserter: no
 * Description: The archive head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ts-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ts-pagehead"><!-- wp:paragraph {"className": "ts-eyebrow"} -->
<p class="ts-eyebrow"><?php echo esc_html( tsunagu_systems_t( 'archive' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"ts-pagehead__title"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "ts-section ts-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ts-section ts-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "ts-notes"} -->
<div class="wp-block-query alignwide ts-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ts-note__img"} /-->

<!-- wp:group {"className":"ts-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group ts-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"ts-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ts-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ts-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( tsunagu_systems_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( tsunagu_systems_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( tsunagu_systems_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
