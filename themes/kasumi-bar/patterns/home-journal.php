<?php
/**
 * Title: Home: journal
 * Slug: kasumi-bar/home-journal
 * Categories: kasumi-bar
 * Keywords: bar
 * Viewport Width: 1440
 * Description: The three latest journal notes as a quiet list.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kb-section kb-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kb-section kb-section--last"><!-- wp:group {"className":"kb-chapter","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chapter"><!-- wp:heading {"className":"kb-vt"} -->
<h2 class="wp-block-heading kb-vt">Journal</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"kb-chapter__body","layout":{"type":"default"}} -->
<div class="wp-block-group kb-chapter__body"><!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"kb-list"} -->
<div class="wp-block-query kb-list"><!-- wp:post-template -->
<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"className":"kb-links"} -->
<div class="wp-block-buttons kb-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/newsletter/">The seasonal letter</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
