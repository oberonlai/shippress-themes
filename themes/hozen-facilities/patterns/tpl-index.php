<?php
/**
 * Title: Template: index
 * Slug: hozen-facilities/tpl-index
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Template: index
 */
?>
<!-- wp:group {"tagName":"main","className":"hz-main","layout":{"type":"default"}} -->
<main class="wp-block-group hz-main">
<!-- wp:group {"align":"full","className":"hz-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-pagehead">
<!-- wp:group {"className":"hz-lockup hz-lockup--page","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup hz-lockup--page">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'tfn_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'tfn_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'tfn_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-pagebody hz-pagebody--wide","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pagebody hz-pagebody--wide">
<!-- wp:query {"queryId":5,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"hz-notes__query","layout":{"type":"default"}} -->
<div class="wp-block-query hz-notes__query"><!-- wp:post-template {"className":"hz-notes__list","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"hz-note__img"} /-->

<!-- wp:group {"className":"hz-cap hz-cap--note","layout":{"type":"default"}} -->
<div class="wp-block-group hz-cap hz-cap--note">
<!-- wp:group {"className":"hz-cap__label hz-cap__label--note","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group hz-cap__label hz-cap__label--note">
<!-- wp:post-terms {"term":"category"} /--><!-- wp:post-date {"format":"j M Y"} /-->
</div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hz-cap__title"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
