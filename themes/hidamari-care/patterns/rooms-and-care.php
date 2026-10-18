<?php
/**
 * Title: Home: rooms and care levels
 * Slug: hidamari-care/rooms-and-care
 * Categories: hidamari-care
 * Keywords: senior care, residence, nursing
 * Viewport Width: 1440
 * Description: A celadon field in two columns: the room (three facts, a framed room photo with the cut-out armchair breaking out of the frame) and the three care levels.
 */
?>
<!-- wp:group {"tagName":"section","className":"hc-rc","align":"full","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull hc-rc"><!-- wp:group {"className":"hc-rc__room","layout":{"type":"default"}} -->
<div class="wp-block-group hc-rc__room"><!-- wp:paragraph {"className":"hc-eyebrow"} -->
<p class="hc-eyebrow"><?php echo esc_html( hidamari_care_t( 'rm_eyebrow' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"hc-sec__title"} -->
<h2 class="wp-block-heading hc-sec__title"><?php echo esc_html( hidamari_care_t( 'rm_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:html -->
<ul class="hc-rc__facts"><li><?php echo esc_html( hidamari_care_t( 'rm_f1' ) ); ?></li><li><?php echo esc_html( hidamari_care_t( 'rm_f2' ) ); ?></li><li><?php echo esc_html( hidamari_care_t( 'rm_f3' ) ); ?></li></ul>
<!-- /wp:html -->

<!-- wp:group {"className":"hc-rc__collage","layout":{"type":"default"}} -->
<div class="wp-block-group hc-rc__collage"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-rc__photo"} -->
<figure class="wp-block-image size-full hc-rc__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/room.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_room' ) ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"hc-rc__chair"} -->
<figure class="wp-block-image size-full hc-rc__chair"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/armchair-cutout.webp' ) ); ?>" alt="<?php echo esc_attr( hidamari_care_t( 'alt_armchair' ) ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-rc__care","layout":{"type":"default"}} -->
<div class="wp-block-group hc-rc__care"><!-- wp:heading {"level":3,"className":"hc-rc__care-t"} -->
<h3 class="wp-block-heading hc-rc__care-t"><?php echo esc_html( hidamari_care_t( 'care_t' ) ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"hc-rc__lvl","layout":{"type":"default"}} -->
<div class="wp-block-group hc-rc__lvl"><!-- wp:paragraph {"className":"hc-rc__no"} -->
<p class="hc-rc__no">01</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"hc-rc__lvl-t"} -->
<h4 class="wp-block-heading hc-rc__lvl-t"><?php echo esc_html( hidamari_care_t( 'c1_t' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-rc__lvl-d"} -->
<p class="hc-rc__lvl-d"><?php echo esc_html( hidamari_care_t( 'c1_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-rc__lvl","layout":{"type":"default"}} -->
<div class="wp-block-group hc-rc__lvl"><!-- wp:paragraph {"className":"hc-rc__no"} -->
<p class="hc-rc__no">02</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"hc-rc__lvl-t"} -->
<h4 class="wp-block-heading hc-rc__lvl-t"><?php echo esc_html( hidamari_care_t( 'c2_t' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-rc__lvl-d"} -->
<p class="hc-rc__lvl-d"><?php echo esc_html( hidamari_care_t( 'c2_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hc-rc__lvl","layout":{"type":"default"}} -->
<div class="wp-block-group hc-rc__lvl"><!-- wp:paragraph {"className":"hc-rc__no"} -->
<p class="hc-rc__no">03</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"hc-rc__lvl-t"} -->
<h4 class="wp-block-heading hc-rc__lvl-t"><?php echo esc_html( hidamari_care_t( 'c3_t' ) ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hc-rc__lvl-d"} -->
<p class="hc-rc__lvl-d"><?php echo esc_html( hidamari_care_t( 'c3_d' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
