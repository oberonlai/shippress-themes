<?php
/**
 * Title: Template: archive
 * Slug: kakeru-run/tpl-archive
 * Categories: kakeru-run
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kr-main","layout":{"type":"default"}} -->
<main class="wp-block-group kr-main"><!-- wp:group {"align":"full","className":"kr-row kr-head","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull kr-row kr-head"><!-- wp:group {"className":"kr-rail kr-rail--l","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--l"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-cell kr-cell--pad kr-s3","layout":{"type":"default"}} -->
<div class="wp-block-group kr-cell kr-cell--pad kr-s3"><!-- wp:paragraph {"className":"kr-label"} -->
<p class="kr-label"><?php echo wp_kses_post( kakeru_run_t( 'ke727b009' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"archive","level":1,"showPrefix":false,"className":"kr-h2 kr-h2--display"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kr-rail kr-rail--r","layout":{"type":"default"}} -->
<div class="wp-block-group kr-rail kr-rail--r"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kr-postsrow","layout":{"type":"default"}} -->
<div class="wp-block-query kr-postsrow"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","className":"kr-postcard__img"} /-->

<!-- wp:group {"className":"kr-postcard__cap","layout":{"type":"default"}} -->
<div class="wp-block-group kr-postcard__cap"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"isLink":true,"level":3} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"kr-nores"} -->
<p class="kr-nores"><?php echo wp_kses_post( kakeru_run_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->