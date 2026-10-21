<?php
/**
 * Title: Home: three latest journal notes
 * Slug: hada-dermatology/front-journal
 * Categories: hada-dermatology
 * Keywords: home
 * Viewport Width: 1440
 * Description: Three latest posts, inset image on a band, date, serif title and a short excerpt.
 */
?>
<!-- wp:group {"tagName":"section","className":"hd-journal","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hd-journal"><!-- wp:group {"align":"wide","className":"hd-journal__inner","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide hd-journal__inner">
<!-- wp:paragraph {"className":"hd-label"} -->
<p class="hd-label">JOURNAL</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"className":"hd-big"} -->
<h2 class="wp-block-heading hd-big">Notes from the clinic</h2>
<!-- /wp:heading -->
<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"hd-posts"} -->
<div class="wp-block-query hd-posts"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"hd-posts__img"} /-->
<!-- wp:post-date {"format":"F j, Y","className":"hd-posts__date"} /-->
<!-- wp:post-title {"level":3,"isLink":true,"className":"hd-posts__title"} /-->
<!-- wp:post-excerpt {"excerptLength":18,"moreText":""} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group --></section>
<!-- /wp:group -->
