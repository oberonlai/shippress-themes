<?php
/**
 * Title: Template: Archive
 * Slug: enban-records/tpl-archive
 * Categories: enban-records
 * Inserter: no
 * Description: Archive archive: centred head with a ARCHIVE sub-label, the Topics bar and the posts as sleeve-style cards.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec eb-sec--first","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec eb-sec--first"><!-- wp:group {"className":"eb-head3","layout":{"type":"constrained"}} -->
<div class="wp-block-group eb-head3"><!-- wp:query-title {"type":"archive","showPrefix":false,"level":1,"textAlign":"center","className":"eb-h1"} /-->

<!-- wp:paragraph {"align":"center","className":"eb-sub"} -->
<p class="has-text-align-center eb-sub">Journal archive</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"eb-bar eb-bar--local","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull eb-bar eb-bar--local"><!-- wp:group {"className":"eb-bar__in","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group eb-bar__in"><!-- wp:paragraph {"className":"eb-bar__label"} -->
<p class="eb-bar__label">Topics</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"eb-bar__links"} -->
<p class="eb-bar__links"><a href="/category/behind-the-counter/">Behind the counter</a> <span class="eb-bar__sep">/</span> <a href="/category/from-the-desk/">From the desk</a> <span class="eb-bar__sep">/</span> <a href="/tag/cleaning/">Cleaning</a> <span class="eb-bar__sep">/</span> <a href="/tag/grading/">Grading</a> <span class="eb-bar__sep">/</span> <a href="/tag/first-records/">First records</a> <span class="eb-bar__sep">/</span> <a href="/tag/listening/">Listening</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"eb-sec","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull eb-sec"><!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"eb-posts"} -->
<div class="wp-block-query eb-posts"><!-- wp:post-template {"className":"eb-crate eb-posts__list","layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"eb-card__fig"} /-->

<!-- wp:post-terms {"term":"category","className":"eb-card__fmtname"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"eb-card__title"} /-->

<!-- wp:post-date {"format":"j F Y","className":"eb-card__meta"} /-->

<!-- wp:read-more {"content":"Read","className":"eb-status eb-status--read"} /-->
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
