<?php
/**
 * Title: Search: head and results
 * Slug: koshi-machiya/tpl-search
 * Categories: koshi-machiya
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-pagehead"><!-- wp:paragraph {"className": "kc-eyebrow"} -->
<p class="kc-eyebrow"><?php echo esc_html( koshi_machiya_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kc-pagehead__title"} -->
<h1 class="wp-block-heading kc-pagehead__title"><?php echo esc_html( koshi_machiya_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( koshi_machiya_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( koshi_machiya_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( koshi_machiya_t( 'search_btn' ) ); ?>,"className":"kc-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "kc-section kc-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kc-section kc-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "kc-notes"} -->
<div class="wp-block-query alignwide kc-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kc-note__img"} /-->

<!-- wp:group {"className":"kc-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kc-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kc-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kc-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( koshi_machiya_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( koshi_machiya_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( koshi_machiya_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
