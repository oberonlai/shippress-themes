<?php
/**
 * Title: Category: head and notes
 * Slug: hiyoko-kindergarten/tpl-category
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-pagehead"><!-- wp:paragraph {"className": "hk-eyebrow"} -->
<p class="hk-eyebrow"><?php echo esc_html( hiyoko_kindergarten_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"hk-pagehead__title"} /-->

<!-- wp:term-description {"className":"hk-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-section hk-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "hk-notes"} -->
<div class="wp-block-query alignwide hk-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hk-note__img"} /-->

<!-- wp:group {"className":"hk-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hk-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hk-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hiyoko_kindergarten_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hiyoko_kindergarten_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hiyoko_kindergarten_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
