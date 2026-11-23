<?php
/**
 * Title: Template: archive
 * Slug: michikusa-lodge/tpl-archive
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Inserter: false
 * Description: Archive page title and a dated hairline list.
 */
?>
<!-- wp:pattern {"slug":"michikusa-lodge/tpl-window"} /-->
<!-- wp:group {"tagName":"section","align":"full","className":"ml-pagehead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-pagehead"><!-- wp:group {"className":"ml-wrap ml-pagehead__in","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap ml-pagehead__in"><!-- wp:paragraph {"className":"ml-eyebrow"} -->
<p class="ml-eyebrow"><?php echo esc_html( michikusa_lodge_t( 'a_eyebrow' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:query-title {"type":"archive","level":1,"className":"ml-pagehead__h"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--tight","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ml-sec ml-sec--tight"><!-- wp:group {"className":"ml-wrap ml-narrow","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap ml-narrow"><!-- wp:query {"queryId":13,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query ml-loop"><!-- wp:post-template -->
<!-- wp:group {"className":"ml-post","layout":{"type":"default"}} -->
<div class="wp-block-group ml-post"><!-- wp:post-date {"format":"d.m.Y","className":"ml-post__d"} /--><!-- wp:post-title {"level":2,"isLink":true,"className":"ml-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
