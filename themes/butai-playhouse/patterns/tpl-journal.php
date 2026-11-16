<?php
/**
 * Title: Template: journal
 * Slug: butai-playhouse/tpl-journal
 * Categories: butai-playhouse
 * Inserter: no
 * Viewport Width: 1440
 * Description: Plain head with the Journal title and the post cards.
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"bp-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull bp-main"><!-- wp:group {"tagName":"section","align":"full","className":"bp-plainhead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bp-plainhead"><!-- wp:paragraph {"className":"bp-vlabel"} -->
<p class="bp-vlabel"><span>Journal</span></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"bp-h1"} -->
<h1 class="wp-block-heading bp-h1">Journal</h1>
<!-- /wp:heading --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"bp-board bp-dark bp-jgrid","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull bp-board bp-dark bp-jgrid"><!-- wp:group {"className":"bp-marq sp-marquee","layout":{"type":"default"}} -->
<div class="wp-block-group bp-marq sp-marquee"><!-- wp:group {"className":"bp-run","layout":{"type":"default"}} -->
<div class="wp-block-group bp-run"><!-- wp:paragraph {"className":"bp-marq__text"} -->
<p class="bp-marq__text">FROM THE REHEARSAL ROOM — THE JOURNAL — </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="bp-run" aria-hidden="true"><p class="bp-marq__text">FROM THE REHEARSAL ROOM — THE JOURNAL — </p></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"bp-rows"} -->
<div class="wp-block-query bp-rows"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"bp-card","layout":{"type":"default"}} -->
<div class="wp-block-group bp-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"7/10","className":"bp-card__img"} /-->

<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"bp-pagination"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
