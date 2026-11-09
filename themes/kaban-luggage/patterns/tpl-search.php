<?php
/**
 * Title: Template: search
 * Slug: kaban-luggage/tpl-search
 * Categories: kaban-luggage
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kl-main","layout":{"type":"constrained"}} -->
<main class="wp-block-group kl-main"><!-- wp:pattern {"slug":"kaban-luggage/tpl-head-search"} /-->

<!-- wp:search {"label":"<?php echo esc_attr( kaban_luggage_t( 'a13348442' ) ); ?>","buttonText":"<?php echo esc_attr( kaban_luggage_t( 'a13348442' ) ); ?>","className":"kl-search"} /-->

<!-- wp:group {"tagName":"section","align":"full","className":"kl-sec kl-paper kl-list","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-sec kl-paper kl-list"><!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"kl-mosaic kl-mosaic--list"} -->
<div class="wp-block-query kl-mosaic kl-mosaic--list"><!-- wp:post-template {"className":"kl-mosaic__list","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kl-card__img"} /-->

<!-- wp:post-terms {"term":"category","className":"kl-card__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kl-card__title"} /-->

<!-- wp:post-date {"className":"kl-card__date"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kaban_luggage_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->