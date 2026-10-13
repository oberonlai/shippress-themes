<?php
/**
 * Title: Home: latest from the journal
 * Slug: shiori-review/home-journal
 * Categories: shiori-review
 * Keywords: literary magazine, journal
 * Viewport Width: 1440
 * Description: The three latest journal notes as quiet rows with a small photograph, on the same reading axis as the contents.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"sr-section sr-home-journal sr-section--last","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull sr-section sr-home-journal sr-section--last"><!-- wp:group {"align":"wide","className":"sr-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide sr-split"><!-- wp:group {"className":"sr-split__aside","layout":{"type":"default"}} -->
<div class="wp-block-group sr-split__aside"><!-- wp:paragraph {"className":"sr-mark"} -->
<p class="sr-mark">Journal</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sr-sec__title"} -->
<h2 class="wp-block-heading sr-sec__title">Notes between issues.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"sr-links"} -->
<div class="wp-block-buttons sr-links"><!-- wp:button {"className":"is-style-text-link"} -->
<div class="wp-block-button is-style-text-link"><a class="wp-block-button__link wp-element-button" href="/journal/">All notes</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sr-split__main","layout":{"type":"default"}} -->
<div class="wp-block-group sr-split__main"><!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"sr-rows"} -->
<div class="wp-block-query sr-rows"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"sr-post__img"} /-->

<!-- wp:group {"className":"sr-post__text","layout":{"type":"default"}} -->
<div class="wp-block-group sr-post__text"><!-- wp:post-date {"format":"j M Y","className":"sr-post__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"sr-post__title"} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
