<?php
/**
 * Title: Home: latest counter notes
 * Slug: shirokuro-camera/home-journal
 * Categories: shirokuro-camera
 * Keywords: film cameras, lenses, film
 * Viewport Width: 1440
 * Description: The three latest counter notes as masonry cards of different heights.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sc-section sc-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sc-section sc-home-journal"><!-- wp:group {"align": "wide", "className": "sc-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-card"><!-- wp:group {"align": "wide", "className": "sc-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide sc-panel__head"><!-- wp:paragraph {"className": "sc-eyebrow"} -->
<p class="sc-eyebrow"><?php echo esc_html( shirokuro_camera_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sc-sec__title"} -->
<h2 class="wp-block-heading sc-sec__title"><?php echo esc_html( shirokuro_camera_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "sc-panel__hint"} -->
<p class="sc-panel__hint"><?php echo esc_html( shirokuro_camera_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "sc-notes sc-notes--masonry"} -->
<div class="wp-block-query alignwide sc-notes sc-notes--masonry"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"sc-note__img"} /-->

<!-- wp:group {"className":"sc-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sc-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sc-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sc-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( shirokuro_camera_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "sc-more"} -->
<div class="wp-block-buttons sc-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/counter-notes/"><?php echo esc_html( shirokuro_camera_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
