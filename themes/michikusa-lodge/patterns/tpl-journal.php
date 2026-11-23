<?php
/**
 * Title: Template: journal
 * Slug: michikusa-lodge/tpl-journal
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Journal page title and a dated hairline list of posts.
 */
?>
<!-- wp:pattern {"slug":"michikusa-lodge/tpl-window"} /-->
<!-- wp:group {"tagName":"section","align":"full","className":"ml-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-pagehead"><!-- wp:group {"className":"ml-wrap ml-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap ml-pagehead__in"><!-- wp:paragraph {"className":"ml-eyebrow"} -->
<p class="ml-eyebrow"><?php echo esc_html( michikusa_lodge_t( 'j_eyebrow' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"ml-pagehead__h"} -->
<h1 class="wp-block-heading ml-pagehead__h"><?php echo esc_html( michikusa_lodge_t( 'j_h' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-sec ml-sec--tight"><!-- wp:group {"className":"ml-wrap ml-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap ml-narrow"><!-- wp:query {"queryId":11,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ml-loop"} -->
<div class="wp-block-query ml-loop"><!-- wp:post-template {"className":"ml-loop__list","layout":{"type":"default"}} -->
<!-- wp:group {"className":"ml-post","layout":{"type":"default"}} -->
<div class="wp-block-group ml-post"><!-- wp:post-date {"format":"d.m.Y","className":"ml-post__d"} /-->

<!-- wp:post-terms {"term":"category","className":"ml-post__c"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"ml-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
