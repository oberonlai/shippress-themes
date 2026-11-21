<?php
/**
 * Title: Home: seam portrait band
 * Slug: nagare-workation/front-seam
 * Categories: nagare-workation
 * Viewport Width: 1440
 * Description: A full-width lake panorama band with a tall portrait crossing its lower seam onto the pale ground, four white words split to both sides of it and two paragraphs below.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"nw-seam","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull nw-seam"><!-- wp:group {"className":"nw-seam__band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group nw-seam__band sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p09-lake-panorama.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p09' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"nw-word nw-word--1 sp-reveal sp-reveal--left"} -->
<p class="nw-word nw-word--1 sp-reveal sp-reveal--left"><?php echo esc_html( nagare_workation_t( 'seam_w1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-word nw-word--2 sp-reveal sp-reveal--left"} -->
<p class="nw-word nw-word--2 sp-reveal sp-reveal--left"><?php echo esc_html( nagare_workation_t( 'seam_w2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-word nw-word--3 sp-reveal sp-reveal--right"} -->
<p class="nw-word nw-word--3 sp-reveal sp-reveal--right"><?php echo esc_html( nagare_workation_t( 'seam_w3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nw-word nw-word--4 sp-reveal sp-reveal--right"} -->
<p class="nw-word nw-word--4 sp-reveal sp-reveal--right"><?php echo esc_html( nagare_workation_t( 'seam_w4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"nw-seam__portrait","layout":{"type":"default"}} -->
<div class="wp-block-group nw-seam__portrait"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nw-ph"} -->
<figure class="wp-block-image size-full nw-ph"><img src="<?php echo nagare_workation_img( 'p10-window-desk.webp' ); ?>" alt="<?php echo nagare_workation_a( 'alt_p10' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"nw-seam__text","layout":{"type":"default"}} -->
<div class="wp-block-group nw-seam__text"><!-- wp:heading {"level":2,"className":"nw-sr"} -->
<h2 class="wp-block-heading nw-sr"><?php echo esc_html( nagare_workation_t( 'seam_h2' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'seam_p1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html( nagare_workation_t( 'seam_p2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
