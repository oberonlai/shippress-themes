<?php
/**
 * Title: Home: a day, stop by stop
 * Slug: kuruma-tabi/front-stops
 * Categories: kuruma-tabi
 * Viewport Width: 1440
 * Description: Three route rows: a narrow text column and a wide photograph, mirrored from row to row, with a line drawing on the seam.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kt-sec kt-sec--pb","layout":{"type":"default"},"anchor":"stops"} -->
<section id="stops" class="wp-block-group alignfull kt-sec kt-sec--pb"><!-- wp:group {"className":"kt-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group kt-wrap"><!-- wp:group {"className":"kt-head","layout":{"type":"default"}} -->
<div class="wp-block-group kt-head"><!-- wp:html -->
<span class="kt-emblem"><?php echo kuruma_tabi_icon( 'wheel' ); ?></span>
<!-- /wp:html -->

<!-- wp:heading {"level":2,"className":"kt-h2"} -->
<h2 class="wp-block-heading kt-h2"><?php echo esc_html( kuruma_tabi_t( 'stops_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"kt-sub"} -->
<p class="kt-sub"><?php echo esc_html( kuruma_tabi_t( 'stops_sub' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-rows","layout":{"type":"default"}} -->
<div class="wp-block-group kt-rows"><!-- wp:group {"className":"kt-row","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row"><!-- wp:group {"className":"kt-row__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__text sp-reveal sp-reveal--left"><!-- wp:heading {"level":3,"className":"kt-h3"} -->
<h3 class="wp-block-heading kt-h3"><?php echo esc_html( kuruma_tabi_t( 'r1_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"kt-tags"} -->
<ul class="wp-block-list kt-tags"><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'tag1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'tag2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'tag3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'r1_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="<?php echo esc_url( home_url( '/itineraries/' ) ); ?>">→ <?php echo esc_html( kuruma_tabi_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__media sp-reveal sp-reveal--up"><!-- wp:html -->
<span class="kt-seam kt-seam--binoculars" aria-hidden="true"><?php echo kuruma_tabi_icon( 'binoculars' ); ?></span>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'viewpoint-binoculars.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p04' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row kt-row--mirror","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row kt-row--mirror"><!-- wp:group {"className":"kt-row__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__media sp-reveal sp-reveal--up"><!-- wp:html -->
<span class="kt-seam kt-seam--map" aria-hidden="true"><?php echo kuruma_tabi_icon( 'map' ); ?></span>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'harbour-lunch.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p05' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__text sp-reveal sp-reveal--left"><!-- wp:heading {"level":3,"className":"kt-h3"} -->
<h3 class="wp-block-heading kt-h3"><?php echo esc_html( kuruma_tabi_t( 'r2_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"kt-tags"} -->
<ul class="wp-block-list kt-tags"><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'tag1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'tag2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'tag3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'r2_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="<?php echo esc_url( home_url( '/itineraries/' ) ); ?>">→ <?php echo esc_html( kuruma_tabi_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row kt-row--tall","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row kt-row--tall"><!-- wp:group {"className":"kt-row__text sp-reveal sp-reveal--left","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__text sp-reveal sp-reveal--left"><!-- wp:heading {"level":3,"className":"kt-h3"} -->
<h3 class="wp-block-heading kt-h3"><?php echo esc_html( kuruma_tabi_t( 'r3_h' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"kt-tags"} -->
<ul class="wp-block-list kt-tags"><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'tag1' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'tag2' ) ); ?></li>
<!-- /wp:list-item --><!-- wp:list-item -->
<li><?php echo esc_html( kuruma_tabi_t( 'tag3' ) ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"kt-p"} -->
<p class="kt-p"><?php echo esc_html( kuruma_tabi_t( 'r3_b' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"kt-more"} -->
<p class="kt-more"><a href="<?php echo esc_url( home_url( '/itineraries/' ) ); ?>">→ <?php echo esc_html( kuruma_tabi_t( 'more' ) ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"kt-row__media sp-reveal sp-reveal--up","layout":{"type":"default"}} -->
<div class="wp-block-group kt-row__media sp-reveal sp-reveal--up"><!-- wp:html -->
<span class="kt-seam kt-seam--camera" aria-hidden="true"><?php echo kuruma_tabi_icon( 'camera' ); ?></span>
<!-- /wp:html -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"kt-ph"} -->
<figure class="wp-block-image size-full kt-ph"><img src="<?php echo kuruma_tabi_img( 'lakeside-walk.webp' ); ?>" alt="<?php echo kuruma_tabi_a( 'alt_p06' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
