<?php
/**
 * Title: Template: tag
 * Slug: enkai-rooms/tpl-tag
 * Categories: enkai-rooms
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"er-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull er-main"><!-- wp:group {"align":"full","className":"er-titleband","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull er-titleband"><!-- wp:query-title {"type":"archive","level":1,"className":"er-titleband__h"} /-->

<!-- wp:paragraph {"className":"er-titleband__sub"} -->
<p class="er-titleband__sub">From the rooms</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"er-list"} -->
<div class="wp-block-query er-list"><!-- wp:post-template -->
<!-- wp:group {"className":"er-listrow","layout":{"type":"default"}} -->
<div class="wp-block-group er-listrow"><!-- wp:post-date {"format":"<?php echo esc_attr( enkai_rooms_t( 'date_fmt' ) ); ?>","className":"er-listrow__d"} /-->

<!-- wp:post-terms {"term":"category","className":"er-listrow__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"er-listrow__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
