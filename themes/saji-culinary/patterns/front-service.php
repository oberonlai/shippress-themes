<?php
/**
 * Title: Home: the pass lunch
 * Slug: saji-culinary/front-service
 * Categories: saji-culinary
 * Keywords: culinary school, cooking, chef
 * Viewport Width: 1440
 * Description: Full-bleed parallax photograph of the stove line with the lunch hours and a booking pill.
 */
?>
<!-- wp:cover {"url":"<?php echo saji_culinary_img( 's1-stove.webp' ); ?>","dimRatio":30,"overlayColor":"ink","isUserOverlayColor":true,"minHeight":72,"minHeightUnit":"vh","contentPosition":"bottom left","isDark":true,"align":"full","className":"saji-service sp-parallax"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left saji-service sp-parallax" style="min-height:72vh"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( saji_culinary_t( 'alt_s1' ) ); ?>" src="<?php echo saji_culinary_img( 's1-stove.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"saji-service__in","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide saji-service__in"><!-- wp:paragraph {"className":"saji-label saji-label--light"} -->
<p class="saji-label saji-label--light"><?php echo esc_html( saji_culinary_t( 'sv_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"saji-service__title"} -->
<h2 class="wp-block-heading saji-service__title"><?php echo saji_culinary_lines( 'sv_title' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"saji-service__text"} -->
<p class="saji-service__text"><?php echo esc_html( saji_culinary_t( 'sv_text' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"saji-service__cta"} -->
<div class="wp-block-buttons saji-service__cta"><!-- wp:button {"className":"is-style-pill-light"} -->
<div class="wp-block-button is-style-pill-light"><a class="wp-block-button__link wp-element-button" href="/the-pass/"><?php echo esc_html( saji_culinary_t( 'sv_cta' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
