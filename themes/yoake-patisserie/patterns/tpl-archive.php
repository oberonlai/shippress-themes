<?php
/**
 * Title: Template: archive
 * Slug: yoake-patisserie/tpl-archive
 * Categories: yoake-patisserie
 * Inserter: no
 * Viewport Width: 1440
 * Description: Wash head and ruled text rows.
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"yk-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull yk-main"><!-- wp:group {"align":"full","className":"yk-wash yk-wash--110 yk-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yk-wash yk-wash--110 yk-pagehead"><!-- wp:paragraph {"className":"yk-kicker"} -->
<p class="yk-kicker">From the bench</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"yk-dash"} -->
<p class="yk-dash" aria-hidden="true">—</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"yk-pagehead__title"} -->
<h1 class="wp-block-heading yk-pagehead__title">Journal</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"yk-section yk-journal","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yk-section yk-journal"><!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"yk-rows"} -->
<div class="wp-block-query yk-rows"><!-- wp:post-template -->
<!-- wp:group {"className":"yk-row","layout":{"type":"default"}} -->
<div class="wp-block-group yk-row"><!-- wp:post-date {"format":"j F Y","className":"yk-row__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"yk-row__t"} /-->

<!-- wp:paragraph {"className":"yk-row__a"} -->
<p class="yk-row__a" aria-hidden="true">→</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
