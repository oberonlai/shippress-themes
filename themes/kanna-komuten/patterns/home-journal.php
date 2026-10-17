<?php
/**
 * Title: Home: latest journal notes
 * Slug: kanna-komuten/home-journal
 * Categories: kanna-komuten
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The three latest journal notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kn-section kn-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kn-section kn-home-journal"><!-- wp:paragraph {"className": "kn-eyebrow"} -->
<p class="kn-eyebrow"><?php echo esc_html( kanna_komuten_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kn-sec__title"} -->
<h2 class="wp-block-heading kn-sec__title"><?php echo esc_html( kanna_komuten_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "kn-notes"} -->
<div class="wp-block-query alignwide kn-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kn-note__img"} /-->

<!-- wp:group {"className":"kn-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kn-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kn-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kn-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kanna_komuten_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "kn-more"} -->
<div class="wp-block-buttons kn-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( kanna_komuten_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
