<?php
/**
 * Title: Template: journal list
 * Slug: sanroku-trail/tpl-home
 * Categories: sanroku-trail
 * Inserter: no
 * Viewport Width: 1440
 * Description: Posts list used by the posts page and the archive templates.
 */
?>
<!-- wp:group {"tagName":"section","className":"st-sec st-listhead","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-listhead"><!-- wp:group {"className":"st-frame","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame"><!-- wp:heading {"level":1,"className":"st-h1 st-h1--page"} -->
<h1 class="wp-block-heading st-h1 st-h1--page"><?php echo esc_html( sanroku_trail_t( 'list_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"st-lede"} -->
<p class="st-lede"><?php echo esc_html( sanroku_trail_t( 'list_lede' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"st-sec st-list","layout":{"type":"default"}} -->
<section class="wp-block-group st-sec st-list"><!-- wp:group {"className":"st-frame","layout":{"type":"default"}} -->
<div class="wp-block-group st-frame"><!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"st-posts st-posts--list","layout":{"type":"default"}} -->
<div class="wp-block-query st-posts st-posts--list"><!-- wp:post-template {"className":"st-cards"} -->
<!-- wp:group {"className":"st-post","layout":{"type":"default"}} -->
<div class="wp-block-group st-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"st-post__img"} /-->

<!-- wp:post-date {"format":"j M Y","className":"st-post__d"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"st-post__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html( sanroku_trail_t( 'no_posts' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
