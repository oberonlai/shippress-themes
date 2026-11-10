<?php
/**
 * Title: Template: home
 * Slug: genba-diary/tpl-home
 * Categories: genba-diary
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"gd-main","layout":{"type":"default"}} -->
<main class="wp-block-group gd-main"><!-- wp:group {"className":"gd-pagehead gd-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group gd-pagehead gd-wrap"><!-- wp:group {"className":"gd-sechead sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group gd-sechead sp-reveal sp-reveal--wipe"><!-- wp:paragraph {"className":"gd-label"} -->
<p class="gd-label"><?php echo wp_kses_post( genba_diary_t( 'kf537c758' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"gd-pagehead__title"} -->
<h1 class="wp-block-heading gd-pagehead__title"><?php echo wp_kses_post( genba_diary_t( 'k88f27b6e' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"gd-rule"} -->
<hr class="wp-block-separator has-alpha-channel-opacity gd-rule"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"gd-lead"} -->
<p class="gd-lead"><?php echo wp_kses_post( genba_diary_t( 'k0ecca234' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"gd-wrap gd-sec","layout":{"type":"default"}} -->
<div class="wp-block-group gd-wrap gd-sec"><!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"gd-posts","layout":{"type":"default"}} -->
<div class="wp-block-query gd-posts"><!-- wp:post-template {"className":"gd-cards gd-cards--posts","layout":{"type":"default"}} -->
<!-- wp:group {"className":"gd-card","layout":{"type":"default"}} -->
<div class="wp-block-group gd-card"><!-- wp:post-terms {"term":"category","className":"gd-micro"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"gd-card__t"} /-->

<!-- wp:post-featured-image {"isLink":true,"className":"gd-card__img"} /-->

<!-- wp:post-excerpt {"excerptLength":18,"className":"gd-card__p"} /-->

<!-- wp:group {"className":"gd-more","layout":{"type":"default"}} -->
<div class="wp-block-group gd-more"><!-- wp:read-more {"content":"VIEW MORE"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( genba_diary_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->