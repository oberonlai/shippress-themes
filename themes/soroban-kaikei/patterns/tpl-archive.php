<?php
/**
 * Title: Archive: head and notes
 * Slug: soroban-kaikei/tpl-archive
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Inserter: no
 * Description: The archive head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-pagehead"><!-- wp:paragraph {"className": "sk-eyebrow"} -->
<p class="sk-eyebrow"><?php echo esc_html( soroban_kaikei_t( 'archive' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"sk-pagehead__title"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-section sk-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-section sk-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "sk-notes"} -->
<div class="wp-block-query alignwide sk-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sk-note__img"} /-->

<!-- wp:group {"className":"sk-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sk-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sk-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sk-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( soroban_kaikei_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( soroban_kaikei_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( soroban_kaikei_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
