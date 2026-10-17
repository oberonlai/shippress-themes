<?php
/**
 * Title: Home: latest journal notes
 * Slug: koshi-machiya/home-journal
 * Categories: koshi-machiya
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The three latest journal notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-section kc-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-home-journal"><!-- wp:paragraph {"className": "kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo esc_html( koshi_machiya_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kc-sec__title"} -->
<h2 class="wp-block-heading kc-sec__title"><?php echo esc_html( koshi_machiya_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "kc-notes"} -->
<div class="wp-block-query alignwide kc-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kc-note__img"} /-->

<!-- wp:group {"className":"kc-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kc-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( koshi_machiya_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "kc-more"} -->
<div class="wp-block-buttons kc-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( koshi_machiya_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
