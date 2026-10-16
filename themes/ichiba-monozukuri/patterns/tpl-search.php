<?php
/**
 * Title: Search: head and results
 * Slug: ichiba-monozukuri/tpl-search
 * Categories: ichiba-monozukuri
 * Keywords: craft market, makers, handmade
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "im-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-pagehead"><!-- wp:paragraph {"className": "im-eyebrow"} -->
<p class="im-eyebrow"><?php echo esc_html( ichiba_monozukuri_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "im-pagehead__title"} -->
<h1 class="wp-block-heading im-pagehead__title"><?php echo esc_html( ichiba_monozukuri_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( ichiba_monozukuri_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( ichiba_monozukuri_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( ichiba_monozukuri_t( 'search_btn' ) ); ?>,"className":"im-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "im-section im-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull im-section im-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "im-notes"} -->
<div class="wp-block-query alignwide im-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"im-note__img"} /-->

<!-- wp:group {"className":"im-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group im-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"im-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"im-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"im-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( ichiba_monozukuri_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( ichiba_monozukuri_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( ichiba_monozukuri_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
