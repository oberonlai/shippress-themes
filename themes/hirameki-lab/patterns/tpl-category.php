<?php
/**
 * Title: Category: head and notes
 * Slug: hirameki-lab/tpl-category
 * Categories: hirameki-lab
 * Keywords: STEM, robotics, after-school
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hl-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hl-pagehead"><!-- wp:paragraph {"className": "hl-eyebrow"} -->
<p class="hl-eyebrow"><?php echo esc_html( hirameki_lab_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"hl-pagehead__title"} /-->

<!-- wp:term-description {"className":"hl-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "hl-section hl-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hl-section hl-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "hl-notes"} -->
<div class="wp-block-query alignwide hl-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hl-note__img"} /-->

<!-- wp:group {"className":"hl-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hl-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hl-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hl-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hl-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hirameki_lab_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hirameki_lab_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hirameki_lab_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
