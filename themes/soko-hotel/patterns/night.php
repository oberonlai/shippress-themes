<?php
/**
 * Title: Night on the quay: parallax band
 * Slug: soko-hotel/night
 * Categories: soko-hotel
 * Viewport Width: 1440
 * Description: Black band with 120px bars and a full-bleed 2.4:1 night still moving at its own speed; the headline stays on top.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-night","anchor":"night","layout":{"type":"default"}} -->
<section id="night" class="wp-block-group sk-night"><!-- wp:group {"className":"sk-night__frame sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sk-night__frame sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-night__fig"} -->
<figure class="wp-block-image size-full sk-night__fig"><img src="<?php echo soko_hotel_img( 'harbour-night.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p07' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"sk-night__copy","layout":{"type":"default"}} -->
<div class="wp-block-group sk-night__copy"><!-- wp:heading {"level":2,"className":"sk-night__h"} -->
<h2 class="wp-block-heading sk-night__h"><?php echo esc_html( soko_hotel_t( 'night_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-night__p"} -->
<p class="sk-night__p"><?php echo esc_html( soko_hotel_t( 'night_p' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
