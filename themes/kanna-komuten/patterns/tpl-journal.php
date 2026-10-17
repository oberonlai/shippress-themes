<?php
/**
 * Title: Journal: page head and notes
 * Slug: kanna-komuten/tpl-journal
 * Categories: kanna-komuten
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Journal head and the list of notes (posts page).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-pagehead"><!-- wp:paragraph {"className": "kn-eyebrow"} -->
<p class="kn-eyebrow"><?php echo esc_html( kanna_komuten_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kn-pagehead__title"} -->
<h1 class="wp-block-heading kn-pagehead__title"><?php echo esc_html( kanna_komuten_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kn-pagehead__lead"} -->
<p class="kn-pagehead__lead"><?php echo esc_html( kanna_komuten_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-section kn-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "kn-notes"} -->
<div class="wp-block-query alignwide kn-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kn-note__img"} /-->

<!-- wp:group {"className":"kn-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kn-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kn-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kn-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kn-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( kanna_komuten_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( kanna_komuten_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kanna_komuten_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
