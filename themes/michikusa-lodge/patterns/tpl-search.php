<?php
/**
 * Title: Template: search
 * Slug: michikusa-lodge/tpl-search
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Search results.
 */
?>
<!-- wp:pattern {"slug":"michikusa-lodge/tpl-window"} /-->
<!-- wp:group {"tagName":"section","align":"full","className":"ml-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-pagehead"><!-- wp:group {"className":"ml-wrap ml-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap ml-pagehead__in"><!-- wp:paragraph {"className":"ml-eyebrow"} -->
<p class="ml-eyebrow"><?php echo esc_html( michikusa_lodge_t( 's_eyebrow' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:query-title {"type":"search","level":1,"className":"ml-pagehead__h"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-sec ml-sec--tight"><!-- wp:group {"className":"ml-wrap ml-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap ml-narrow"><!-- wp:query {"queryId":12,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"ml-post","layout":{"type":"default"}} -->
<div class="wp-block-group ml-post"><!-- wp:post-title {"level":2,"isLink":true,"className":"ml-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
