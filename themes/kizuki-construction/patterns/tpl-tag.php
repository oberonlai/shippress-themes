<?php
/**
 * Title: Tag: head and notes
 * Slug: kizuki-construction/tpl-tag
 * Categories: kizuki-construction
 * Keywords: construction, contractor, building
 * Viewport Width: 1440
 * Inserter: no
 * Description: The tag head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kz-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kz-pagehead"><!-- wp:paragraph {"className": "kz-eyebrow"} -->
<p class="kz-eyebrow"><?php echo esc_html( kizuki_construction_t( 'tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"kz-pagehead__title"} /-->

<!-- wp:term-description {"className":"kz-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "kz-section kz-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kz-section kz-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "kz-notes"} -->
<div class="wp-block-query alignwide kz-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kz-note__img"} /-->

<!-- wp:group {"className":"kz-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kz-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kz-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kz-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kz-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( kizuki_construction_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( kizuki_construction_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kizuki_construction_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
