<?php
/**
 * Title: Search: head and results
 * Slug: koma-manga/tpl-search
 * Categories: koma-manga
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "km-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-pagehead"><!-- wp:paragraph {"className": "km-eyebrow"} -->
<p class="km-eyebrow"><?php echo esc_html( koma_manga_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "km-pagehead__title"} -->
<h1 class="wp-block-heading km-pagehead__title"><?php echo esc_html( koma_manga_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( koma_manga_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( koma_manga_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( koma_manga_t( 'search_btn' ) ); ?>,"className":"km-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "km-section km-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull km-section km-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "km-notes"} -->
<div class="wp-block-query alignwide km-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"km-note__img"} /-->

<!-- wp:group {"className":"km-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group km-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"km-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"km-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"km-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( koma_manga_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( koma_manga_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( koma_manga_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
