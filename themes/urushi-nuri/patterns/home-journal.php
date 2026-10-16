<?php
/**
 * Title: Home: latest workshop notes
 * Slug: urushi-nuri/home-journal
 * Categories: urushi-nuri
 * Keywords: urushi, lacquer, workshop
 * Viewport Width: 1440
 * Description: The three latest workshop notes in a white panel.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "un-section un-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull un-section un-home-journal"><!-- wp:group {"align": "wide", "className": "un-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-card"><!-- wp:group {"align": "wide", "className": "un-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide un-panel__head"><!-- wp:paragraph {"className": "un-eyebrow"} -->
<p class="un-eyebrow"><?php echo esc_html( urushi_nuri_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "un-sec__title"} -->
<h2 class="wp-block-heading un-sec__title"><?php echo esc_html( urushi_nuri_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "un-panel__hint"} -->
<p class="un-panel__hint"><?php echo esc_html( urushi_nuri_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "un-notes"} -->
<div class="wp-block-query alignwide un-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"un-note__img"} /-->

<!-- wp:group {"className":"un-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group un-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"un-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"un-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( urushi_nuri_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "un-more"} -->
<div class="wp-block-buttons un-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/workshop-notes/"><?php echo esc_html( urushi_nuri_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
