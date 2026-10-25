<?php
/**
 * Title: Template: single
 * Slug: kazoe-app/tpl-single
 * Categories: kazoe-app
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kz-main kz-main--inner","layout":{"type":"default"}} -->
<main class="wp-block-group kz-main kz-main--inner"><!-- wp:group {"className":"kz-pagehead","layout":{"type":"default"}} -->
<div class="wp-block-group kz-pagehead"><!-- wp:post-terms {"term":"category","className":"kz-cat"} /-->

<!-- wp:post-title {"level":1,"className":"kz-h1 kz-box"} /-->

<!-- wp:post-date {"format":"<?php echo esc_attr( kazoe_app_t( 'date_fmt' ) ); ?>"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kz-article","layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group kz-article"><!-- wp:post-featured-image {"aspectRatio":"3/2"} /-->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:post-terms {"term":"post_tag","className":"kz-tags"} /-->

<!-- wp:group {"className":"kz-postnav","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group kz-postnav"><!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_attr( kazoe_app_t( 'aaa015f12' ) ); ?>","showTitle":true} /-->
<!-- wp:post-navigation-link {"label":"<?php echo esc_attr( kazoe_app_t( 'a61057a0c' ) ); ?>","showTitle":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->