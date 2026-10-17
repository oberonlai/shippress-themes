<?php
/**
 * Title: Tag: head and notes
 * Slug: shinai-dojo/tpl-tag
 * Categories: shinai-dojo
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The tag head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-pagehead"><!-- wp:paragraph {"className": "sd-eyebrow"} -->
<p class="sd-eyebrow"><?php echo esc_html( shinai_dojo_t( 'tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"sd-pagehead__title"} /-->

<!-- wp:term-description {"className":"sd-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-section sd-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-section sd-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "sd-notes"} -->
<div class="wp-block-query alignwide sd-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sd-note__img"} /-->

<!-- wp:group {"className":"sd-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sd-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sd-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sd-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sd-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( shinai_dojo_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( shinai_dojo_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( shinai_dojo_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
