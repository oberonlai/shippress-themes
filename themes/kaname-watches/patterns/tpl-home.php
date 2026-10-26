<?php
/**
 * Title: Template: home
 * Slug: kaname-watches/tpl-home
 * Categories: kaname-watches
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kw-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group kw-main"><!-- wp:pattern {"slug":"kaname-watches/win-journal"} /-->

<!-- wp:group {"tagName":"section","align":"full","className":"kw-sec kw-intro","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kw-sec kw-intro"><!-- wp:paragraph {"className":"kw-lead kw-lead--center"} -->
<p class="kw-lead kw-lead--center"><?php echo wp_kses_post( kaname_watches_t( 'kbeac0620' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"kw-sec kw-journal","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull kw-sec kw-journal"><!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"className":"kw-post-row","layout":{"type":"default"}} -->
<div class="wp-block-group kw-post-row"><!-- wp:group {"className":"kw-row__photo kw-photo kw-photo--land","layout":{"type":"default"}} -->
<div class="wp-block-group kw-row__photo kw-photo kw-photo--land"><!-- wp:post-featured-image {"isLink":true,"sizeSlug":"full"} /-->

<!-- wp:group {"className":"kw-bar-cap kw-bar-cap--photo","layout":{"type":"default"}} -->
<div class="wp-block-group kw-bar-cap kw-bar-cap--photo"><!-- wp:post-title {"level":2,"isLink":true,"className":"kw-bar-cap__name"} /-->

<!-- wp:post-date {"className":"kw-bar-cap__line"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kw-post-row__text","layout":{"type":"default"}} -->
<div class="wp-block-group kw-post-row__text"><!-- wp:post-excerpt {"excerptLength":40} /-->

<!-- wp:read-more {"content":"READ THE STORY","className":"is-style-text-link"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaname_watches_t( 'k7fbf7aec' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kaname-watches/tiles-journal"} /--></main>
<!-- /wp:group -->