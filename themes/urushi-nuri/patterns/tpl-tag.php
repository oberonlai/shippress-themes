<?php
/**
 * Title: Tag: head and notes
 * Slug: urushi-nuri/tpl-tag
 * Categories: urushi-nuri
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The tag head and its notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-pagehead"><!-- wp:paragraph {"className": "un-eyebrow"} -->
<p class="un-eyebrow"><?php echo esc_html( urushi_nuri_t( 'tag' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","showPrefix":false,"className":"un-pagehead__title"} /-->

<!-- wp:term-description {"className":"un-pagehead__lead"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "un-section un-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-section un-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "un-notes"} -->
<div class="wp-block-query alignwide un-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"un-note__img"} /-->

<!-- wp:group {"className":"un-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group un-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"un-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"un-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"un-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( urushi_nuri_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( urushi_nuri_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( urushi_nuri_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
