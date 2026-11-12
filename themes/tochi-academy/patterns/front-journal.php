<?php
/**
 * Title: Home: journal
 * Slug: tochi-academy/front-journal
 * Categories: tochi-academy
 * Keywords: posts, blog, journal, cards
 * Viewport Width: 1440
 * Description: The latest three posts as bordered cards overlapping their photograph, with a vertical date.
 */
?>
<!-- wp:group {"align":"full","className":"ta-sec ta-sec--journal","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ta-sec ta-sec--journal"><!-- wp:group {"className":"ta-rail","layout":{"type":"default"}} -->
<div class="wp-block-group ta-rail"><!-- wp:paragraph {"className":"ta-rail__label"} -->
<p class="ta-rail__label"><?php echo wp_kses_post( tochi_academy_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ta-sec__body","layout":{"type":"default"}} -->
<div class="wp-block-group ta-sec__body"><!-- wp:paragraph {"className":"ta-label sp-reveal sp-reveal--mask"} -->
<p class="ta-label sp-reveal sp-reveal--mask"><?php echo wp_kses_post( tochi_academy_t( 'k6b2b5614' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"sp-reveal sp-reveal--mask"} -->
<h2 class="wp-block-heading sp-reveal sp-reveal--mask"><?php echo wp_kses_post( tochi_academy_t( 'k34b4c8ae' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"ta-journal","layout":{"type":"default"}} -->
<div class="wp-block-query ta-journal"><!-- wp:post-template {"className":"ta-cards ta-cards--posts","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"ta-card ta-card--post","layout":{"type":"default"}} -->
<div class="wp-block-group ta-card ta-card--post"><!-- wp:post-featured-image {"isLink":true,"className":"ta-card__photo"} /-->

<!-- wp:post-date {"className":"ta-vdate"} /-->

<!-- wp:group {"className":"ta-card__panel","layout":{"type":"default"}} -->
<div class="wp-block-group ta-card__panel"><!-- wp:post-terms {"term":"category","className":"ta-cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":22} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( tochi_academy_t( 'k8dcfd490' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"ta-pill"} -->
<div class="wp-block-button ta-pill"><a class="wp-block-button__link wp-element-button" href="/journal/"><?php echo wp_kses_post( tochi_academy_t( 'ke36454c1' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
