<?php
/**
 * Title: Home: the road and the nearby
 * Slug: michikusa-lodge/front-road
 * Categories: michikusa-lodge
 * Viewport Width: 1440
 * Description: Band, two centred intro lines and a horizontal scroll-snap row of four 1.5:1 photographs with captions, round arrow links and a dot rule.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"ml-sec ml-sec--road","anchor":"road","layout":{"type":"default"}} -->
<section id="road" class="wp-block-group alignfull ml-sec ml-sec--road"><!-- wp:group {"className":"ml-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap"><!-- wp:group {"className":"ml-band sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ml-band sp-reveal sp-reveal--up"><!-- wp:heading {"level":2,"className":"ml-band__h"} -->
<h2 class="wp-block-heading ml-band__h"><?php echo esc_html( michikusa_lodge_t( 'road_band' ) ); ?></h2>
<!-- /wp:heading --><!-- wp:paragraph {"className":"ml-band__sub"} -->
<p class="ml-band__sub"><?php echo esc_html( michikusa_lodge_t( 'road_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:paragraph {"className":"ml-road__intro sp-reveal sp-reveal--up"} -->
<p class="ml-road__intro sp-reveal sp-reveal--up"><?php echo michikusa_lodge_lines( 'road_intro' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-roadrow sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group ml-roadrow sp-reveal sp-reveal--up"><!-- wp:group {"className":"ml-strip","layout":{"type":"default"}} -->
<div class="wp-block-group ml-strip"><!-- wp:group {"className":"ml-card","anchor":"road-1","layout":{"type":"default"}} -->
<div id="road-1" class="wp-block-group ml-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-card__img"} -->
<figure class="wp-block-image size-full ml-card__img"><img src="<?php echo michikusa_lodge_img( 'p09-trunk-road.webp' ); ?>" alt="<?php echo michikusa_lodge_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ml-card__l"} -->
<p class="ml-card__l"><?php echo esc_html( michikusa_lodge_t( 'road1_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-card__c"} -->
<p class="ml-card__c"><?php echo esc_html( michikusa_lodge_t( 'road1_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-card","anchor":"road-2","layout":{"type":"default"}} -->
<div id="road-2" class="wp-block-group ml-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-card__img"} -->
<figure class="wp-block-image size-full ml-card__img"><img src="<?php echo michikusa_lodge_img( 'p10-lake-layby.webp' ); ?>" alt="<?php echo michikusa_lodge_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ml-card__l"} -->
<p class="ml-card__l"><?php echo esc_html( michikusa_lodge_t( 'road2_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-card__c"} -->
<p class="ml-card__c"><?php echo esc_html( michikusa_lodge_t( 'road2_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-card","anchor":"road-3","layout":{"type":"default"}} -->
<div id="road-3" class="wp-block-group ml-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-card__img"} -->
<figure class="wp-block-image size-full ml-card__img"><img src="<?php echo michikusa_lodge_img( 'p11-bakery-window.webp' ); ?>" alt="<?php echo michikusa_lodge_a( 'alt_p11' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ml-card__l"} -->
<p class="ml-card__l"><?php echo esc_html( michikusa_lodge_t( 'road3_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-card__c"} -->
<p class="ml-card__c"><?php echo esc_html( michikusa_lodge_t( 'road3_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-card","anchor":"road-4","layout":{"type":"default"}} -->
<div id="road-4" class="wp-block-group ml-card"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ml-card__img"} -->
<figure class="wp-block-image size-full ml-card__img"><img src="<?php echo michikusa_lodge_img( 'p12-charging-canopy.webp' ); ?>" alt="<?php echo michikusa_lodge_a( 'alt_p12' ); ?>"/></figure>
<!-- /wp:image --><!-- wp:paragraph {"className":"ml-card__l"} -->
<p class="ml-card__l"><?php echo esc_html( michikusa_lodge_t( 'road4_l' ) ); ?></p>
<!-- /wp:paragraph --><!-- wp:paragraph {"className":"ml-card__c"} -->
<p class="ml-card__c"><?php echo esc_html( michikusa_lodge_t( 'road4_c' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><!-- wp:group {"className":"ml-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group ml-wrap"><!-- wp:group {"className":"ml-strip__ctl","layout":{"type":"default"}} -->
<div class="wp-block-group ml-strip__ctl"><!-- wp:html -->
<a class="ml-arrow ml-arrow--prev" href="#road-1" aria-label="<?php echo michikusa_lodge_a( 'road_prev' ); ?>"><span aria-hidden="true">←</span></a><a class="ml-arrow ml-arrow--next" href="#road-4" aria-label="<?php echo michikusa_lodge_a( 'road_next' ); ?>"><span aria-hidden="true">→</span></a>
<!-- /wp:html --><!-- wp:html -->
<p class="ml-dots"><a href="#road-1" aria-label="1"></a><a href="#road-2" aria-label="2"></a><a href="#road-3" aria-label="3"></a><a href="#road-4" aria-label="4"></a></p>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
