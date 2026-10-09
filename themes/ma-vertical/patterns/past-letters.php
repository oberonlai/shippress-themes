<?php
/**
 * Title: Past letters (tanzaku strips)
 * Slug: ma-vertical/past-letters
 * Categories: ma-vertical, posts, query
 * Keywords: posts, query, tanzaku, vertical, archive
 * Block Types: core/query
 * Description: Three latest posts as vertical tanzaku strips, read right to left.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow">Past letters</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":21,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-query alignwide" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:post-template {"className":"ma-tanzaku ma-tanzaku--3"} -->
<!-- wp:post-date {"format":"Y.m.d"} /-->

<!-- wp:group {"className":"is-style-tategaki ma-tanzaku__body","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-tategaki ma-tanzaku__body"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":14} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
