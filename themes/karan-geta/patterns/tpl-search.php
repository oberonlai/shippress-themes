<?php
/**
 * Title: Search: head and results
 * Slug: karan-geta/tpl-search
 * Categories: karan-geta
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-pagehead"><!-- wp:paragraph {"className": "kg-eyebrow"} -->
<p class="kg-eyebrow"><?php echo esc_html( karan_geta_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kg-pagehead__title"} -->
<h1 class="wp-block-heading kg-pagehead__title"><?php echo esc_html( karan_geta_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( karan_geta_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( karan_geta_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( karan_geta_t( 'search_btn' ) ); ?>,"className":"kg-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "kg-section kg-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kg-section kg-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "kg-notes"} -->
<div class="wp-block-query alignwide kg-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kg-note__img"} /-->

<!-- wp:group {"className":"kg-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kg-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kg-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kg-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kg-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( karan_geta_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( karan_geta_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( karan_geta_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
