<?php
/**
 * Title: Home: latest journal notes
 * Slug: shinai-dojo/home-journal
 * Categories: shinai-dojo
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Description: The three latest journal notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sd-section sd-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sd-section sd-home-journal"><!-- wp:paragraph {"className": "sd-eyebrow"} -->
<p class="sd-eyebrow"><?php echo esc_html( shinai_dojo_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sd-sec__title"} -->
<h2 class="wp-block-heading sd-sec__title"><?php echo esc_html( shinai_dojo_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "sd-notes"} -->
<div class="wp-block-query alignwide sd-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sd-note__img"} /-->

<!-- wp:group {"className":"sd-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sd-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sd-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sd-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( shinai_dojo_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "sd-more"} -->
<div class="wp-block-buttons sd-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( shinai_dojo_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
