<?php
/**
 * Title: Home: latest tide notes
 * Slug: tsuribito-tackle/home-journal
 * Categories: tsuribito-tackle
 * Keywords: fishing, tackle, shop
 * Viewport Width: 1440
 * Description: The three latest tide notes in a sideways strip.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-section tt-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-home-journal"><!-- wp:group {"align": "wide", "className": "tt-strip__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tt-strip__head"><!-- wp:paragraph {"className": "tt-eyebrow"} -->
<p class="tt-eyebrow"><?php echo esc_html( tsuribito_tackle_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tt-sec__title"} -->
<h2 class="wp-block-heading tt-sec__title"><?php echo esc_html( tsuribito_tackle_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tt-strip__lead"} -->
<p class="tt-strip__lead"><?php echo esc_html( tsuribito_tackle_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "tt-notes tt-notes--strip"} -->
<div class="wp-block-query alignwide tt-notes tt-notes--strip"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"tt-note__img"} /-->

<!-- wp:group {"className":"tt-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tt-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tt-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( tsuribito_tackle_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "tt-more"} -->
<div class="wp-block-buttons tt-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/tide-notes/"><?php echo esc_html( tsuribito_tackle_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
