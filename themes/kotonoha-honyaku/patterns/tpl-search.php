<?php
/**
 * Title: Search: head and results
 * Slug: kotonoha-honyaku/tpl-search
 * Categories: kotonoha-honyaku
 * Keywords: ekiden, relay race, running
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kh-pagehead"><!-- wp:paragraph {"className": "kh-eyebrow"} -->
<p class="kh-eyebrow"><?php echo esc_html( kotonoha_honyaku_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "kh-pagehead__title"} -->
<h1 class="wp-block-heading kh-pagehead__title"><?php echo esc_html( kotonoha_honyaku_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( kotonoha_honyaku_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( kotonoha_honyaku_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( kotonoha_honyaku_t( 'search_btn' ) ); ?>,"className":"kh-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "kh-section kh-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull kh-section kh-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "kh-notes"} -->
<div class="wp-block-query alignwide kh-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kh-note__img"} /-->

<!-- wp:group {"className":"kh-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group kh-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"kh-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kh-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"kh-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( kotonoha_honyaku_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( kotonoha_honyaku_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( kotonoha_honyaku_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
