<?php
/**
 * Title: Search results
 * Slug: nagisa-grill/tpl-search
 * Categories: nagisa-grill
 * Inserter: no
 */
?>
<!-- wp:group {"className":"ng-listhead"} -->
<div class="wp-block-group ng-listhead"><?php echo nagisa_grill_tide(); ?>

<!-- wp:heading {"level":1,"className":"ng-word","fontSize":"xx-large"} -->
<h1 class="wp-block-heading ng-word has-xx-large-font-size">Search</h1>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":9,"postType":"post","inherit":true},"align":"full","className":"ng-query"} -->
<div class="wp-block-query alignfull ng-query"><!-- wp:post-template {"className":"ng-cards"} -->
<!-- wp:group {"className":"ng-card"} -->
<div class="wp-block-group ng-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","scale":"cover","className":"ng-card__img"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ng-card__t"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
