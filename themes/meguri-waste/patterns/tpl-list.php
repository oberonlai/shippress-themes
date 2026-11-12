<?php
/**
 * Title: Template: post list
 * Slug: meguri-waste/tpl-list
 * Categories: meguri-waste
 * Inserter: no
 * Description: Ruled list of posts with a 1.45:1 picture, date and excerpt.
 */
?>
<!-- wp:group {"align":"full","tagName":"section","className":"mw-sec mw-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mw-sec mw-list"><!-- wp:group {"className":"mw-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mw-wrap"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"mw-case","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1.45","className":"mw-case__pic"} /-->

<!-- wp:group {"className":"mw-case__text","layout":{"type":"default"}} -->
<div class="wp-block-group mw-case__text"><!-- wp:post-date {"format":"j M Y","className":"mw-case__meta"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mw-h3"} /-->

<!-- wp:post-excerpt {"excerptLength":30} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
