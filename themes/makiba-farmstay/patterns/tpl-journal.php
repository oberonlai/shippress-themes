<?php
/**
 * Title: Template: journal
 * Slug: makiba-farmstay/tpl-journal
 * Categories: makiba-farmstay
 * Inserter: no
 * Viewport Width: 1440
 * Description: Plain moss head with the Journal title and the dotted news rows with thumbnails.
 */
?>
<!-- wp:group {"tagName":"main","align":"full","className":"mf-main","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull mf-main"><!-- wp:group {"tagName":"section","align":"full","className":"mf-plainhead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-plainhead"><!-- wp:paragraph {"className":"mf-crumb"} -->
<p class="mf-crumb">Journal</p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"mf-h1"} -->
<h1 class="wp-block-heading mf-h1">Journal</h1>
<!-- /wp:heading --></section>
<!-- /wp:group --><!-- wp:group {"tagName":"section","align":"full","className":"mf-section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull mf-section"><!-- wp:group {"className":"mf-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group mf-wrap"><!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"mf-news mf-news--list"} -->
<div class="wp-block-query mf-news mf-news--list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"mf-newsrow mf-newsrow--thumb","layout":{"type":"default"}} -->
<div class="wp-block-group mf-newsrow mf-newsrow--thumb"><!-- wp:post-featured-image {"isLink":true,"className":"mf-newsrow__img"} /-->

<!-- wp:group {"className":"mf-newsrow__tx","layout":{"type":"default"}} -->
<div class="wp-block-group mf-newsrow__tx"><!-- wp:post-date {"format":"j F Y","className":"mf-newsrow__d"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"mf-newsrow__t"} /--></div>
<!-- /wp:group -->

<!-- wp:html -->
<svg class="mf-arrow" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="15.5"/><path d="M11 16h10M17.5 12.5 21 16l-3.5 3.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
<!-- /wp:html --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"mf-pagination"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
