<?php
/**
 * Title: Home: latest workshop notes
 * Slug: amime-takezaiku/home-journal
 * Categories: amime-takezaiku
 * Keywords: bamboo, baskets, workshop
 * Viewport Width: 1440
 * Description: The three latest workshop notes as horizontal strips: picture, date, title and excerpt in one row each.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-home-journal"><!-- wp:group {"align": "wide", "className": "tk-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-card"><!-- wp:group {"align": "wide", "className": "tk-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide tk-panel__head"><!-- wp:paragraph {"className": "tk-eyebrow"} -->
<p class="tk-eyebrow"><?php echo esc_html( amime_takezaiku_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "tk-sec__title"} -->
<h2 class="wp-block-heading tk-sec__title"><?php echo esc_html( amime_takezaiku_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "tk-panel__hint"} -->
<p class="tk-panel__hint"><?php echo esc_html( amime_takezaiku_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "tk-notes tk-notes--strips"} -->
<div class="wp-block-query alignwide tk-notes tk-notes--strips"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"tk-note__img"} /-->

<!-- wp:group {"className":"tk-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tk-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tk-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( amime_takezaiku_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "tk-more"} -->
<div class="wp-block-buttons tk-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/workshop-notes/"><?php echo esc_html( amime_takezaiku_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
