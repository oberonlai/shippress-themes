<?php
/**
 * Title: Template: home
 * Slug: kouhi-service/tpl-home
 * Categories: kouhi-service
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"ks-main","layout":{"type":"default"}} -->
<main class="wp-block-group ks-main"><!-- wp:group {"tagName":"section","align":"full","className":"ks-sec ks-phead","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ks-sec ks-phead"><!-- wp:group {"className":"ks-in ks-journal-head","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in ks-journal-head"><!-- wp:paragraph {"className":"ks-label"} -->
<p class="ks-label"><?php echo wp_kses_post( kouhi_service_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"ks-h1"} -->
<h1 class="wp-block-heading ks-h1"><?php echo wp_kses_post( kouhi_service_t( 'kb9878836' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ks-lead"} -->
<p class="ks-lead"><?php echo wp_kses_post( kouhi_service_t( 'kd683437e' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"ks-sec ks-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull ks-sec ks-journal"><!-- wp:group {"className":"ks-in","layout":{"type":"default"}} -->
<div class="wp-block-group ks-in"><!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"ks-jrow","layout":{"type":"default"}} -->
<div class="wp-block-group ks-jrow"><!-- wp:post-date {"format":"D j M Y"} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"level":2} /-->

<!-- wp:post-excerpt {"moreText":"Read →"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","height":""} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( kouhi_service_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->