<?php
/**
 * Title: Home: latest journal notes
 * Slug: michishirube-consulting/home-journal
 * Categories: michishirube-consulting
 * Keywords: consulting, management, strategy
 * Viewport Width: 1440
 * Description: The three latest journal notes as cards.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "mc-section mc-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull mc-section mc-home-journal"><!-- wp:paragraph {"className": "mc-eyebrow"} -->
<p class="mc-eyebrow"><?php echo esc_html( michishirube_consulting_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "mc-sec__title"} -->
<h2 class="wp-block-heading mc-sec__title"><?php echo esc_html( michishirube_consulting_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "mc-notes"} -->
<div class="wp-block-query alignwide mc-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"mc-note__img"} /-->

<!-- wp:group {"className":"mc-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group mc-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"mc-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mc-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( michishirube_consulting_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "mc-more"} -->
<div class="wp-block-buttons mc-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo esc_html( michishirube_consulting_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
