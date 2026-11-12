<?php
/**
 * Title: Home: journal
 * Slug: gaku-frames/front-journal
 * Categories: gaku-frames
 * Keywords: posts, blog, journal, cards
 * Viewport Width: 1440
 * Description: Split headline and the three newest posts as 3:2 photo cards with a category pill.
 */
?>
<!-- wp:group {"align":"full","className":"gk-sec gk-journal","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull gk-sec gk-journal"><!-- wp:group {"className":"gk-split sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group gk-split sp-stagger"><!-- wp:heading {"className":"sp-reveal sp-reveal--up"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--up"><?php echo wp_kses_post( gaku_frames_t( 'k6b2b5614' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"gk-split__line2 sp-reveal sp-reveal--up"} -->
<p class="gk-split__line2 sp-reveal sp-reveal--up"><?php echo wp_kses_post( gaku_frames_t( 'k59d85d93' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"gk-journal__query","layout":{"type":"default"}} -->
<div class="wp-block-query gk-journal__query"><!-- wp:post-template {"className":"gk-cards","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"gk-card","layout":{"type":"default"}} -->
<div class="wp-block-group gk-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"gk-card__photo"} /-->

<!-- wp:post-terms {"term":"category","className":"gk-card__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"gk-card__title"} /-->

<!-- wp:post-date {"className":"gk-card__date"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
