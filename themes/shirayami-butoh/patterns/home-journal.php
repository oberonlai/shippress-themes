<?php
/**
 * Title: Home: latest journal notes
 * Slug: shirayami-butoh/home-journal
 * Categories: shirayami-butoh
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The three latest journal notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sb-section sb-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sb-section sb-home-journal"><!-- wp:paragraph {"className": "sb-eyebrow"} -->
<p class="sb-eyebrow"><?php echo esc_html( shirayami_butoh_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sb-sec__title"} -->
<h2 class="wp-block-heading sb-sec__title"><?php echo esc_html( shirayami_butoh_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "sb-notes"} -->
<div class="wp-block-query alignwide sb-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sb-note__img"} /-->

<!-- wp:group {"className":"sb-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sb-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sb-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sb-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( shirayami_butoh_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "sb-more"} -->
<div class="wp-block-buttons sb-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( shirayami_butoh_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
