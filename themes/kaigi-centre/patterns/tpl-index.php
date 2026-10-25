<?php
/**
 * Title: Template: index
 * Slug: kaigi-centre/tpl-index
 * Categories: kaigi-centre
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main"><!-- wp:group {"align":"full","className":"kc-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-pagehead"><!-- wp:heading {"level":1,"className":"kc-pagehead__title"} -->
<h1 class="wp-block-heading kc-pagehead__title"><?php echo wp_kses_post( kaigi_centre_t( 'kf1c9e9af' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"kc-pagebody kc-pagebody--wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kc-pagebody kc-pagebody--wide"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kc-posts","layout":{"type":"default"}} -->
<div class="wp-block-query kc-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"kc-post","layout":{"type":"default"}} -->
<div class="wp-block-group kc-post"><!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->