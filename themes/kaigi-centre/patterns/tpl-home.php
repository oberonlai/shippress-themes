<?php
/**
 * Title: Template: home
 * Slug: kaigi-centre/tpl-home
 * Categories: kaigi-centre
 * Inserter: no
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"tagName":"main","className":"kc-main kc-main--front","layout":{"type":"default"}} -->
<main class="wp-block-group kc-main kc-main--front">
<!-- wp:group {"tagName":"section","align":"full","className":"kc-hero kc-hero--inner","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-hero kc-hero--inner">
<!-- wp:group {"className":"kc-hero__stagewrap","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__stagewrap">
<!-- wp:group {"className":"kc-hero__stage","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__stage">
<!-- wp:group {"className":"kc-hero__wipe-i sp-reveal sp-reveal--wipe","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__wipe-i sp-reveal sp-reveal--wipe">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kc-hero__photo"} -->
<figure class="wp-block-image size-full kc-hero__photo"><img src="<?php echo kaigi_centre_img( 'food-coffee.webp' ); ?>" alt="<?php echo esc_attr( kaigi_centre_t( 'ia_food_coffee_webp' ) ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-pill","layout":{"type":"default"}} -->
<div class="wp-block-group kc-pill">
<!-- wp:paragraph {"className":"kc-pill__text"} -->
<p class="kc-pill__text"><svg class="kc-pill__icon" viewBox="0 0 16 16" width="14" height="14" aria-hidden="true" focusable="false"><circle cx="8" cy="8" r="6.5" fill="none" stroke="currentColor" stroke-width="1.2"/><path d="M8 7v4M8 4.8v.1" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg><?php echo esc_html( kaigi_centre_t( 'journal_pill' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"kc-hero__panel","layout":{"type":"default"}} -->
<div class="wp-block-group kc-hero__panel">
<!-- wp:paragraph {"className":"kc-label kc-label--light"} -->
<p class="kc-label kc-label--light"><?php echo wp_kses_post( kaigi_centre_t( 'kf4c6f851' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"kc-hero__title kc-hero__title--i"} -->
<h1 class="wp-block-heading kc-hero__title kc-hero__title--i"><?php echo wp_kses_post( kaigi_centre_t( 'kf1c9e9af' ) ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"tagName":"section","align":"full","className":"kc-inner kc-inner--first kc-journal","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull kc-inner kc-inner--first kc-journal"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"className":"kc-posts","layout":{"type":"default"}} -->
<div class="wp-block-query kc-posts"><!-- wp:post-template -->
<!-- wp:group {"className":"kc-post","layout":{"type":"default"}} -->
<div class="wp-block-group kc-post"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","className":"kc-post__img"} /-->

<!-- wp:group {"className":"kc-post__body","layout":{"type":"default"}} -->
<div class="wp-block-group kc-post__body"><!-- wp:post-date {"format":"j M Y","className":"kc-post__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"className":"kc-post__title"} /-->

<!-- wp:post-excerpt {"excerptLength":40,"moreText":"","className":"kc-post__excerpt"} /-->

<!-- wp:read-more {"content":"<?php echo esc_attr( kaigi_centre_t( 'journal_read' ) ); ?>","className":"kc-post__more"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
</main>
<!-- /wp:group -->
