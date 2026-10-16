<?php
/**
 * Title: Search: head and results
 * Slug: tsuribito-tackle/tpl-search
 * Categories: tsuribito-tackle
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-pagehead"><!-- wp:paragraph {"className": "tt-eyebrow"} -->
<p class="tt-eyebrow"><?php echo esc_html( tsuribito_tackle_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tt-pagehead__title"} -->
<h1 class="wp-block-heading tt-pagehead__title"><?php echo esc_html( tsuribito_tackle_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( tsuribito_tackle_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( tsuribito_tackle_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( tsuribito_tackle_t( 'search_btn' ) ); ?>,"className":"tt-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "tt-section tt-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tt-section tt-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "tt-notes"} -->
<div class="wp-block-query alignwide tt-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tt-note__img"} /-->

<!-- wp:group {"className":"tt-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tt-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tt-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tt-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"tt-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( tsuribito_tackle_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( tsuribito_tackle_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( tsuribito_tackle_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
