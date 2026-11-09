<?php
/**
 * Title: Home: notes
 * Slug: kogarashi-inn/front-notes
 * Categories: kogarashi-inn
 * Viewport Width: 1440
 * Description: News from the house: two latest posts as notice cards, a More link and a dashed closing rule.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ki-notes ki-mist"} -->
<section class="wp-block-group alignfull ki-notes ki-mist"><!-- wp:group {"className":"ki-container","layout":{"type":"default"}} -->
<div class="wp-block-group ki-container"><!-- wp:group {"className":"ki-notes__head"} -->
<div class="wp-block-group ki-notes__head"><!-- wp:group {"className":"ki-sechead","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group ki-sechead"><!-- wp:paragraph {"className":"ki-vlabel"} -->
<p class="ki-vlabel"><?php echo wp_kses_post( kogarashi_inn_t( 'kdd1ba187' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"ki-h2"} -->
<h2 class="wp-block-heading ki-h2"><?php echo wp_kses_post( kogarashi_inn_t( 'ke7e0f654' ) ); ?></h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"ki-more"} -->
<p class="ki-more"><a href="/journal/"><?php echo wp_kses_post( kogarashi_inn_t( 'kd3da97e2' ) ); ?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ki-notes__cards sp-reveal sp-reveal--up"} -->
<div class="wp-block-group ki-notes__cards sp-reveal sp-reveal--up"><!-- wp:query {"queryId":1,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"ki-notes__query"} -->
<div class="wp-block-query ki-notes__query"><!-- wp:post-template {"className":"ki-cards","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"ki-card","layout":{"type":"default"}} -->
<div class="wp-block-group ki-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","className":"ki-card__thumb"} /-->

<!-- wp:group {"className":"ki-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group ki-card__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"ki-card__title"} /-->

<!-- wp:post-date {"format":"(Y.m.d)","className":"ki-card__date"} /-->

<!-- wp:post-excerpt {"excerptLength":22,"className":"ki-card__excerpt"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ki-rule"} -->
<div class="wp-block-group ki-rule"></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</section>
<!-- /wp:group -->
