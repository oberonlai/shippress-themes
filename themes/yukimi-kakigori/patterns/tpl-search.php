<?php
/**
 * Title: Search: head and results
 * Slug: yukimi-kakigori/tpl-search
 * Categories: yukimi-kakigori
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull yk-pagehead"><!-- wp:paragraph {"className": "yk-eyebrow"} -->
<p class="yk-eyebrow"><?php echo esc_html( yukimi_kakigori_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "yk-pagehead__title"} -->
<h1 class="wp-block-heading yk-pagehead__title"><?php echo esc_html( yukimi_kakigori_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( yukimi_kakigori_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( yukimi_kakigori_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( yukimi_kakigori_t( 'search_btn' ) ); ?>,"className":"yk-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "yk-section yk-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull yk-section yk-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "yk-notes"} -->
<div class="wp-block-query alignwide yk-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"yk-note__img"} /-->

<!-- wp:group {"className":"yk-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group yk-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"yk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"yk-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"yk-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( yukimi_kakigori_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( yukimi_kakigori_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( yukimi_kakigori_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
