<?php
/**
 * Title: Home: latest journal notes
 * Slug: soroban-kaikei/home-journal
 * Categories: soroban-kaikei
 * Keywords: tax, accountant, bookkeeping
 * Viewport Width: 1440
 * Description: The three latest journal notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sk-section sk-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sk-section sk-home-journal"><!-- wp:paragraph {"className": "sk-eyebrow"} -->
<p class="sk-eyebrow"><?php echo esc_html( soroban_kaikei_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "sk-sec__title"} -->
<h2 class="wp-block-heading sk-sec__title"><?php echo esc_html( soroban_kaikei_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "sk-notes"} -->
<div class="wp-block-query alignwide sk-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sk-note__img"} /-->

<!-- wp:group {"className":"sk-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sk-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sk-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( soroban_kaikei_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "sk-more"} -->
<div class="wp-block-buttons sk-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( soroban_kaikei_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
