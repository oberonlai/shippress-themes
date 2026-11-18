<?php
/**
 * Title: Home: boot room band
 * Slug: yukishiro-chalet/boot-room
 * Categories: yukishiro-chalet
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the drying room with a centred statement.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( yukishiro_chalet_img( 'drying-room.webp' ) ); ?>","dimRatio":30,"overlayColor":"ink","minHeight":600,"minHeightUnit":"px","contentPosition":"center center","isDark":true,"className":"yk-band sp-parallax","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light yk-band sp-parallax" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( yukishiro_chalet_t( 'alt_p09' ) ); ?>" src="<?php echo esc_url( yukishiro_chalet_img( 'drying-room.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"yk-lead yk-lead--w"} -->
<p class="yk-lead yk-lead--w"><?php echo esc_html( yukishiro_chalet_t( 'band_lead' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"yk-title yk-title--w"} -->
<h2 class="wp-block-heading yk-title yk-title--w"><?php echo esc_html( yukishiro_chalet_t( 'band_title' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"yk-band__p"} -->
<p class="yk-band__p"><?php echo esc_html( yukishiro_chalet_t( 'band_p' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
