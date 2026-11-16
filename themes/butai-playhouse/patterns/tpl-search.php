<?php
/**
 * Title: Template: search results
 * Slug: butai-playhouse/tpl-search
 * Categories: butai-playhouse
 * Inserter: no
 * Viewport Width: 1440
 * Description: Plain head with the search title and result rows.
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"bp-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull bp-main"><!-- wp:group {"tagName":"section","align":"full","className":"bp-plainhead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bp-plainhead"><!-- wp:paragraph {"className":"bp-vlabel"} -->
<p class="bp-vlabel"><span>Search</span></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","level":1,"className":"bp-h1"} /--></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"bp-section bp-journal bp-journal--page","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bp-section bp-journal bp-journal--page"><!-- wp:group {"className":"bp-wide","layout":{"type":"default"}} -->
<div class="wp-block-group bp-wide"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"bp-rows"} -->
<div class="wp-block-query bp-rows"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"bp-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group bp-row sp-reveal sp-reveal--up"><!-- wp:group {"className":"bp-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group bp-row__text"><!-- wp:post-date {"format":"j M Y","className":"bp-row__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"bp-row__title"} /-->

<!-- wp:read-more {"content":"Read →","className":"bp-row__more"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"bp-row__thumb"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
