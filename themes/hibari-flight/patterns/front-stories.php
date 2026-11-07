<?php
/**
 * Title: Home: stories
 * Slug: hibari-flight/front-stories
 * Categories: hibari-flight
 * Keywords: flight school, pilot, aviation
 * Viewport Width: 1440
 * Description: The three latest stories with a single 48px corner on each image.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hf-sec hf-stories","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull hf-sec hf-stories"><!-- wp:group {"align":"wide","className":"hf-in hf-stories__top","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hf-in hf-stories__top"><!-- wp:heading {"level":2,"className":"hf-word "} -->
<h2 class="wp-block-heading hf-word ">STORIES</h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"hf-tlink"} -->
<p class="hf-tlink"><a href="/stories/">All stories →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","className":"hf-cards"} -->
<div class="wp-block-query alignwide hf-cards"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"hf-card sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group hf-card sp-reveal sp-reveal--up"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"8/7","className":"hf-card__img"} /-->

<!-- wp:post-date {"format":"Y.m.d","className":"hf-card__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hf-card__title"} /-->

<!-- wp:post-excerpt {"excerptLength":25,"className":"hf-card__excerpt"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
