<?php
/**
 * Title: Journal: page head and notes
 * Slug: kamisori-barber/tpl-journal
 * Categories: kamisori-barber
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The Journal head and the list of notes (posts page).
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-pagehead"><!-- wp:paragraph {"className": "kb-eyebrow"} -->
<p class="kb-eyebrow"><?php echo esc_html( kamisori_barber_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kb-pagehead__title"} -->
<h1 class="wp-block-heading kb-pagehead__title"><?php echo esc_html( kamisori_barber_t( 'journal_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kb-pagehead__lead"} -->
<p class="kb-pagehead__lead"><?php echo esc_html( kamisori_barber_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-section kb-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "kb-notes"} -->
<div class="wp-block-query alignwide kb-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kb-note__img"} /-->

<!-- wp:group {"className":"kb-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kb-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kb-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kb-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kb-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( kamisori_barber_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( kamisori_barber_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kamisori_barber_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
