<?php
/**
 * Title: Template: journal index
 * Slug: taiyo-solar-works/tpl-index
 * Categories: taiyo-solar-works
 * Keywords: template
 * Inserter: no
 * Viewport Width: 1440
 * Description: Journal heading and the news-line list.
 */
?>
<!-- wp:group {"tagName":"section","className":"ts-head","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull ts-head">
<!-- wp:heading {"level":1,"className":"alignwide"} -->
<h1 class="wp-block-heading alignwide"><?php echo wp_kses_post( taiyo_solar_works_t( 'k57d7f743' ) ); ?></h1>
<!-- /wp:heading -->
</section>
<!-- /wp:group -->
<!-- wp:group {"className":"ts-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group ts-section">
<!-- wp:query {"query":{"perPage":10,"postType":"post","inherit":true},"align":"wide","className":"ts-notes__list"} -->
<div class="wp-block-query alignwide ts-notes__list"><!-- wp:post-template -->
<!-- wp:group {"className":"ts-note__row","layout":{"type":"default"}} -->
<div class="wp-block-group ts-note__row"><!-- wp:post-date {"className":"ts-note__date"} /-->

<!-- wp:post-title {"isLink":true,"level":3,"className":"ts-note__title"} /-->

<!-- wp:post-terms {"term":"category","className":"ts-note__cat"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
