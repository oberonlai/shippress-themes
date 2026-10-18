<?php
/**
 * Title: Category: head and notes
 * Slug: kakei-advisors/tpl-category
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-pagehead"><!-- wp:paragraph {"className": "ka-eyebrow"} -->
<p class="ka-eyebrow"><?php echo esc_html( kakei_advisors_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"ka-pagehead__title"} /-->

<!-- wp:term-description {"className":"ka-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-section ka-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-section ka-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "ka-notes"} -->
<div class="wp-block-query alignwide ka-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ka-note__img"} /-->

<!-- wp:group {"className":"ka-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group ka-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"ka-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ka-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ka-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( kakei_advisors_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( kakei_advisors_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kakei_advisors_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
