<?php
/**
 * Title: Home: latest journal notes
 * Slug: hiyoko-kindergarten/home-journal
 * Categories: hiyoko-kindergarten
 * Keywords: kindergarten, nursery, school
 * Viewport Width: 1440
 * Description: The three latest journal notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hk-section hk-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hk-section hk-home-journal"><!-- wp:paragraph {"className": "hk-eyebrow"} -->
<p class="hk-eyebrow"><?php echo esc_html( hiyoko_kindergarten_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hk-sec__title"} -->
<h2 class="wp-block-heading hk-sec__title"><?php echo esc_html( hiyoko_kindergarten_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "hk-notes"} -->
<div class="wp-block-query alignwide hk-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hk-note__img"} /-->

<!-- wp:group {"className":"hk-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hk-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hk-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hiyoko_kindergarten_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "hk-more"} -->
<div class="wp-block-buttons hk-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( hiyoko_kindergarten_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
