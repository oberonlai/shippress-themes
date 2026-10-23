<?php
/**
 * Title: Template: post list
 * Slug: aoba-veterinary/tpl-index
 * Categories: aoba-veterinary
 * Keywords: template
 * Viewport Width: 1440
 * Description: Query loop used by the index, archive, category, tag and posts-page templates.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"av-pagehead","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull av-pagehead"><!-- wp:query-title {"type":"archive","align":"wide"} /--></section>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"av-prose"} -->
<div class="wp-block-query av-prose"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"level":2,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"excerptLength":40} /-->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
