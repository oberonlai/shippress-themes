<?php
/**
 * Title: Journal list
 * Slug: hitomi-vision/post-list
 * Categories: hitomi-vision
 * Inserter: no
 * Description: The notes as a list: a 3:2 photograph, the date, the title and the excerpt, one per row.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hv-sec hv-sec--in hv-dome hv-postlist","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hv-sec hv-sec--in hv-dome hv-postlist"><!-- wp:query {"query":{"perPage":10,"postType":"post","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"className":"hv-post","layout":{"type":"default"}} -->
<div class="wp-block-group hv-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"hv-post__img"} /-->

<!-- wp:group {"className":"hv-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group hv-post__text"><!-- wp:post-date {"className":"hv-head__sub hv-post__date"} /-->

<!-- wp:post-title {"isLink":true,"level":2,"className":"hv-post__title"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":40,"className":"hv-post__excerpt"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"hv-pager"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
