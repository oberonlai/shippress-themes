<?php
/**
 * Title: Home: latest journal notes
 * Slug: shinayaka-pilates/home-journal
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Description: The three latest journal notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-section sp-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sp-section sp-home-journal"><!-- wp:paragraph {"className": "sp-eyebrow"} -->
<p class="sp-eyebrow"><?php echo esc_html( shinayaka_pilates_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sp-sec__title"} -->
<h2 class="wp-block-heading sp-sec__title"><?php echo esc_html( shinayaka_pilates_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "sp-notes"} -->
<div class="wp-block-query alignwide sp-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sp-note__img"} /-->

<!-- wp:group {"className":"sp-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sp-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sp-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sp-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( shinayaka_pilates_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "sp-more"} -->
<div class="wp-block-buttons sp-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( shinayaka_pilates_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
