<?php
/**
 * Title: Page: Visit
 * Slug: soko-hotel/page-visit
 * Categories: soko-hotel
 * Inserter: no
 * Viewport Width: 1440
 * Description: Letterbox opener, the address and how to arrive, an inset lobby still and the hours as stacked rows.
 */
?>
<!-- wp:group {"tagName":"section","className":"sk-open","layout":{"type":"default"}} -->
<section class="wp-block-group sk-open"><!-- wp:group {"className":"sk-open__frame sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-group sk-open__frame sp-parallax"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-open__fig"} -->
<figure class="wp-block-image size-full sk-open__fig"><img src="<?php echo soko_hotel_img( 'quay-street.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p16' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-titlebar","layout":{"type":"default"}} -->
<div class="wp-block-group sk-titlebar"><!-- wp:paragraph {"className":"sk-kicker"} -->
<p class="sk-kicker"><?php echo esc_html( soko_hotel_t( 'vis_kicker' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"sk-titlebar__h"} -->
<h1 class="wp-block-heading sk-titlebar__h"><?php echo esc_html( soko_hotel_t( 'vis_title' ) ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-intro","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-intro"><!-- wp:paragraph {"className":"sk-intro__p"} -->
<p class="sk-intro__p"><?php echo esc_html( soko_hotel_t( 'vis_intro' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-textsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-textsec"><!-- wp:heading {"level":2,"className":"sk-h2"} -->
<h2 class="wp-block-heading sk-h2"><?php echo esc_html( soko_hotel_t( 'vis_find_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-lede sk-lede--wide"} -->
<p class="sk-lede sk-lede--wide"><?php echo esc_html( soko_hotel_t( 'vis_find_p' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-inset sk-inset--page","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-inset sk-inset--page"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"sk-inset__fig sp-reveal sp-reveal--wipe"} -->
<figure class="wp-block-image size-full sk-inset__fig sp-reveal sp-reveal--wipe"><img src="<?php echo soko_hotel_img( 'lobby.webp' ); ?>" alt="<?php echo soko_hotel_a( 'alt_p13' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"sk-cap sk-cap--dark"} -->
<p class="sk-cap sk-cap--dark"><?php echo esc_html( soko_hotel_t( 'vis_inset_cap' ) ); ?></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-textsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-textsec"><!-- wp:heading {"level":2,"className":"sk-h2"} -->
<h2 class="wp-block-heading sk-h2"><?php echo esc_html( soko_hotel_t( 'vis_arrive_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"sk-lede sk-lede--wide"} -->
<p class="sk-lede sk-lede--wide"><?php echo esc_html( soko_hotel_t( 'vis_arrive_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"sk-rows sk-rows--after sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sk-rows sk-rows--after sp-stagger"><!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'vis_a1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'vis_a1v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'vis_a2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'vis_a2v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'vis_a3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'vis_a3v' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-rowsec","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-rowsec"><!-- wp:heading {"level":2,"className":"sk-h2"} -->
<h2 class="wp-block-heading sk-h2"><?php echo esc_html( soko_hotel_t( 'vis_hours_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"sk-rows sp-stagger","layout":{"type":"default"}} -->
<div class="wp-block-group sk-rows sp-stagger"><!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'vis_k1' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'vis_v1' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'vis_k2' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'vis_v2' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'vis_k3' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'vis_v3' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'vis_k4' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'vis_v4' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"sk-row sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group sk-row sp-reveal sp-reveal--up"><!-- wp:paragraph {"className":"sk-row__k"} -->
<p class="sk-row__k"><?php echo esc_html( soko_hotel_t( 'vis_k5' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-row__v"} -->
<p class="sk-row__v"><?php echo esc_html( soko_hotel_t( 'vis_v5' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sk-sec sk-endlink","layout":{"type":"default"}} -->
<section class="wp-block-group sk-sec sk-endlink"><!-- wp:paragraph {"className":"sk-lede sk-lede--wide"} -->
<p class="sk-lede sk-lede--wide"><?php echo esc_html( soko_hotel_t( 'vis_hours_p' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sk-more"} -->
<p class="sk-more"><a href="<?php echo esc_url( home_url( '/reserve/' ) ); ?>"><?php echo esc_html( soko_hotel_t( 'vis_more' ) ); ?></a></p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
