<?php
/**
 * Title: Template: search
 * Slug: senbatsu-partners/tpl-search
 * Categories: senbatsu-partners
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"sb-main sb-main--plain"} -->
<main class="wp-block-group sb-main sb-main--plain">
<!-- wp:group {"tagName":"section","align":"full","className":"sb-seam"} -->
<section class="wp-block-group alignfull sb-seam">
<!-- wp:query-title {"type":"search","level":1,"className":"sb-seam__h"} /-->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"sb-band sb-band--grey","layout":{"type":"constrained","contentSize":"992px","wideSize":"992px"}} -->
<section class="wp-block-group alignfull sb-band sb-band--grey">
<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->

<!-- wp:query {"queryId":3,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"sb-letters"} -->
<div class="wp-block-query sb-letters"><!-- wp:post-template {"className":"sb-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"sb-card "} -->
<div class="wp-block-group sb-card ">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"8/5","scale":"cover","className":"sb-card__img"} /-->

<!-- wp:group {"className":"sb-card__body"} -->
<div class="wp-block-group sb-card__body">
<!-- wp:post-title {"level":3,"isLink":true,"className":"sb-card__t"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"sb-card__ex"} /-->

<!-- wp:group {"className":"sb-card__foot"} -->
<div class="wp-block-group sb-card__foot">
<!-- wp:post-terms {"term":"category","className":"sb-tag"} /-->

<!-- wp:read-more {"content":"\u003e Read the letter","className":"sb-more"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"sb-pagination"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
</section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
