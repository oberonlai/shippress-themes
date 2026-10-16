<?php
/**
 * Title: Home: latest notes
 * Slug: hoshizora-camp/home-journal
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Description: The three latest journal notes as watercolour cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-section hz-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-home-journal"><!-- wp:paragraph {"className": "hz-eyebrow"} -->
<p class="hz-eyebrow"><?php echo esc_html( hoshizora_camp_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hz-sec__title"} -->
<h2 class="wp-block-heading hz-sec__title"><?php echo esc_html( hoshizora_camp_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "hz-notes"} -->
<div class="wp-block-query alignwide hz-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hz-note__img"} /-->

<!-- wp:group {"className":"hz-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hz-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hz-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hz-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "hz-more"} -->
<div class="wp-block-buttons hz-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( hoshizora_camp_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
