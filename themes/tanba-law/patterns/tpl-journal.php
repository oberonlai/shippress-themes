<?php
/**
 * Title: Notes: page head and notes
 * Slug: tanba-law/tpl-journal
 * Categories: tanba-law
 * Keywords: law firm, lawyer, legal
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Notes head and the list of notes (posts page).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tb-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tb-pagehead"><!-- wp:paragraph {"className": "tb-eyebrow"} -->
<p class="tb-eyebrow"><?php echo esc_html( tanba_law_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tb-pagehead__title"} -->
<h1 class="wp-block-heading tb-pagehead__title"><?php echo esc_html( tanba_law_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tb-pagehead__lead"} -->
<p class="tb-pagehead__lead"><?php echo esc_html( tanba_law_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "tb-section tb-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tb-section tb-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "tb-notes"} -->
<div class="wp-block-query alignwide tb-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tb-note__img"} /-->

<!-- wp:group {"className":"tb-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tb-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tb-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tb-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"tb-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( tanba_law_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( tanba_law_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( tanba_law_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
