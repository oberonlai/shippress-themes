<?php
/**
 * Title: Home: plant room (parallax)
 * Slug: kuki-climate/front-plant
 * Categories: kuki-climate
 * Keywords: parallax, photo, plant room
 * Viewport Width: 1440
 * Description: A full-bleed plant-room photograph that moves slower than the page, with a pale caption plate that stays still.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p03-plant-room.webp' ) ); ?>","dimRatio":0,"minHeight":72,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full","className":"kc-plant sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left kc-plant sp-parallax" style="min-height:72vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( kuki_climate_t( 'a41457fc1' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p03-plant-room.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"kc-plate","layout":{"type":"default"}} -->
<div class="wp-block-group kc-plate"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( kuki_climate_t( 'k7f030620' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
