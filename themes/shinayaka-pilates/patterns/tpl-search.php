<?php
/**
 * Title: Search: head and results
 * Slug: shinayaka-pilates/tpl-search
 * Categories: shinayaka-pilates
 * Keywords: pilates, studio, wellness
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sp-pagehead"><!-- wp:paragraph {"className": "sp-eyebrow"} -->
<p class="sp-eyebrow"><?php echo esc_html( shinayaka_pilates_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "sp-pagehead__title"} -->
<h1 class="wp-block-heading sp-pagehead__title"><?php echo esc_html( shinayaka_pilates_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( shinayaka_pilates_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( shinayaka_pilates_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( shinayaka_pilates_t( 'search_btn' ) ); ?>,"className":"sp-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "sp-section sp-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull sp-section sp-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "sp-notes"} -->
<div class="wp-block-query alignwide sp-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"sp-note__img"} /-->

<!-- wp:group {"className":"sp-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group sp-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"sp-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sp-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sp-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( shinayaka_pilates_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( shinayaka_pilates_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( shinayaka_pilates_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
