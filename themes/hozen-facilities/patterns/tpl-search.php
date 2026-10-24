<?php
/**
 * Title: Template: search
 * Slug: hozen-facilities/tpl-search
 * Inserter: no
 * Categories: hozen-facilities
 * Keywords: facilities, maintenance, home
 * Viewport Width: 1440
 * Description: Template: search
 */
?>
<!-- wp:group {"tagName":"main","className":"hz-main","layout":{"type":"default"}} -->
<main class="wp-block-group hz-main">
<!-- wp:group {"align":"full","className":"hz-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hz-pagehead">
<!-- wp:group {"className":"hz-lockup hz-lockup--page","layout":{"type":"default"}} -->
<div class="wp-block-group hz-lockup hz-lockup--page">
<!-- wp:heading {"level":2,"className":"hz-lockup__title"} -->
<h2 class="wp-block-heading hz-lockup__title"><?php echo esc_html( hozen_facilities_t( 'tsr_t' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hz-lockup__label"} -->
<p class="hz-lockup__label"><?php echo esc_html( hozen_facilities_t( 'tsr_l' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hz-lockup__desc"} -->
<p class="hz-lockup__desc"><?php echo esc_html( hozen_facilities_t( 'tsr_d' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"hz-pagebody","layout":{"type":"default"}} -->
<div class="wp-block-group hz-pagebody">
<!-- wp:search {"label":"<?php echo esc_attr( hozen_facilities_t( 'tsr_btn' ) ); ?>","buttonText":"<?php echo esc_attr( hozen_facilities_t( 'tsr_btn' ) ); ?>","showLabel":false} /-->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"hz-row","layout":{"type":"default"}} -->
<div class="wp-block-group hz-row">
<!-- wp:post-title {"level":3,"isLink":true,"className":"hz-cap__title"} /--><!-- wp:post-excerpt {"excerptLength":30} /-->
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
