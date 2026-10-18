<?php
/**
 * Title: Journal: page head and notes
 * Slug: michishirube-consulting/tpl-journal
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Journal head and the list of notes (posts page).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-pagehead"><!-- wp:paragraph {"className": "mc-eyebrow"} -->
<p class="mc-eyebrow"><?php echo esc_html( michishirube_consulting_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "mc-pagehead__title"} -->
<h1 class="wp-block-heading mc-pagehead__title"><?php echo esc_html( michishirube_consulting_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "mc-pagehead__lead"} -->
<p class="mc-pagehead__lead"><?php echo esc_html( michishirube_consulting_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-section mc-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-section mc-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "mc-notes"} -->
<div class="wp-block-query alignwide mc-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"mc-note__img"} /-->

<!-- wp:group {"className":"mc-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group mc-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"mc-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mc-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"mc-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( michishirube_consulting_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( michishirube_consulting_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( michishirube_consulting_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
