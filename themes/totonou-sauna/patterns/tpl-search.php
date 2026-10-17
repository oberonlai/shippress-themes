<?php
/**
 * Title: Search: head and results
 * Slug: totonou-sauna/tpl-search
 * Categories: totonou-sauna
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tn-pagehead"><!-- wp:paragraph {"className": "tn-eyebrow"} -->
<p class="tn-eyebrow"><?php echo esc_html( totonou_sauna_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tn-pagehead__title"} -->
<h1 class="wp-block-heading tn-pagehead__title"><?php echo esc_html( totonou_sauna_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( totonou_sauna_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( totonou_sauna_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( totonou_sauna_t( 'search_btn' ) ); ?>,"className":"tn-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "tn-section tn-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tn-section tn-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "tn-notes"} -->
<div class="wp-block-query alignwide tn-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tn-note__img"} /-->

<!-- wp:group {"className":"tn-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tn-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tn-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tn-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"tn-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( totonou_sauna_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( totonou_sauna_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( totonou_sauna_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
