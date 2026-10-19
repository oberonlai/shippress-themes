<?php
/**
 * Title: Search: head and results
 * Slug: waza-college/tpl-search
 * Categories: waza-college
 * Keywords: college, vocational, courses
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "wz-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull wz-pagehead"><!-- wp:paragraph {"className": "wz-eyebrow"} -->
<p class="wz-eyebrow"><?php echo esc_html( waza_college_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "wz-pagehead__title"} -->
<h1 class="wp-block-heading wz-pagehead__title"><?php echo esc_html( waza_college_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( waza_college_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( waza_college_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( waza_college_t( 'search_btn' ) ); ?>,"className":"wz-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "wz-section wz-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull wz-section wz-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "wz-notes"} -->
<div class="wp-block-query alignwide wz-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"wz-note__img"} /-->

<!-- wp:group {"className":"wz-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group wz-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"wz-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"wz-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"wz-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( waza_college_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( waza_college_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( waza_college_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
