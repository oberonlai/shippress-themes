<?php
/**
 * Title: Five o'clock: dark photo band from the gutter
 * Slug: sumibi-yakiniku/five
 * Categories: sumibi-yakiniku
 * Viewport Width: 1440
 * Description: A low-key photograph that starts at the 180px gutter and bleeds off the right edge, darkened, with one white statement line, a smaller line under it and a vertical label in the blush gutter. The photograph drifts with parallax.
 */
?>
<!-- wp:group {"tagName":"section","className":"sy-five","layout":{"type":"default"}} -->
<section class="wp-block-group sy-five" id="five"><!-- wp:paragraph {"className":"sy-label sy-label--l sp-reveal sp-reveal--up"} -->
<p class="sy-label sy-label--l sp-reveal sp-reveal--up"><?php echo esc_html( sumibi_yakiniku_t( 'five_label' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo sumibi_yakiniku_img( 'p05-room-five.webp' ); ?>","dimRatio":50,"overlayColor":"charcoal","isUserOverlayColor":true,"contentPosition":"center left","className":"sy-band sp-parallax","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left sy-band sp-parallax"><span aria-hidden="true" class="wp-block-cover__background has-charcoal-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo sumibi_yakiniku_a( 'alt_p05' ); ?>" src="<?php echo sumibi_yakiniku_img( 'p05-room-five.webp' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"className":"sy-band__line"} -->
<p class="sy-band__line"><?php echo esc_html( sumibi_yakiniku_t( 'five_line' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"sy-band__sub"} -->
<p class="sy-band__sub"><?php echo esc_html( sumibi_yakiniku_t( 'five_sub' ) ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
