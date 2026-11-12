<?php
/**
 * Title: Home: visit parallax band
 * Slug: himuro-gelato/front-visit
 * Categories: himuro-gelato
 * Viewport Width: 1440
 * Description: Full-bleed shopfront photograph with a parallax drift and a paper panel for the address, hours and contact.
 */
?>
<!-- wp:group {"className":"hg-visit","layout":{"type":"default"},"tagName":"section","align":"full"} -->
<section class="wp-block-group alignfull hg-visit"><!-- wp:cover {"url":"<?php echo himuro_gelato_img( 's1' ); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":80,"minHeightUnit":"vh","className":"hg-visit__stage sp-parallax"} -->
<div class="wp-block-cover hg-visit__stage sp-parallax" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( himuro_gelato_t( 'alt_s1' ) ); ?>" src="<?php echo himuro_gelato_img( 's1' ); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"hg-wrap hg-visit__in","layout":{"type":"default"}} -->
<div class="wp-block-group hg-wrap hg-visit__in"><!-- wp:group {"className":"hg-panel","layout":{"type":"default"}} -->
<div class="wp-block-group hg-panel"><!-- wp:heading {"level":2,"className":"hg-panel__h"} -->
<h2 class="wp-block-heading hg-panel__h"><?php echo esc_html( himuro_gelato_t( 'vs_h' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hg-panel__a"} -->
<p class="hg-panel__a"><?php echo himuro_gelato_lines( 'vs_addr' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-panel__a"} -->
<p class="hg-panel__a"><?php echo himuro_gelato_lines( 'vs_hours' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-panel__a"} -->
<p class="hg-panel__a"><a href="tel:+000010482019070"><?php echo esc_html( himuro_gelato_t( 'vs_phone' ) ); ?></a><br><a href="mailto:hello@himurogelato.example">hello@himurogelato.example</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hg-panel__s"} -->
<p class="hg-panel__s"><?php echo esc_html( himuro_gelato_t( 'vs_seats' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"hg-btn"} -->
<div class="wp-block-button hg-btn"><a class="wp-block-button__link wp-element-button" href="/visit/"><?php echo esc_html( himuro_gelato_t( 'vs_btn' ) ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></section>
<!-- /wp:group -->
