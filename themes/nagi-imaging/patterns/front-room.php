<?php
/**
 * Title: Home: reading room
 * Slug: nagi-imaging/front-room
 * Categories: nagi-imaging
 * Keywords: imaging, clinic, radiology
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the reading room with white strips of text at the bottom left.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-room.webp' ) ); ?>","dimRatio":30,"customOverlayColor":"#1c2226","isUserOverlayColor":true,"minHeight":84,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full","className":"nagi-room sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left nagi-room sp-parallax" style="min-height:84vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#1c2226"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( nagi_imaging_t( 'a83017820' ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/p11-room.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"nagi-room__fg","layout":{"type":"default"}} -->
<div class="wp-block-group nagi-room__fg">
<!-- wp:paragraph {"className":"nagi-label nagi-label--w"} -->
<p class="nagi-label nagi-label--w"><?php echo wp_kses_post( nagi_imaging_t( 'k19cd0bdc' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"nagi-strips nagi-strips--room"} -->
<p class="nagi-strips nagi-strips--room"><span class="nagi-strip"><?php echo wp_kses_post( nagi_imaging_t( 'k5c3dce97' ) ); ?></span><span class="nagi-strip"><?php echo wp_kses_post( nagi_imaging_t( 'k80470ed4' ) ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
