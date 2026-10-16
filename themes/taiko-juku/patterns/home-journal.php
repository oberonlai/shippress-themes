<?php
/**
 * Title: Home: latest notes
 * Slug: taiko-juku/home-journal
 * Categories: taiko-juku
 * Keywords: taiko, drumming, classes
 * Viewport Width: 1440
 * Description: The three latest journal notes as photo cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tj-section tj-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tj-section tj-home-journal"><!-- wp:paragraph {"className": "tj-eyebrow"} -->
<p class="tj-eyebrow"><?php echo esc_html( taiko_juku_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tj-sec__title"} -->
<h2 class="wp-block-heading tj-sec__title"><?php echo esc_html( taiko_juku_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "tj-notes"} -->
<div class="wp-block-query alignwide tj-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tj-note__img"} /-->

<!-- wp:group {"className":"tj-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tj-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tj-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tj-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( taiko_juku_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "tj-more"} -->
<div class="wp-block-buttons tj-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/notes/"><?php echo esc_html( taiko_juku_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
