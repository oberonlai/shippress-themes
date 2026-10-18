<?php
/**
 * Title: Home: latest notes
 * Slug: manabi-juku/home-journal
 * Categories: manabi-juku
 * Keywords: school, tutoring, courses
 * Viewport Width: 1440
 * Description: The three latest notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mj-section mj-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mj-section mj-home-journal"><!-- wp:paragraph {"className": "mj-eyebrow"} -->
<p class="mj-eyebrow"><?php echo esc_html( manabi_juku_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mj-sec__title"} -->
<h2 class="wp-block-heading mj-sec__title"><?php echo esc_html( manabi_juku_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "mj-notes"} -->
<div class="wp-block-query alignwide mj-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"mj-note__img"} /-->

<!-- wp:group {"className":"mj-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group mj-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"mj-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mj-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( manabi_juku_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "mj-more"} -->
<div class="wp-block-buttons mj-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/news/"><?php echo esc_html( manabi_juku_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
