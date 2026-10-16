<?php
/**
 * Title: Home: latest studio notes
 * Slug: koma-manga/home-journal
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Description: The three latest studio notes as panel cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-section km-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-section km-home-journal"><!-- wp:paragraph {"className": "km-eyebrow"} -->
<p class="km-eyebrow"><?php echo esc_html( koma_manga_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "km-sec__title"} -->
<h2 class="wp-block-heading km-sec__title"><?php echo esc_html( koma_manga_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "km-notes"} -->
<div class="wp-block-query alignwide km-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"km-note__img"} /-->

<!-- wp:group {"className":"km-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"km-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"km-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( koma_manga_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "km-more"} -->
<div class="wp-block-buttons km-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/notes/"><?php echo esc_html( koma_manga_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
