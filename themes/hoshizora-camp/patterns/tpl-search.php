<?php
/**
 * Title: Search: head and results
 * Slug: hoshizora-camp/tpl-search
 * Categories: hoshizora-camp
 * Keywords: glamping, camp, tents
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-pagehead"><!-- wp:paragraph {"className": "hz-eyebrow"} -->
<p class="hz-eyebrow"><?php echo esc_html( hoshizora_camp_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hz-pagehead__title"} -->
<h1 class="wp-block-heading hz-pagehead__title"><?php echo esc_html( hoshizora_camp_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( hoshizora_camp_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hoshizora_camp_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hoshizora_camp_t( 'search_btn' ) ); ?>,"className":"hz-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "hz-section hz-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hz-section hz-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "hz-notes"} -->
<div class="wp-block-query alignwide hz-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hz-note__img"} /-->

<!-- wp:group {"className":"hz-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hz-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hz-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hz-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hz-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hoshizora_camp_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hoshizora_camp_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hoshizora_camp_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
