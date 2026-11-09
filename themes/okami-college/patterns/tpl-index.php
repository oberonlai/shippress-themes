<?php
/**
 * Title: Template: index
 * Slug: okami-college/tpl-index
 * Categories: okami-college
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ok-main ok-main--archive","layout":{"type":"constrained"}} -->
<main class="wp-block-group ok-main ok-main--archive"><!-- wp:heading {"level":1,"className":"ok-page-title"} -->
<h1 class="wp-block-heading ok-page-title"><?php echo wp_kses_post( okami_college_t( 'kdd1ba187' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"ok-news__q"} -->
<div class="wp-block-query ok-news__q"><!-- wp:post-template -->
<!-- wp:group {"className":"ok-nrow ok-nrow--list","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group ok-nrow ok-nrow--list"><!-- wp:post-date {"format":"M j, Y","className":"ok-nrow__date"} /--><!-- wp:post-terms {"term":"category","className":"ok-nrow__cat"} /--><!-- wp:post-title {"level":0,"isLink":true,"className":"ok-nrow__title"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->