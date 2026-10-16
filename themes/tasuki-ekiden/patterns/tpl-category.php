<?php
/**
 * Title: Category: head and notes
 * Slug: tasuki-ekiden/tpl-category
 * Categories: tasuki-ekiden
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The category head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "te-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull te-pagehead"><!-- wp:paragraph {"className": "te-eyebrow"} -->
<p class="te-eyebrow"><?php echo esc_html( tasuki_ekiden_t( 'category' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"te-pagehead__title"} /-->

<!-- wp:term-description {"className":"te-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "te-section te-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull te-section te-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "te-notes"} -->
<div class="wp-block-query alignwide te-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"te-note__img"} /-->

<!-- wp:group {"className":"te-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group te-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"te-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"te-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"te-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( tasuki_ekiden_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( tasuki_ekiden_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( tasuki_ekiden_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
