<?php
/**
 * Title: Home: latest journal notes
 * Slug: kamisori-barber/home-journal
 * Categories: kamisori-barber
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The three latest journal notes, one per row.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kb-section kb-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-home-journal"><!-- wp:paragraph {"className": "kb-eyebrow"} -->
<p class="kb-eyebrow"><?php echo esc_html( kamisori_barber_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kb-sec__title"} -->
<h2 class="wp-block-heading kb-sec__title"><?php echo esc_html( kamisori_barber_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "kb-notes"} -->
<div class="wp-block-query alignwide kb-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kb-note__img"} /-->

<!-- wp:group {"className":"kb-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kb-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kb-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kb-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kamisori_barber_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "kb-more"} -->
<div class="wp-block-buttons kb-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( kamisori_barber_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
