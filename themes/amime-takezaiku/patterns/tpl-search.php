<?php
/**
 * Title: Search: head and results
 * Slug: amime-takezaiku/tpl-search
 * Categories: amime-takezaiku
 * Keywords: manga, comics, illustration
 * Viewport Width: 1440
 * Inserter: no
 * Description: The search head with the search box and the results.
 */
?>
<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-pagehead", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-pagehead"><!-- wp:paragraph {"className": "tk-eyebrow"} -->
<p class="tk-eyebrow"><?php echo esc_html( amime_takezaiku_t( 'search' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level": 1, "className": "tk-pagehead__title"} -->
<h1 class="wp-block-heading tk-pagehead__title"><?php echo esc_html( amime_takezaiku_t( 'search_title' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":<?php echo wp_json_encode( amime_takezaiku_t( 'search' ) ); ?>,"showLabel":false,"placeholder":<?php echo wp_json_encode( amime_takezaiku_t( 'search_ph' ) ); ?>,"buttonText":<?php echo wp_json_encode( amime_takezaiku_t( 'search_btn' ) ); ?>,"className":"tk-search"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName": "section", "align": "full", "className": "tk-section tk-list", "layout": {"type": "constrained"}} -->
<section class="wp-block-group alignfull tk-section tk-list"><!-- wp:query {"queryId": 1, "query": {"perPage": 9, "pages": 0, "offset": 0, "postType": "post", "order": "desc", "orderBy": "date", "author": "", "search": "", "exclude": [], "sticky": "", "inherit": true}, "align": "wide", "className": "tk-notes"} -->
<div class="wp-block-query alignwide tk-notes"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"tk-note__img"} /-->

<!-- wp:group {"className":"tk-note__text","layout":{"type":"default"}} -->
<div class="wp-block-group tk-note__text"><!-- wp:post-date {"format":"Y.m.d","className":"tk-note__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"tk-note__title"} /-->

<!-- wp:post-excerpt {"excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"tk-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":<?php echo wp_json_encode( amime_takezaiku_t( 'newer' ) ); ?>} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":<?php echo wp_json_encode( amime_takezaiku_t( 'older' ) ); ?>} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( amime_takezaiku_t( 'no_results' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
