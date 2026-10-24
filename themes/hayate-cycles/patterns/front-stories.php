<?php
/**
 * Title: Home: stories
 * Slug: hayate-cycles/front-stories
 * Categories: hayate-cycles
 * Keywords: bicycle, workshop, home
 * Viewport Width: 1440
 * Description: One large story with a wiped photograph and three hairline story rows (post query).
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"hc-section hc-section--stories","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-section hc-section--stories">
<!-- wp:group {"className":"hc-stories__head","layout":{"type":"default"}} -->
<div class="wp-block-group hc-stories__head">
<!-- wp:heading {"className":"hc-title"} -->
<h2 class="wp-block-heading hc-title"><?php echo esc_html( hayate_cycles_t( 'st_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-sub"} -->
<p class="hc-sub"><?php echo esc_html( hayate_cycles_t( 'st_sub' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"hc-story-main","layout":{"type":"default"}} -->
<div class="wp-block-query hc-story-main"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"hc-story-main__post","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story-main__post">
<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"full","className":"hc-story-main__img sp-reveal sp-reveal--wipe"} /-->

<!-- wp:group {"className":"hc-story-main__body","layout":{"type":"default"}} -->
<div class="wp-block-group hc-story-main__body">
<!-- wp:post-date {"className":"hc-meta"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hc-story-main__title"} /-->

<!-- wp:post-excerpt {"excerptLength":38,"className":"hc-story-main__excerpt"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"hc-story-rows","layout":{"type":"default"}} -->
<div class="wp-block-query hc-story-rows"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"align":"full","className":"hc-story-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hc-story-row sp-reveal sp-reveal--up">
<!-- wp:post-date {"className":"hc-meta"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"hc-story-row__title"} /-->

<!-- wp:paragraph {"className":"hc-story-row__arrow"} -->
<p class="hc-story-row__arrow">→</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
</section>
<!-- /wp:group -->
