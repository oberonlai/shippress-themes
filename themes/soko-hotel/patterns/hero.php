<?php
/**
 * Title: Hero: letterbox stage
 * Slug: soko-hotel/hero
 * Categories: soko-hotel
 * Viewport Width: 1440
 * Description: First screen top and bottom halves: warm-black bars, one dim 2.4:1 still between them with the headline on the dark brick, the chapter index and three vertical links.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-stage","layout":{"type":"default"}} -->
<section class="wp-block-group sk-stage"><!-- wp:html -->
<div class="sk-splash" aria-hidden="true"><?php echo soko_hotel_icon( 'stamp', 'sk-splash__stamp' ); ?></div>
<!-- /wp:html -->

<!-- wp:group {"className":"sk-stage__main","layout":{"type":"default"}} -->
<div class="wp-block-group sk-stage__main"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-stage__photo"} -->
<figure class="wp-block-image size-full sk-stage__photo"><img src="<?php echo soko_hotel_img( 'hero-door.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="sk-scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"sk-stage__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sk-stage__copy"><!-- wp:heading {"level":1,"className":"sk-stage__h1"} -->
<h1 class="wp-block-heading sk-stage__h1"><?php echo esc_html( soko_hotel_t( 'hero_h1' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-stage__sub"} -->
<p class="sk-stage__sub"><?php echo esc_html( soko_hotel_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"tagName":"nav","className":"sk-idx","layout":{"type":"default"}} -->
<nav class="wp-block-group sk-idx" aria-label="<?php echo soko_hotel_a( 'idx_label' ); ?>"><!-- wp:paragraph -->
<p><a href="#rooms"><?php echo esc_html( soko_hotel_t( 'idx_rooms' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#people"><?php echo esc_html( soko_hotel_t( 'idx_people' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#night"><?php echo esc_html( soko_hotel_t( 'idx_night' ) ); ?></a></p>
<!-- /wp:paragraph --></nav>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-vert","layout":{"type":"default"}} -->
<div class="wp-block-group sk-vert"><!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/the-building/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'vert_since' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/rooms/#suites' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'vert_suites' ) ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'vert_door' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-stage__bar","layout":{"type":"default"}} -->
<div class="wp-block-group sk-stage__bar"><!-- wp:paragraph {"className":"sk-bar__where"} -->
<p class="sk-bar__where"><?php echo esc_html( soko_hotel_t( 'bar_where' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-bar__facts"} -->
<p class="sk-bar__facts"><?php echo esc_html( soko_hotel_t( 'bar_facts' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
