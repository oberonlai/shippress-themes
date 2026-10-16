<?php
/**
 * Title: Journal: page head and notes
 * Slug: taiko-juku/tpl-journal
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Journal head and the list of notes (posts page).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-pagehead"><!-- wp:paragraph {"className": "tj-eyebrow"} -->
<p class="tj-eyebrow"><?php echo esc_html( taiko_juku_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tj-pagehead__title"} -->
<h1 class="wp-block-heading tj-pagehead__title"><?php echo esc_html( taiko_juku_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tj-pagehead__lead"} -->
<p class="tj-pagehead__lead"><?php echo esc_html( taiko_juku_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-section tj-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-section tj-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "tj-notes"} -->
<div class="wp-block-query alignwide tj-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tj-note__img"} /-->

<!-- wp:group {"className":"tj-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tj-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tj-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tj-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"tj-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( taiko_juku_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( taiko_juku_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( taiko_juku_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
