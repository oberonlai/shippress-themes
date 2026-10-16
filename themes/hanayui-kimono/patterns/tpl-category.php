<?php
/**
 * Title: Category: head and notes
 * Slug: hanayui-kimono/tpl-category
 * Categories: hanayui-kimono
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-pagehead"><!-- wp:paragraph {"className": "hy-eyebrow"} -->
<p class="hy-eyebrow"><?php echo esc_html( hanayui_kimono_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"hy-pagehead__title"} /-->

<!-- wp:term-description {"className":"hy-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-section hy-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-section hy-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "hy-notes"} -->
<div class="wp-block-query alignwide hy-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hy-note__img"} /-->

<!-- wp:group {"className":"hy-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hy-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hy-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hy-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hy-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hanayui_kimono_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hanayui_kimono_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hanayui_kimono_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
