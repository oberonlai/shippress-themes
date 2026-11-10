<?php
/**
 * Title: Template: search
 * Slug: yawara-rheumatology/tpl-search
 * Categories: yawara-rheumatology
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"yw-main","layout":{"type":"default"}} -->
<main class="wp-block-group yw-main"><!-- wp:group {"className":"yw-sec yw-split yw-pagehead"} -->
<div class="wp-block-group yw-sec yw-split yw-pagehead"><!-- wp:group {"className":"yw-split__l"} --><div class="wp-block-group yw-split__l"></div><!-- /wp:group -->
<!-- wp:group {"className":"yw-split__r"} --><div class="wp-block-group yw-split__r"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo wp_kses_post( yawara_rheumatology_t( 'k13348442' ) ); ?></h1>
<!-- /wp:heading --></div><!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":9,"postType":"post","inherit":true},"align":"full","className":"yw-query"} -->
<div class="wp-block-query alignfull yw-query"><!-- wp:post-template {"className":"yw-posts"} -->
<!-- wp:group {"className":"yw-cell yw-cell--sq"} -->
<div class="wp-block-group yw-cell yw-cell--sq"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","scale":"cover","className":"yw-cell__img"} /-->

<!-- wp:group {"className":"yw-tab yw-tab--post"} -->
<div class="wp-block-group yw-tab yw-tab--post"><!-- wp:post-date {"format":"Y.m.d","className":"yw-chip"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"yw-tab__t"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->