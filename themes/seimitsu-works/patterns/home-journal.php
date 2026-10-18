<?php
/**
 * Title: Home: latest notes
 * Slug: seimitsu-works/home-journal
 * Categories: seimitsu-works
 * Keywords: manufacturing, machining, precision parts
 * Viewport Width: 1440
 * Description: The three latest notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sw-section sw-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sw-section sw-home-journal"><!-- wp:paragraph {"className": "sw-eyebrow"} -->
<p class="sw-eyebrow"><?php echo esc_html( seimitsu_works_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sw-sec__title"} -->
<h2 class="wp-block-heading sw-sec__title"><?php echo esc_html( seimitsu_works_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "sw-notes"} -->
<div class="wp-block-query alignwide sw-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sw-note__img"} /-->

<!-- wp:group {"className":"sw-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sw-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sw-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sw-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( seimitsu_works_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "sw-more"} -->
<div class="wp-block-buttons sw-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/news/"><?php echo esc_html( seimitsu_works_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
