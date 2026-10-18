<?php
/**
 * Title: Home: latest notes
 * Slug: kakei-advisors/home-journal
 * Categories: kakei-advisors
 * Keywords: finance, planning, advice
 * Viewport Width: 1440
 * Description: The three latest notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "ka-section ka-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull ka-section ka-home-journal"><!-- wp:paragraph {"className": "ka-eyebrow"} -->
<p class="ka-eyebrow"><?php echo esc_html( kakei_advisors_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "ka-sec__title"} -->
<h2 class="wp-block-heading ka-sec__title"><?php echo esc_html( kakei_advisors_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "ka-notes"} -->
<div class="wp-block-query alignwide ka-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"ka-note__img"} /-->

<!-- wp:group {"className":"ka-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group ka-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"ka-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ka-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kakei_advisors_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "ka-more"} -->
<div class="wp-block-buttons ka-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/notes/"><?php echo esc_html( kakei_advisors_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
