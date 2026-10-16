<?php
/**
 * Title: Home: latest lane notes
 * Slug: hanayui-kimono/home-journal
 * Categories: hanayui-kimono
 * Keywords: kimono, rental, dressing
 * Viewport Width: 1440
 * Description: The three latest lane notes in a white panel.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hy-section hy-home-journal", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hy-section hy-home-journal"><!-- wp:group {"align": "wide", "className": "hy-card", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-card"><!-- wp:group {"align": "wide", "className": "hy-panel__head", "layout": {"type": "default"}} -->
<div class="wp-block-group alignwide hy-panel__head"><!-- wp:paragraph {"className": "hy-eyebrow"} -->
<p class="hy-eyebrow"><?php echo esc_html( hanayui_kimono_t( 'journal' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className": "hy-sec__title"} -->
<h2 class="wp-block-heading hy-sec__title"><?php echo esc_html( hanayui_kimono_t( 'journal_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className": "hy-panel__hint"} -->
<p class="hy-panel__hint"><?php echo esc_html( hanayui_kimono_t( 'journal_lead' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId": 2, "query": {"perPage": 3, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": false}, "align": "wide", "className": "hy-notes"} -->
<div class="wp-block-query alignwide hy-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"hy-note__img"} /-->

<!-- wp:group {"className":"hy-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hy-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hy-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hy-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":18} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hanayui_kimono_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className": "hy-more"} -->
<div class="wp-block-buttons hy-more"><!-- wp:button {"className": "is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/lane-notes/"><?php echo esc_html( hanayui_kimono_t( 'all_notes' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
