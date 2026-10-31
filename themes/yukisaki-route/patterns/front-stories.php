<?php
/**
 * Title: Home: stories
 * Slug: yukisaki-route/front-stories
 * Categories: yukisaki-route
 * Keywords: delivery, route, courier
 * Viewport Width: 1440
 * Description: Three 3:2 story photographs with a title and a grey firm line, staggered in; link to all stories.
 */
?>
<!-- wp:group {"className":"yr-sec yr-stories-sec","align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull yr-sec yr-stories-sec">
<!-- wp:group {"className":"yr-wrap yr-wrap--wide","layout":{"type":"default"},"anchor":"stories"} -->
<div class="wp-block-group yr-wrap yr-wrap--wide" id="stories">
<!-- wp:group {"className":"yr-head yr-head--left","layout":{"type":"default"}} -->
<div class="wp-block-group yr-head yr-head--left">
<!-- wp:paragraph {"className":"yr-eyebrow"} -->
<p class="yr-eyebrow"><?php echo esc_html( yukisaki_route_t( 'st_eye' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading"><?php echo esc_html( yukisaki_route_t( 'st_h' ) ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"yr-stories sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group yr-stories sp-stagger">
<!-- wp:group {"className":"yr-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-story sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-story__img"} -->
<figure class="wp-block-image size-full yr-story__img"><img src="<?php echo yukisaki_route_img( 'p10-old-town-street.webp' ); ?>" alt="<?php echo esc_attr( yukisaki_route_t( 'alt_P10' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"yr-story__t"} -->
<p class="yr-story__t"><?php echo esc_html( yukisaki_route_t( 'st_t0' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yr-story__m"} -->
<p class="yr-story__m"><?php echo esc_html( yukisaki_route_t( 'st_m0' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yr-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-story sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-story__img"} -->
<figure class="wp-block-image size-full yr-story__img"><img src="<?php echo yukisaki_route_img( 'p11-pharmacy-handover.webp' ); ?>" alt="<?php echo esc_attr( yukisaki_route_t( 'alt_P11' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"yr-story__t"} -->
<p class="yr-story__t"><?php echo esc_html( yukisaki_route_t( 'st_t1' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yr-story__m"} -->
<p class="yr-story__m"><?php echo esc_html( yukisaki_route_t( 'st_m1' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"yr-story sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group yr-story sp-reveal sp-reveal--up">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"yr-story__img"} -->
<figure class="wp-block-image size-full yr-story__img"><img src="<?php echo yukisaki_route_img( 'p12-flower-crates.webp' ); ?>" alt="<?php echo esc_attr( yukisaki_route_t( 'alt_P12' ) ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"yr-story__t"} -->
<p class="yr-story__t"><?php echo esc_html( yukisaki_route_t( 'st_t2' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"yr-story__m"} -->
<p class="yr-story__m"><?php echo esc_html( yukisaki_route_t( 'st_m2' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"yr-more"} -->
<p class="yr-more"><a href="/stories/"><?php echo esc_html( yukisaki_route_t( 'st_all' ) ); ?> →</a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
