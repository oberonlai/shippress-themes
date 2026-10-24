<?php
/**
 * Title: Closing booking line
 * Slug: hitomi-vision/end-cta
 * Categories: hitomi-vision
 * Inserter: no
 * Description: A small outline button to book an exam and the opening hours under it, closing an inner page.
 */
?>
<!-- wp:group {"className":"hv-endcta","layout":{"type":"default"}} -->
<div class="wp-block-group hv-endcta"><!-- wp:buttons {"className":"hv-btns"} -->
<div class="wp-block-buttons hv-btns"><!-- wp:button {"className":"hv-btn hv-btn--lg"} -->
<div class="wp-block-button hv-btn hv-btn--lg"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/visit/' ) ); ?>"><?php echo esc_html( hitomi_vision_t( 'book' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"hv-hours"} -->
<p class="hv-hours"><?php echo esc_html( hitomi_vision_t( 'cta_hours' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
