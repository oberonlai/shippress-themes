<?php
/**
 * Title: Home: latest journal notes
 * Slug: teuchi-udon/home-journal
 * Categories: teuchi-udon
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The three latest journal notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tu-section tu-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tu-section tu-home-journal"><!-- wp:paragraph {"className": "tu-eyebrow"} -->
<p class="tu-eyebrow"><?php echo esc_html( teuchi_udon_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tu-sec__title"} -->
<h2 class="wp-block-heading tu-sec__title"><?php echo esc_html( teuchi_udon_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "tu-notes"} -->
<div class="wp-block-query alignwide tu-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tu-note__img"} /-->

<!-- wp:group {"className":"tu-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tu-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tu-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tu-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( teuchi_udon_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "tu-more"} -->
<div class="wp-block-buttons tu-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( teuchi_udon_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
