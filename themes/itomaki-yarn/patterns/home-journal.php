<?php
/**
 * Title: Home: latest knitting notes
 * Slug: itomaki-yarn/home-journal
 * Categories: itomaki-yarn
 * Keywords: yarn, wool, knitting
 * Viewport Width: 1440
 * Description: The three latest knitting notes.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "iy-section iy-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull iy-section iy-home-journal"><!-- wp:group {"align": "wide", "className": "iy-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-card"><!-- wp:group {"align": "wide", "className": "iy-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide iy-panel__head"><!-- wp:paragraph {"className": "iy-eyebrow"} -->
<p class="iy-eyebrow"><?php echo esc_html( itomaki_yarn_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "iy-sec__title"} -->
<h2 class="wp-block-heading iy-sec__title"><?php echo esc_html( itomaki_yarn_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "iy-panel__hint"} -->
<p class="iy-panel__hint"><?php echo esc_html( itomaki_yarn_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "iy-notes"} -->
<div class="wp-block-query alignwide iy-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"iy-note__img"} /-->

<!-- wp:group {"className":"iy-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group iy-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"iy-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"iy-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( itomaki_yarn_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "iy-more"} -->
<div class="wp-block-buttons iy-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/workshop-notes/"><?php echo esc_html( itomaki_yarn_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
