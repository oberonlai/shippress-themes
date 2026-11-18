<?php
/**
 * Title: Hero: window, answers and paw trail
 * Slug: ashiato-hotel/hero
 * Categories: ashiato-hotel
 * Viewport Width: 1440
 * Description: First screen split top and bottom: an inset rounded photo window that cross-fades four arrival moments with a huge light headline, the intro column, three quick answers and a paw trail.
 */
?>
<!-- wp:group {"tagName":"section","className":"ah-hero","layout":{"type":"default"}} -->
<section class="wp-block-group ah-hero"><!-- wp:group {"className":"ah-hero__grid","layout":{"type":"default"}} -->
<div class="wp-block-group ah-hero__grid"><!-- wp:group {"className":"ah-window sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group ah-window sp-parallax"><!-- wp:group {"className":"sp-parallax__layer ah-slides","layout":{"type":"default"}} -->
<div class="wp-block-group sp-parallax__layer ah-slides"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ah-slide"} -->
<figure class="wp-block-image size-full ah-slide"><img src="<?php echo ashiato_hotel_img( 'reception-greeting.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p01' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ah-slide ah-slide--alt"} -->
<figure class="wp-block-image size-full ah-slide ah-slide--alt"><img src="<?php echo ashiato_hotel_img( 'room-arrival.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p02' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ah-slide ah-slide--alt"} -->
<figure class="wp-block-image size-full ah-slide ah-slide--alt"><img src="<?php echo ashiato_hotel_img( 'dog-run-morning.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p03' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"ah-slide ah-slide--alt"} -->
<figure class="wp-block-image size-full ah-slide ah-slide--alt"><img src="<?php echo ashiato_hotel_img( 'terrace-breakfast.webp' ); ?>" alt="<?php echo ashiato_hotel_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ah-scrim" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ah-hero__copy","layout":{"type":"default"}} -->
<div class="wp-block-group ah-hero__copy"><!-- wp:heading {"level":1,"className":"ah-hero__h1"} -->
<h1 class="wp-block-heading ah-hero__h1"><?php echo esc_html( ashiato_hotel_t( 'hero_h1_a' ) ); ?><br><?php echo esc_html( ashiato_hotel_t( 'hero_h1_b' ) ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ah-hero__sub"} -->
<p class="ah-hero__sub"><?php echo esc_html( ashiato_hotel_t( 'hero_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<ul class="ah-dots" aria-label="<?php echo ashiato_hotel_a( 'dots_label' ); ?>"><li><span class="ah-sr"><?php echo esc_html( ashiato_hotel_t( 'dot_desk' ) ); ?></span></li><li><span class="ah-sr"><?php echo esc_html( ashiato_hotel_t( 'dot_room' ) ); ?></span></li><li><span class="ah-sr"><?php echo esc_html( ashiato_hotel_t( 'dot_run' ) ); ?></span></li><li><span class="ah-sr"><?php echo esc_html( ashiato_hotel_t( 'dot_terrace' ) ); ?></span></li></ul>
<!-- /wp:html -->

<!-- wp:group {"className":"ah-intro","layout":{"type":"default"}} -->
<div class="wp-block-group ah-intro"><!-- wp:paragraph {"className":"ah-eyebrow"} -->
<p class="ah-eyebrow"><?php echo esc_html( ashiato_hotel_t( 'hero_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-lede"} -->
<p class="ah-lede"><?php echo esc_html( ashiato_hotel_t( 'hero_lede' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-intro__p"} -->
<p class="ah-intro__p"><?php echo esc_html( ashiato_hotel_t( 'hero_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"ah-pill-wrap"} -->
<div class="wp-block-buttons ah-pill-wrap"><!-- wp:button {"className":"ah-pill"} -->
<div class="wp-block-button ah-pill"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/book/' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'book_room_arrow' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ah-desk"} -->
<p class="ah-desk"><?php echo esc_html( ashiato_hotel_t( 'hero_desk' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="ah-paws" aria-hidden="true"><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?><?php echo ashiato_hotel_icon( 'paw', 'ah-paw' ); ?></div>
<!-- /wp:html -->

<!-- wp:group {"className":"ah-tiles","layout":{"type":"default"}} -->
<div class="wp-block-group ah-tiles"><!-- wp:group {"className":"ah-tile","layout":{"type":"default"}} -->
<div class="wp-block-group ah-tile"><!-- wp:paragraph {"className":"ah-tile__q"} -->
<p class="ah-tile__q"><?php echo esc_html( ashiato_hotel_t( 'tile_size_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-tile__a"} -->
<p class="ah-tile__a"><?php echo esc_html( ashiato_hotel_t( 'tile_size_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-tile__x"} -->
<p class="ah-tile__x"><?php echo esc_html( ashiato_hotel_t( 'tile_size_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-tile__l"} -->
<p class="ah-tile__l"><a href="<?php echo esc_url( home_url( '/faq/#size' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'tile_read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-tile","layout":{"type":"default"}} -->
<div class="wp-block-group ah-tile"><!-- wp:paragraph {"className":"ah-tile__q"} -->
<p class="ah-tile__q"><?php echo esc_html( ashiato_hotel_t( 'tile_two_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-tile__a"} -->
<p class="ah-tile__a"><?php echo esc_html( ashiato_hotel_t( 'tile_two_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-tile__x"} -->
<p class="ah-tile__x"><?php echo esc_html( ashiato_hotel_t( 'tile_two_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-tile__l"} -->
<p class="ah-tile__l"><a href="<?php echo esc_url( home_url( '/faq/#two-dogs' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'tile_read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"ah-tile","layout":{"type":"default"}} -->
<div class="wp-block-group ah-tile"><!-- wp:paragraph {"className":"ah-tile__q"} -->
<p class="ah-tile__q"><?php echo esc_html( ashiato_hotel_t( 'tile_run_q' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-tile__a"} -->
<p class="ah-tile__a"><?php echo esc_html( ashiato_hotel_t( 'tile_run_a' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-tile__x"} -->
<p class="ah-tile__x"><?php echo esc_html( ashiato_hotel_t( 'tile_run_x' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ah-tile__l"} -->
<p class="ah-tile__l"><a href="<?php echo esc_url( home_url( '/faq/#dog-run' ) ); ?>"><?php echo esc_html( ashiato_hotel_t( 'tile_read' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
