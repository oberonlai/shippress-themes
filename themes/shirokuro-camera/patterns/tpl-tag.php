<?php
/**
 * Title: Tag: head and notes
 * Slug: shirokuro-camera/tpl-tag
 * Categories: shirokuro-camera
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The tag head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-pagehead"><!-- wp:paragraph {"className": "sc-eyebrow"} -->
<p class="sc-eyebrow"><?php echo esc_html( shirokuro_camera_t( 'tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"sc-pagehead__title"} /-->

<!-- wp:term-description {"className":"sc-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-section sc-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-section sc-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "sc-notes"} -->
<div class="wp-block-query alignwide sc-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sc-note__img"} /-->

<!-- wp:group {"className":"sc-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sc-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sc-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sc-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sc-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( shirokuro_camera_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( shirokuro_camera_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( shirokuro_camera_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
