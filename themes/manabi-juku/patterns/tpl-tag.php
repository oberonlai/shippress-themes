<?php
/**
 * Title: Tag: head and notes
 * Slug: manabi-juku/tpl-tag
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Inserter: no
 * Description: The tag head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-pagehead"><!-- wp:paragraph {"className": "mj-eyebrow"} -->
<p class="mj-eyebrow"><?php echo esc_html( manabi_juku_t( 'tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"mj-pagehead__title"} /-->

<!-- wp:term-description {"className":"mj-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-section mj-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-section mj-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "mj-notes"} -->
<div class="wp-block-query alignwide mj-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"mj-note__img"} /-->

<!-- wp:group {"className":"mj-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group mj-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"mj-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mj-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"mj-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( manabi_juku_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( manabi_juku_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( manabi_juku_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
