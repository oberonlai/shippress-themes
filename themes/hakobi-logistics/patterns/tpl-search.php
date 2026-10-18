<?php
/**
 * Title: Search: head and results
 * Slug: hakobi-logistics/tpl-search
 * Categories: hakobi-logistics
 * Keywords: logistics, freight, warehousing
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "hg-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hg-pagehead"><!-- wp:paragraph {"className": "hg-eyebrow"} -->
<p class="hg-eyebrow"><?php echo esc_html( hakobi_logistics_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "hg-pagehead__title"} -->
<h1 class="wp-block-heading hg-pagehead__title"><?php echo esc_html( hakobi_logistics_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( hakobi_logistics_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( hakobi_logistics_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( hakobi_logistics_t( 'search_btn' ) ); ?>,"className":"hg-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "hg-section hg-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull hg-section hg-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "hg-notes"} -->
<div class="wp-block-query alignwide hg-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hg-note__img"} /-->

<!-- wp:group {"className":"hg-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group hg-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"hg-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hg-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hg-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( hakobi_logistics_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( hakobi_logistics_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( hakobi_logistics_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
