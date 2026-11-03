<?php
/**
 * Title: Template: home
 * Slug: tomari-marina/tpl-home
 * Categories: tomari-marina
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"tm-main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group tm-main" style="margin-top:0"><!-- wp:pattern {"slug":"tomari-marina/inner-journal-head"} /-->

<!-- wp:group {"align":"full","className":"tm-listing","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull tm-listing"><!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide","className":"tm-posts"} -->
<div class="wp-block-query alignwide tm-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} --><!-- wp:group {"className":"tm-post","layout":{"type":"default"}} -->
<div class="wp-block-group tm-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
<!-- wp:post-date {"format":"<?php echo esc_attr( tomari_marina_t( 'date_fmt' ) ); ?>","className":"tm-meta"} /-->
<!-- wp:post-title {"level":3,"isLink":true} /--></div>
<!-- /wp:group --><!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->