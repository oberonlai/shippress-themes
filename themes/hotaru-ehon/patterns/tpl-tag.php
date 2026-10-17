<?php
/**
 * Title: Tag: head and notes
 * Slug: hotaru-ehon/tpl-tag
 * Categories: hotaru-ehon
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The tag head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-pagehead"><!-- wp:paragraph {"className": "ht-eyebrow"} -->
<p class="ht-eyebrow"><?php echo esc_html( hotaru_ehon_t( 'tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"ht-pagehead__title"} /-->

<!-- wp:term-description {"className":"ht-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-section ht-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-section ht-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "ht-notes"} -->
<div class="wp-block-query alignwide ht-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ht-note__img"} /-->

<!-- wp:group {"className":"ht-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group ht-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"ht-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ht-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ht-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hotaru_ehon_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hotaru_ehon_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hotaru_ehon_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
