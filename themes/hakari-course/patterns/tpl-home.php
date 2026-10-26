<?php
/**
 * Title: Template: home
 * Slug: hakari-course/tpl-home
 * Categories: hakari-course
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"hk-main","layout":{"type":"default"}} -->
<main class="wp-block-group hk-main"><!-- wp:group {"className":"hk-innerwrap","layout":{"type":"default"}} -->
<div class="wp-block-group hk-innerwrap"><!-- wp:group {"className":"hk-pheadwrap hk-pheadwrap--plain","layout":{"type":"default"}} -->
<div class="wp-block-group hk-pheadwrap hk-pheadwrap--plain"><!-- wp:group {"tagName":"section","className":"hk-phead hk-phead--plain","layout":{"type":"default"}} -->
<section class="wp-block-group hk-phead hk-phead--plain"><!-- wp:group {"className":"hk-phead__copy","layout":{"type":"default"}} -->
<div class="wp-block-group hk-phead__copy"><!-- wp:paragraph {"className":"hk-phead__word"} -->
<p class="hk-phead__word"><?php echo wp_kses_post( hakari_course_t( 'kf4c6f851' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:heading {"level":1,"className":"hk-phead__title"} -->
<h1 class="wp-block-heading hk-phead__title"><?php echo wp_kses_post( hakari_course_t( 'kbeff306a' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"hk-panel hk-panel--prose hk-panel--notes","layout":{"type":"default"}} -->
<div class="wp-block-group hk-panel hk-panel--prose hk-panel--notes"><!-- wp:query {"query":{"perPage":10,"postType":"post","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"hk-pcards","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"hk-pcard","layout":{"type":"default"}} -->
<div class="wp-block-group hk-pcard"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
<!-- wp:post-date {"className":"hk-pcard__date"} /-->
<!-- wp:post-title {"isLink":true,"level":2,"className":"hk-pcard__t"} /-->
<!-- wp:post-excerpt {"excerptLength":28} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( hakari_course_t( 'kbee0a8cf' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->