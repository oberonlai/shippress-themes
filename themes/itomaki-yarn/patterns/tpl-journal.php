<?php
/**
 * Title: Journal: page head and notes
 * Slug: itomaki-yarn/tpl-journal
 * Categories: itomaki-yarn
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Journal head and the list of notes (posts page).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-pagehead"><!-- wp:paragraph {"className": "iy-eyebrow"} -->
<p class="iy-eyebrow"><?php echo esc_html( itomaki_yarn_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "iy-pagehead__title"} -->
<h1 class="wp-block-heading iy-pagehead__title"><?php echo esc_html( itomaki_yarn_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "iy-pagehead__lead"} -->
<p class="iy-pagehead__lead"><?php echo esc_html( itomaki_yarn_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-section iy-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-section iy-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "iy-notes"} -->
<div class="wp-block-query alignwide iy-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"iy-note__img"} /-->

<!-- wp:group {"className":"iy-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group iy-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"iy-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"iy-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"iy-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( itomaki_yarn_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( itomaki_yarn_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( itomaki_yarn_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
