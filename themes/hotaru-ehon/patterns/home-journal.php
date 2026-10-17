<?php
/**
 * Title: Home: latest journal notes
 * Slug: hotaru-ehon/home-journal
 * Categories: hotaru-ehon
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The three latest journal notes, one per row.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ht-section ht-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ht-section ht-home-journal"><!-- wp:paragraph {"className": "ht-eyebrow"} -->
<p class="ht-eyebrow"><?php echo esc_html( hotaru_ehon_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "ht-sec__title"} -->
<h2 class="wp-block-heading ht-sec__title"><?php echo esc_html( hotaru_ehon_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "ht-notes"} -->
<div class="wp-block-query alignwide ht-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ht-note__img"} /-->

<!-- wp:group {"className":"ht-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group ht-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"ht-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ht-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hotaru_ehon_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "ht-more"} -->
<div class="wp-block-buttons ht-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( hotaru_ehon_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
