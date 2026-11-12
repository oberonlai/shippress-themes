<?php
/**
 * Title: Template: post list
 * Slug: himuro-gelato/tpl-list
 * Categories: himuro-gelato
 * Inserter: no
 * Description: Posts list used by archive, category, tag, search and the posts page.
 */
?>
<!-- wp:group {"className":"hg-prose hg-sec","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-prose hg-sec"><!-- wp:group {"className":"hg-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"hg-jq","layout":{"type":"default"}} -->
<div class="wp-block-query hg-jq"><!-- wp:post-template {"className":"hg-jlist"} -->
<!-- wp:group {"className":"hg-jrow","layout":{"type":"default"}} -->
<div class="wp-block-group hg-jrow"><!-- wp:post-featured-image {"isLink":true,"className":"hg-jrow__img"} /-->

<!-- wp:group {"className":"hg-jrow__txt","layout":{"type":"default"}} -->
<div class="wp-block-group hg-jrow__txt"><!-- wp:post-date {"format":"j F Y","className":"hg-jrow__date"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"hg-jrow__t"} /-->

<!-- wp:post-excerpt {"excerptLength":30,"className":"hg-jrow__x"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hg-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
