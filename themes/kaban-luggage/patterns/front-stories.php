<?php
/**
 * Title: Home: stories
 * Slug: kaban-luggage/front-stories
 * Categories: kaban-luggage
 * Keywords: luggage, shop, travel
 * Viewport Width: 1440
 * Description: Card mosaic: one tall card and two stacked cards from the three newest stories.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kl-stories kl-paper","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kl-stories kl-paper"><!-- wp:group {"className":"kl-stories__top","layout":{"type":"default"}} -->
<div class="wp-block-group kl-stories__top"><!-- wp:heading {"level":2,"className":"kl-stories__head"} -->
<h2 class="wp-block-heading kl-stories__head"><?php echo wp_kses_post( kaban_luggage_t( 'kd579dd9c' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kl-sublabel kl-sublabel--left"} -->
<p class="kl-sublabel kl-sublabel--left"><?php echo wp_kses_post( kaban_luggage_t( 'kcbb37401' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"kl-mosaic"} -->
<div class="wp-block-query kl-mosaic"><!-- wp:post-template {"className":"kl-mosaic__list"} -->
<!-- wp:group {"className":"kl-card","layout":{"type":"default"}} -->
<div class="wp-block-group kl-card"><!-- wp:post-featured-image {"isLink":true,"className":"kl-card__img"} /-->

<!-- wp:post-terms {"term":"category","className":"kl-card__cat"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kl-card__title"} /-->

<!-- wp:post-date {"className":"kl-card__date"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"className":"kl-card__excerpt"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph {"className":"kl-more"} -->
<p class="kl-more"><a href="/journal/"><?php echo wp_kses_post( kaban_luggage_t( 'k0cdd6ea3' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
