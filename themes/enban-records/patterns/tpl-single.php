<?php
/**
 * Title: Single post
 * Slug: enban-records/tpl-single
 * Categories: enban-records
 * Inserter: no
 * Description: Post head as an inset card with the featured image, a 680 px reading measure, tags and related post cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec eb-sec--first eb-sec--head","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec eb-sec--first eb-sec--head"><!-- wp:group {"className":"eb-phead","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead"><!-- wp:group {"className":"eb-phead__text","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead__text"><!-- wp:paragraph {"className":"eb-eyebrow"} -->
<p class="eb-eyebrow">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"className":"eb-h1 eb-phead__title"} /-->

<!-- wp:post-excerpt {"excerptLength":28,"moreText":"","className":"eb-lede"} /-->

<!-- wp:group {"className":"eb-postmeta","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group eb-postmeta"><!-- wp:post-date {"format":"j F Y"} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"eb-phead__card sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group eb-phead__card sp-parallax"><!-- wp:post-featured-image {"aspectRatio":"3/2","className":"eb-phead__fig"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec eb-sec--post","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec eb-sec--post"><!-- wp:post-content {"className":"eb-prose eb-prose--post","layout":{"type":"constrained","contentSize":"680px"}} /-->

<!-- wp:group {"className":"eb-postfoot","layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group eb-postfoot"><!-- wp:post-terms {"term":"post_tag","prefix":"Tagged: ","className":"eb-tags"} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec"><!-- wp:group {"className":"eb-head3 sp-reveal sp-reveal--up","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3 sp-reveal sp-reveal--up"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">More from the journal</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Keep reading</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"eb-posts eb-posts--related"} -->
<div class="wp-block-query eb-posts eb-posts--related"><!-- wp:post-template {"className":"eb-crate eb-posts__list","layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"eb-card__fig"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"eb-card__title"} /-->

<!-- wp:post-date {"format":"j F Y","className":"eb-card__meta"} /-->

<!-- wp:read-more {"content":"Read","className":"eb-status eb-status--read"} /-->

<!-- wp:post-terms {"term":"category","className":"eb-card__fmtname"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nothing here yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"className":"eb-end","layout":{"type":"default"}} -->
<div class="wp-block-group eb-end"><!-- wp:buttons {"className":"eb-boxrow"} -->
<div class="wp-block-buttons eb-boxrow"><!-- wp:button {"className":"is-style-eb-box eb-box--330"} -->
<div class="wp-block-button is-style-eb-box eb-box--330"><a class="wp-block-button__link wp-element-button" href="/journal/">Back to the journal</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
