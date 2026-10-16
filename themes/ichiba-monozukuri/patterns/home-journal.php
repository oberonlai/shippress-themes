<?php
/**
 * Title: Home: latest notes
 * Slug: ichiba-monozukuri/home-journal
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Description: The three latest journal notes as photo cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-section im-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-section im-home-journal"><!-- wp:paragraph {"className": "im-eyebrow"} -->
<p class="im-eyebrow"><?php echo esc_html( ichiba_monozukuri_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "im-sec__title"} -->
<h2 class="wp-block-heading im-sec__title"><?php echo esc_html( ichiba_monozukuri_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "im-notes"} -->
<div class="wp-block-query alignwide im-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"im-note__img"} /-->

<!-- wp:group {"className":"im-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group im-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"im-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"im-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( ichiba_monozukuri_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "im-more"} -->
<div class="wp-block-buttons im-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/notes/"><?php echo esc_html( ichiba_monozukuri_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
