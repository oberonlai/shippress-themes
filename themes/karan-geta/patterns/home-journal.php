<?php
/**
 * Title: Home: latest lane notes
 * Slug: karan-geta/home-journal
 * Categories: karan-geta
 * Keywords: geta, sandals, workshop
 * Viewport Width: 1440
 * Description: The three latest lane notes in a white panel.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-section kg-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-home-journal"><!-- wp:group {"align": "wide", "className": "kg-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-card"><!-- wp:group {"align": "wide", "className": "kg-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide kg-panel__head"><!-- wp:paragraph {"className": "kg-eyebrow"} -->
<p class="kg-eyebrow"><?php echo esc_html( karan_geta_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "kg-sec__title"} -->
<h2 class="wp-block-heading kg-sec__title"><?php echo esc_html( karan_geta_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "kg-panel__hint"} -->
<p class="kg-panel__hint"><?php echo esc_html( karan_geta_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "kg-notes"} -->
<div class="wp-block-query alignwide kg-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"kg-note__img"} /-->

<!-- wp:group {"className":"kg-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kg-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kg-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kg-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( karan_geta_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "kg-more"} -->
<div class="wp-block-buttons kg-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/workshop-notes/"><?php echo esc_html( karan_geta_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
