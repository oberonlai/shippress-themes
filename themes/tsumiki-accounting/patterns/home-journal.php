<?php
/**
 * Title: Home: journal
 * Slug: tsumiki-accounting/home-journal
 * Categories: tsumiki-accounting
 * Keywords: accounting
 * Viewport Width: 1440
 * Description: The three latest journal notes.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ta-section ta-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ta-section ta-section--last"><!-- wp:group {"align":"wide","className":"ta-index__head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide ta-index__head"><!-- wp:group {"className":"ta-intro","layout":{"type":"default"}} -->
<div class="wp-block-group ta-intro"><!-- wp:paragraph {"className":"is-style-label"} -->
<p class="is-style-label">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"ta-intro__title"} -->
<h2 class="wp-block-heading ta-intro__title">Notes from the ledger.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"ta-links"} -->
<div class="wp-block-buttons ta-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"ta-cards"} -->
<div class="wp-block-query alignwide ta-cards"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

<!-- wp:post-date {"format":"j M Y"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":18} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
