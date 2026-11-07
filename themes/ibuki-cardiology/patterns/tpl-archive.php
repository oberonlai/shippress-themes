<?php
/**
 * Title: Template: archive
 * Slug: ibuki-cardiology/tpl-archive
 * Categories: ibuki-cardiology
 * Viewport Width: 1440
 * Description: Listing head and post rows.
 */
?>
<!-- wp:group {"className":"ib-wrapin","layout":{"type":"default"}} -->
<div class="wp-block-group ib-wrapin"><!-- wp:group {"className":"ib-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group ib-pagehead"><!-- wp:paragraph {"className":"ib-pagehead__l"} -->
<p class="ib-pagehead__l">(News)</p>
<!-- /wp:paragraph --><!-- wp:query-title {"type":"archive","level":1,"className":"ib-pagehead__t"} /--></div>
<!-- /wp:group --><!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ib-newsq ib-newsq--page"} -->
<div class="wp-block-query ib-newsq ib-newsq--page"><!-- wp:post-template -->
<!-- wp:group {"className":"ib-newsrow ib-newsrow--thumb","layout":{"type":"default"}} -->
<div class="wp-block-group ib-newsrow ib-newsrow--thumb"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ib-newsrow__img"} /-->

<!-- wp:group {"className":"ib-newsrow__body","layout":{"type":"default"}} -->
<div class="wp-block-group ib-newsrow__body"><!-- wp:post-date {"format":"M j, Y","className":"ib-newsrow__d"} /-->

<!-- wp:post-terms {"term":"category","className":"ib-newsrow__c"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ib-newsrow__t"} /-->

<!-- wp:post-excerpt {"excerptLength":24} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
