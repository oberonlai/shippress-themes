<?php
/**
 * Title: Template: journal list
 * Slug: renkei-forum/tpl-blog
 * Categories: renkei-forum
 * Viewport Width: 1440
 * Description: Journal title and the post list on hairlines.
 */
?>
<!-- wp:group {"className":"rf-page rf-blog","layout":{"type":"default"}} -->
<div class="wp-block-group rf-page rf-blog"><!-- wp:paragraph {"className":"rf-label"} -->
<p class="rf-label"><?php echo wp_kses_post( rf_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"rf-h2 rf-h1"} -->
<h1 class="wp-block-heading rf-h2 rf-h1"><span class="rf-line"><mark class="rf-bar"><?php echo wp_kses_post( rf_t( 'k6b2b5614' ) ); ?></mark></span></h1>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":10,"postType":"post","inherit":true},"className":"rf-blog__list"} -->
<div class="wp-block-query rf-blog__list"><!-- wp:post-template -->
<!-- wp:group {"className":"rf-blog__row","layout":{"type":"default"}} -->
<div class="wp-block-group rf-blog__row"><!-- wp:post-date {"className":"rf-label"} /-->

<!-- wp:post-title {"level":2,"isLink":true,"className":"rf-card__t"} /-->

<!-- wp:post-excerpt {"excerptLength":30} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --><!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( rf_t( 'k67f0f397' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
