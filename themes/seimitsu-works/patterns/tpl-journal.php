<?php
/**
 * Title: Notes: page head and notes
 * Slug: seimitsu-works/tpl-journal
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Notes head and the list of notes (posts page).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-pagehead"><!-- wp:paragraph {"className": "sw-eyebrow"} -->
<p class="sw-eyebrow"><?php echo esc_html( seimitsu_works_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sw-pagehead__title"} -->
<h1 class="wp-block-heading sw-pagehead__title"><?php echo esc_html( seimitsu_works_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sw-pagehead__lead"} -->
<p class="sw-pagehead__lead"><?php echo esc_html( seimitsu_works_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-section sw-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-section sw-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "sw-notes"} -->
<div class="wp-block-query alignwide sw-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sw-note__img"} /-->

<!-- wp:group {"className":"sw-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sw-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sw-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sw-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sw-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( seimitsu_works_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( seimitsu_works_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( seimitsu_works_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
