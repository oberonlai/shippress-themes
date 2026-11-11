<?php
/**
 * Title: Template: archive
 * Slug: nagisa-grill/tpl-archive
 * Categories: nagisa-grill
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ng-main ng-main--plain","layout":{"type":"default"}} -->
<main class="wp-block-group ng-main ng-main--plain"><!-- wp:pattern {"slug":"nagisa-grill/head-archive"} /-->

<!-- wp:query {"queryId":1,"query":{"perPage":9,"postType":"post","inherit":true},"align":"full","className":"ng-query"} -->
<div class="wp-block-query alignfull ng-query"><!-- wp:post-template {"className":"ng-cards"} -->
<!-- wp:group {"className":"ng-card"} -->
<div class="wp-block-group ng-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","scale":"cover","className":"ng-card__img"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( nagisa_grill_t( 'date_fmt' ) ); ?>","className":"ng-card__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ng-card__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"className":"ng-pagination"} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->