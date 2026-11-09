<?php
/**
 * Title: Home: news
 * Slug: okami-college/front-news
 * Categories: okami-college
 * Keywords: college, hotel, school
 * Viewport Width: 1440
 * Description: Three latest posts as ruled rows: date, grey category tag, serif title.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ok-news","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ok-news"><!-- wp:group {"className":"ok-sechead","layout":{"type":"default"}} -->
<div class="wp-block-group ok-sechead"><!-- wp:paragraph {"className":"ok-label"} -->
<p class="ok-label"><?php echo wp_kses_post( okami_college_t( 'kff4e2dc4' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"ok-h2"} -->
<h2 class="wp-block-heading ok-h2"><?php echo wp_kses_post( okami_college_t( 'kc741077b' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ok-more"} -->
<p class="ok-more"><a href="/news/"><?php echo wp_kses_post( okami_college_t( 'kfc2b5c7f' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ok-news__q"} -->
<div class="wp-block-query ok-news__q"><!-- wp:post-template -->
<!-- wp:group {"className":"ok-nrow","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group ok-nrow"><!-- wp:post-date {"format":"M j, Y","className":"ok-nrow__date"} /--><!-- wp:post-terms {"term":"category","className":"ok-nrow__cat"} /--><!-- wp:post-title {"level":0,"isLink":true,"className":"ok-nrow__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
